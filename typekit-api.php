<?php

class TypekitApi {

	const PREVIEWKIT_AUTH_ID = 'wp';

	const API_BASE = 'https://typekit.com/api/v1/json';
	const API_TOKEN = WPCOM_TYPEKIT_API_TOKEN;

	/**
	 * Makes a generic request to the Typekit API using the API base url defined
	 * as a constant in this class. The postdata needs to include a token if the
	 * request requires authentication. If the method is DELETE, a POST request
	 * with an additional postdata parameter is actually issued.
	 *
	 * See https://typekit.com/docs/api/errors for API error codes and what they mean.
	 *
	 * @param string $method The HTTP method to use (e.g. GET, POST, DELETE).
	 * @param string $endpoint The API endpoint to make the request to.
	 * @param array $postdata The data keys and values to include (default: array() ).
	 * @return array|WP_Error Returns a json_decoded result as an associative array or an error object.
	 */
	private static function request( $method, $endpoint, $postdata = array() ) {
		$url = self::API_BASE . $endpoint;

		if ( 'DELETE' == $method ) {
			$method = 'POST';
			$postdata['_method'] = 'DELETE';
		}

		$request_args = array(
			'headers' => array( 'X-Typekit-Token' => self::API_TOKEN ),
			'body' => $postdata,
			'timeout' => 10000,
		);

		// Try Typekit API up to six times (one initial, plus five retries), with two-second delays upon failure.
		// See https://wpcom.trac.automattic.com/ticket/2728
		$result = false;
		$status_code = 0; // wp_remote_retrieve_response_code() returns empty string if code isn't available, which we cast to an integer below
		$object = false;
		$tries = 0;

		while ( false === $object && $tries < 6 ) {
			if ( $tries > 0 ) {
				sleep( 2 );
			}

			$tries++;

			// Make remote request of method specified and retrieve status code
			$result = 'GET' == $method ? wp_remote_get( $url, $request_args ) : wp_remote_post( $url, $request_args );
			$status_code = (int) wp_remote_retrieve_response_code( $result );

			if ( is_wp_error( $result ) ) {
				continue;
			}

			if ( 200 == $status_code ) {
				$object = json_decode( wp_remote_retrieve_body( $result ), true );
				break;
			} elseif ( in_array( $status_code, array( 400, 401, 404, 503 ) ) ) {
				// Don't retry requests that return these status codes as they will fail consistently
				break;
			} else {
				bump_stats_extras( 'typekit_api_error_retry', $status_code );
				$object = false;
			}
		}

		// Return an error if Typekit API failed after six attempts
		if ( is_wp_error( $result ) ) {
			self::log_error( $result, $url, $request_args );
			return $result;
		} elseif ( 200 != $status_code ) {
			self::log_error( $result, $url, $request_args );

			$error_details = ( is_array( $object ) && array_key_exists( 'errors', $object ) ) ? $status_code . ': ' . implode( ' ', $object['errors'] ) : $status_code;

			switch ( $status_code ) {
				case 400:
					// 400 for errors in the data provided by your application
					return new WP_Error( 'typekit_api_400', "There was a problem with the data submitted to the font service. ( $error_details ) Please try again or contact support.", array( 'status' => $status_code ) );
				case 401:
					// 401 if authentication is needed to access the requested endpoint
					return new WP_Error( 'typekit_api_401', "There was a problem accessing the font service. ( $error_details ) Please try again or contact support.", array( 'status' => $status_code ) );
				case 403:
					// 403 if your application has been rate limited
					return new WP_Error( 'typekit_api_403', "There was a problem communicating with the font service. ( $error_details ) Please try again or contact support.", array( 'status' => $status_code ) );
				case 404:
					// 404 if you are requesting a resource that doesn't exist
					return new WP_Error( 'typekit_api_404', "There was a problem communicating with the font service. ( $error_details ) Please try again or contact support.", array( 'status' => $status_code ) );
				case 500:
					// 500 if our servers are unable to process the request
					return new WP_Error( 'typekit_api_500', "There was a problem communicating with the font service. ( $error_details ) Please try again or contact support.", array( 'status' => $status_code ) );
				case 503:
					// 503 if the Typekit API is offline for maintenance
					return new WP_Error( 'typekit_api_503', "There was a problem communicating with the font service. ( $error_details ) Please try again later.", array( 'status' => $status_code ) );
			}
			return new WP_Error( 'typekit_api_generic_error', "There was a problem communicating with the font service. ( $error_details ) Please try again or contact support.", array( 'status' => $status_code ) );
		}

		// Great, we've got something to return
		return $object;
	}

	public static function get_family( $font_id ) {
		$font_id = rawurlencode( $font_id );
		return self::request( 'GET', "/families/$font_id" );
	}

	/**
	 * Makes an API request to create a new kit
	 *
	 * @param array $domains The domain hostnames that this kit should be restricted to.
	 * @param string $name The name of the kit to create (visible in the kit's colophon page ).
	 * @param string $subset The character set to use when adding each of the families (default: 'default' ).
	 * @param array $families The array of families (like from TypekitAdmin::get_standard_form_data) to add to the kit.
	 * @return array|WP_Error Returns a json_decoded result as an associative array or an error object.
	 */
	public static function create_kit( $domains, $name, $subset = 'default', $families = array() ) {
		return self::edit_kit( '', $domains, $name, $subset, $families );
	}

	/**
	 * Makes an API request to update an existing kit
	 *
	 * @param string $kit_id The id of the kit to update with new values.
	 * @param array $domains The domain hostnames that this kit should be restricted to.
	 * @param string $name The name of the kit to create (visible in the kit's colophon page ).
	 * @param string $subset The character set to use when adding each of the families (default: 'default' ).
	 * @param array $families The array of families (like from TypekitAdmin::get_standard_form_data) to add to the kit.
	 * @return array|WP_Error Returns a json_decoded result as an associative array or an error object.
	 */
	public static function edit_kit( $kit_id, $domains, $name, $subset = 'default', $families = array() ) {
		if ( empty( $families ) ) {
			return new WP_Error( 'typekit_api_error', 'Cannot edit kit. No Typekit fonts to save.', array( 'status' => 400 ) );
		}
		if ( ! is_array( $domains ) ) {
			return new WP_Error( 'typekit_api_error', 'Cannot edit kit. Domains are not in the correct format', array( 'status' => 400 ) );
		}

		$postdata = array(
				'name' => $name,
				'domains' => implode( ',', $domains ),
				'badge' => false,
				'analytics' => false,
		);

		$family_count = 0;
		foreach ( $families as $family ) {
			if ( $family['id'] ) {
				$postdata[ "families[$family_count][id]" ] = $family['id'];
				$postdata[ "families[$family_count][subset]" ] = $subset;

				// Build array of variations based either on input or data about known fonts
				$variations = array();
				if ( is_string( $family['fvd'] ) ) {
					$variations = array( $family['fvd'] );
				} elseif ( is_array( $family['fvd'] ) ) {
					$variations = $family['fvd'];
				} else {
					$_family = self::get_font_by_id( $family['id'] );
					if ( is_array( $_family ) ) {
						$variations = self::get_family_fvds( $_family, true );
					}
				}

				// By letting themes specifiy variations, ensure that only valid values are passed in the API requests
				$variations = array_filter( array_map( array( __CLASS__, 'filter_allowed_variations' ), $variations ) );
				$variation_count = 0;
				foreach ( $variations as $variation ) {
					$postdata[ "families[$family_count][variations][$variation_count]" ] = $variation;
					$variation_count++;
				}
				$family_count++;
			}
		}
		if ( 0 == $family_count ) {
			// Remove all families from the kit for tracking purposes
			$postdata['families'] = '';
		}

		$kit_id = rawurlencode( $kit_id );
		return self::request( 'POST', "/kits/$kit_id", $postdata );
	}

	/**
	 * Get a single font from our listing of fonts.
	 * @param  string $id Font id
	 * @return array|false     Font object if found, false if not.
	 */
	private static function get_font_by_id( $id ) {
		$provider = Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
		return $provider->get_font( $id );
	}

	/**
	 * Gets an array of fvds present in a given font family. Depending on the
	 * family and the `$reduce` setting, may reduce the fvds to the four most
	 * common, although that may not be `n4, i4, n7, i7` if the family doesn't
	 * support those. In that case, we will use the four closest fvds following
	 * the rules used by browsers:
	 * https://developer.mozilla.org/en/docs/Web/CSS/font-weight#Fallback
	 *
	 * @param array $family An associative array of font family data.
	 * @param bool  $reduce Reduce to "regular", "bold", "italic", "bold italic" variations
	 *                      for families with > 4 variations
	 * @return array Returns an array of strings for the fvds defined in this font family.
	 */
	private static function get_family_fvds( $family, $reduce = false ) {
		if ( ! isset( $family['fvds'] ) || ! is_array( $family['fvds'] ) ) {
			return array();
		}
		$variations = $family['fvds'];
		if ( true !== $reduce || count( $variations ) <= 4 ) {
			return $variations;
		}

		$nearest_variations = array();
		$standard_variations = array( 'n4', 'n7', 'i4', 'i7' );
		foreach ( $standard_variations as $standard_fvd ) {
			if ( in_array( $standard_fvd, $variations ) ) {
				array_push( $nearest_variations, $standard_fvd );
			} else {
				array_push( $nearest_variations, self::find_nearest_fvd( $standard_fvd, $variations ) );
			}
		}
		return $nearest_variations;
	}

	/**
	 * Searches an array of available fvds and returns the one that most closely
	 * matches the target, following the rules in
	 * https://developer.mozilla.org/en/docs/Web/CSS/font-weight#Fallback
	 *
	 * @param string $target_fvd An fvd to match or get close to
	 * @param array $available_fvds An array of strings (fvds) to search
	 * @return string Thee closest matching fvd
	 */
	public static function find_nearest_fvd( $target_fvd, $available_fvds ) {
		if ( in_array( $target_fvd, $available_fvds ) ) {
			return $target_fvd;
		}

		$target_weight = self::get_weight_from_fvd( $target_fvd );
		$closest_darker = self::get_closest_darker_weight( $target_fvd, $available_fvds );
		$closest_lighter = self::get_closest_lighter_weight( $target_fvd, $available_fvds );

		// If a weight greater than 500 is given, the closest available darker
		// weight is used (or, if there is none, the closest available lighter
		// weight).
		if ( $target_weight > 500 ) {
			if ( $closest_darker ) {
				return self::adjust_fvd_weight( $target_fvd, $closest_darker );
			}
			return self::adjust_fvd_weight( $target_fvd, $closest_lighter );
		}

		// If a weight less than 400 is given, the closest available lighter weight
		// is used (or, if there is none, the closest available darker weight).
		if ( $target_weight < 400 ) {
			if ( $closest_lighter ) {
				return self::adjust_fvd_weight( $target_fvd, $closest_lighter );
			}
			return self::adjust_fvd_weight( $target_fvd, $closest_darker );
		}

		// If a weight of exactly 400 is given, then 500 is used. If 500 is not
		// available, then the heuristic for font weights less than 500 is used.
		if ( 400 === $target_weight ) {
			$five_hundred = self::adjust_fvd_weight( $target_fvd, 500 );
			if ( in_array( $five_hundred, $available_fvds ) ) {
				return $five_hundred;
			}
			return self::adjust_fvd_weight( $target_fvd, $closest_lighter );
		}

		// If a weight of exactly 500 is given, then 400 is used. If 400 is not
		// available, then the heuristic for font weights less than 400 is used.
		if ( 500 === $target_weight ) {
			$four_hundred = self::adjust_fvd_weight( $target_fvd, 400 );
			if ( in_array( $four_hundred, $available_fvds ) ) {
				return $four_hundred;
			}
			return self::adjust_fvd_weight( $target_fvd, $closest_lighter );
		}

		// We should never end up here
		return 'n4';
	}

	private static function get_closest_darker_weight( $target_fvd, $available_fvds ) {
		$target_weight = self::get_weight_from_fvd( $target_fvd );
		$available_weights = array_map( function( $fvd ) {
			return self::get_weight_from_fvd( $fvd );
		}, $available_fvds );
		sort( $available_weights );

		// Get the next darkest weight
		$closest = $target_weight;
		foreach ( $available_weights as $weight ) {
			if ( $weight > $closest ) {
				$closest = $weight;
				break;
			}
		}

		// If there is no darker weight, return null
		if ( $closest === $target_weight ) {
			$closest = null;
		}
		return $closest;
	}

	private static function get_closest_lighter_weight( $target_fvd, $available_fvds ) {
		$target_weight = self::get_weight_from_fvd( $target_fvd );
		$available_weights = array_map( function( $fvd ) {
			return self::get_weight_from_fvd( $fvd );
		}, $available_fvds );
		rsort( $available_weights );

		// Get the next lighter weight
		$closest = $target_weight;
		foreach ( $available_weights as $weight ) {
			if ( $weight < $closest ) {
				$closest = $weight;
				break;
			}
		}

		// If there is no lighter weight, return null
		if ( $closest === $target_weight ) {
			$closest = null;
		}
		return $closest;
	}

	private static function adjust_fvd_weight( $fvd, $weight ) {
		$style = substr( $fvd, 0, 1 );
		$weight = substr( strval( $weight ), 0, 1 );
		return $style . $weight;
	}

	private static function get_weight_from_fvd( $fvd ) {
		if ( ! class_exists( 'kevintweber\KtwFvd\Fvd' ) ) {
			require_once( __DIR__ . '/lib/Fvd.php' );
		}
		try {
			$parsed = kevintweber\KtwFvd\Fvd::Parse( $fvd );
			if ( $parsed && $parsed['font-weight'] ) {
				return intval( $parsed['font-weight'], 10 );
			}
		} catch ( Exception $e ) {
			// fall back to the default
		}
		return 400;
	}

	/**
	 * Makes an API request to publish a kit that's already been created. It is
	 * necessary to publish a kit any time that changes are made via
	 * self::edit_kit() in order to make them live. There may be a slight delay
	 * between publishing a kit and the changes showing up on the blog.
	 *
	 * @param string $kit_id The id of the kit to publish.
	 * @return array|WP_Error Returns a json_decoded result as an associative array or an error object.
	 */
	public static function publish_kit( $kit_id ) {
		$kit_id = rawurlencode( $kit_id );
		return self::request( 'POST', "/kits/$kit_id/publish" );
	}

	/**
	 * Makes an API request to delete a kit that's already been created. Kits
	 * should be deleted when a user's data is reset so that we don't end up with
	 * a bunch of unused kits in the Typekit account.
	 *
	 * @param string $kit_id The id of the kit to delete.
	 * @return array|WP_Error Returns a json_decoded result as an associative array or an error object.
	 */
	public static function delete_kit( $kit_id ) {
		$kit_id = rawurlencode( $kit_id );
		return self::request( 'DELETE', "/kits/$kit_id" );
	}

	/**
	 * Makes an API request to retrieve the public information about a published
	 * kit with a given id.
	 *
	 * @param string $kit_id The id of the kit to retrieve information about.
	 * @return array|WP_Error Returns a json_decoded result as an associative array or an error object.
	 */
	public static function get_published_kit_info( $kit_id ) {
		$kit_id = rawurlencode( $kit_id );
		return self::request( 'GET', "/kits/$kit_id/published" );
	}

	/**
	 * Makes an API request to retrieve the private information about a draft
	 * kit with a given id.
	 *
	 * @param string $kit_id The id of the kit to retrieve information about.
	 * @return array|WP_Error Returns a json_decoded result as an associative array or an error object.
	 */
	public static function get_kit_info( $kit_id ) {
		$kit_id = rawurlencode( $kit_id );
		return self::request( 'GET', "/kits/$kit_id" );
	}

	/**
	 * Makes an API request to retrieve a previewkit authentication token valid
	 * for the given domain. The tokens that are returned are only valid for a
	 * fixed period of time, and that period is included in the data that's returned.
	 *
	 * @param string $domain The domain to get a valid previewkit auth token for.
	 * @return array|WP_Error Returns a json_decoded result as an associative array or an error object.
	 */
	public static function get_previewkit_auth_for_domain( $domain ) {
		$auth_id = rawurlencode( self::PREVIEWKIT_AUTH_ID );
		$domain = rawurlencode( $domain );
		return self::request( 'GET', "/previewkitauths/$auth_id/$domain" );
	}

	/**
	 * Ensure only allowed variations are specified in API requests
	 *
	 * Details on allowed options at https://github.com/typekit/fvd
	 *
	 * Examples: i4, n4, i7, n7, [style][weight]
	 *
	 * n - normal
	 * i - italic
	 * o - oblique
	 * 1-9 indicate font weight
	 *
	 * @param string $variation
	 * @return string or false
	 */
	public static function filter_allowed_variations( $variation ) {
		if ( preg_match( '#[nio]{1}[1-9]{1}#', $variation ) ) {
			return $variation;
		} else {
			return false;
		}
	}

	private static function log_error( $result, $url, $request ) {
		if ( empty( $result ) ) {
			return;
		}
		if ( defined( 'IS_TEST_RUNNING' ) && IS_TEST_RUNNING ) {
			return;
		}
		if ( ! ( defined( 'IS_WPCOM' ) && IS_WPCOM ) ) {
			return;
		}
		$blog_id = get_current_blog_id();
		$error_code = wp_remote_retrieve_response_code( $result );
		$server_uri = esc_url( $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] );
		$backtrace = self::backtrace();
		$error_payload = "Typekit API error for $blog_id, triggered by $server_uri\n\nTypekit URI: $url\n\nRequest: " . print_r( $request, true ) . "\n\nResult: " . print_r( $result, true ) . "\n\nBacktrace:\n $backtrace";

		// No mail in WP_CLI
		if ( defined( 'WP_CLI' ) && WP_CLI ) {
			WP_CLI::print_value( $error_payload );
			return;
		}

		// Only send error reports in production
		if ( ! function_exists( 'bump_stats_extras' ) ) {
			return;
		}

		// Send error report.
		if ( '404' != $error_code ) {
			wp_mail(
				'jeff@automattic.com, payton@automattic.com',
				'Typekit API error',
				$error_payload
			);
		}
		// Log it.
		error_log( $error_payload );
		// Bump stats.
		if ( empty( $error_code ) ) {
			$error_code = 'undefined';
		}
		bump_stats_extras( 'typekit_api_error', $error_code );
	}

	private static function backtrace() {
		$trace = debug_backtrace( false );
		$out = '';
		foreach ( $trace as $ent ) {
			if ( isset( $ent['file'] ) ) {
				$out .= $ent['file'];
			}
			if ( isset( $ent['function'] ) ) {
				$out .= ':' . $ent['function'] . '()';
			}
			if ( isset( $ent['line'] ) ) {
				$out .= ' at line ' . $ent['line'] . ' ';
			}
			if ( isset( $ent['file'] ) ) {
				$out .= ' in ' . $ent['file'];
			}
			$out .= "\n";
		}
		return $out;
	}
}
