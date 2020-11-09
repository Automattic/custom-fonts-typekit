<?php
class Jetpack_Typekit_Font_Provider extends Jetpack_Font_Provider {

	protected $api_base = 'https://typekit.com/api/v1/json';

	public $id = 'typekit';

	/**
	 * These are the IDs to fetch data about. We hardcode this list because each font
	 * must have its data fetched from the API individually: the library list endpoint
	 * at https://typekit.com/api/v1/json/libraries/full does not provide the data we need.
	 * @var array
	 */
	protected $ids_to_populate = array(
		'gjst', 'gmsj', 'sskw', 'fbln', 'nlwf', 'tsyb', 'yvxn', 'ymzk', 'vybr', 'wgzc',
		'hrpf', 'klcb', 'drjf', 'gkmg', 'vqgt', 'pcpv', 'gckq', 'snqb', 'gwsq', 'rlxq',
		'dbqg', 'fytf', 'brwr', 'rrtc', 'rgzb', 'sbsp', 'xwmz', 'ttyp', 'pzyv', 'twbx',
		'ftnk', 'lmgn', 'gmvz', 'cwfk', 'jgfl', 'vyvm', 'mrnw', 'rvnd', 'mvgb', 'rshz',
		'kmpm', 'zsyz', 'lcny', 'nljb', 'htrh', 'ycvr', 'llxb', 'mpmb', 'jtcj', 'rfss',
		'xcqq', 'vcsm', 'ccqc', 'nqdy', 'snjm', 'rtgb', 'hzlv', 'wbmp', 'mkrf', 'qlvb',
		'bhyf', 'yrwy', 'fkjd', 'plns', 'jhhw', 'wktd'
	);

	/**
	 * These fonts were once available but have been retired. A user with this font currently
	 * set will continue to see it.
	 * @var array
	 */
	protected $retired_font_ids = array(
		'gkmg', // Droid Sans
		'pcpv', // Droid Serif
		'gckq', // Eigerdals
		'gwsq', // FF Brokenscript Web Condensed
		'dbqg', // FF Dax
		'rgzb', // FF Netto
		'sbsp', // FF Prater Block
		'rvnd', // Latpure
		'zsyz', // Liberation Sans
		'lcny', // Liberation Serif
		'rfss', // Orbitron
		'snjm', // Refrigerator Deluxe
		'rtgb', // Ronnia Web
		'hzlv', // Ronnia Web Condensed
		'mkrf', // Snicker
		'qlvb', // Sommet Slab
		'nlwf', // Arimo
		'fbln', // Anonymous Pro
		'jtcj', // Open Sans
		'xcqq', // PT Serif
		'bhyf', // Source Sans Pro
		'jhhw', // Ubuntu
		'wbmp', // Skolar Web (became Skolar Latin) http://wp.me/p1hsAU-71
	);

	/**
	 * Constructor
	 * @param Jetpack_Fonts $custom_fonts Manager instance
	 */
	public function __construct( Jetpack_Fonts $custom_fonts ) {
		parent::__construct( $custom_fonts );
		$this->manager = $custom_fonts;
		if ( ! class_exists( 'TypekitApi' ) ) {
			require __DIR__ . '/../typekit-api.php';
		}

		$this->ids_to_populate = array( 'typekit_deprecated' ); // Need at least one item in whitelist or plugin whitelists everything.

		add_filter( 'jetpack_fonts_whitelist_' . $this->id, array( $this, 'default_whitelist' ) );
		add_filter( 'jetpack_fonts_font_families_css', array( $this, 'add_typekit_fallback_css' ), 10, 2 );
	}

	public function default_whitelist( $whitelist ) {
		return array( 'typekit_deprecated' );
	}

	public function is_active() {
		return apply_filters( 'jetpack_fonts_enable_typekit', true );
	}

	public function add_typekit_fallback_css( $font_names, $font  ) {
		if ( 'typekit' !== $font['provider'] ) {
			return $font_names;
		}
		// Typekit fallback in case the cssName is incorrect for some reason
		if ( count( $font_names ) > 0 && ! preg_match( '/-\d"?$/', $font_names[0] ) ) {
			$font_name = str_replace( '"', '', $font_names[0] );
			array_push( $font_names, '"' . $font_name . '-1"' );
		}
		return $font_names;
	}

	// TEMP
	public function get_api_key() {
		return '';
	}

	/**
	 * Converts a font from API format to internal format.
	 * @param  array $font API font
	 * @return array       Formatted font
	 */
	public function format_font( $font ) {
		$font = $font['family'];
		$formatted = array(
			'id'   => $font['id'],
			'cssName' => $font['slug'],
			'displayName' => $font['name'],
			'fvds' => wp_list_pluck( $font['variations'], 'fvd' ),
			'genericFamily' => $font['css_stack'],
			'langs' => $font['browse_info']['language'],
			'subsets' => array(),
			'bodyText' => $this->is_body_text( $font ),
		);
		return $formatted;
	}

	private function is_body_text( $font ) {
		// these are whitelisted as body fonts since the API doesn't report them as such but really they are
		$whitelist = array(
			'plns', // Tinos
		);
		return in_array( $font['id'], $whitelist ) || in_array( 'paragraphs', $font['browse_info']['recommended_for'] );
	}

	/**
	 * Adds an appropriate Typekit Fonts stylesheet to the page. Will not be called
	 * with an empty array.
	 * @param  array $fonts List of fonts.
	 * @return void
	 */
	public function render_fonts( $fonts ) {
	}

	public function get_webfont_config_option( $fonts ) {
		$kit_id = $this->get_kit_id();
		if ( $kit_id ) {
			return array(
				'typekit' => array(
					'id' => $kit_id,
				),
			);
		}
	}

	public function get_kit_id() {
		return $this->get( 'kit_id' );
	}

	private function any_typekit_fonts_set() {
		return ! empty( wp_list_filter( $this->manager->get_fonts(), array( 'provider' => 'typekit' ) ) );
	}

	public function has_advanced_kit() {
		return (bool) $this->get( 'advanced_kit_id' );
	}

	public function has_theme_set_kit() {
		return (bool) $this->get( 'set_by_theme' );
	}

	/**
	 * The URL for your frontend customizer script. Underscore and jQuery
	 * will be called as dependencies.
	 * @return string
	 */
	public function customizer_frontend_script_url() {

	}

	/**
	 * The URL for your admin customizer script to enable your control.
	 * Backbone, Underscore, and jQuery will be called as dependencies.
	 * @return string
	 */
	public function customizer_admin_script_url() {

	}

	/**
	 * Get all available fonts from Typekit.
	 * @return array A list of fonts.
	 */
	public function get_fonts() {
		if ( $fonts = $this->get_cached_fonts() ) {
			return $fonts;
		}
		$fonts = $this->retrieve_fonts();
		if ( $fonts ) {
			$this->set_cached_fonts( $fonts );
			return $fonts;
		}
		return array();
	}

	public function retrieve_fonts() {
		$fonts = array();
		foreach ( $this->ids_to_populate as $id ) {
			$font_data = $this->api_get_family( $id );
			// if we had an error fetching, we don't want it in our cache
			if ( is_wp_error( $font_data ) ) {
				return false;
			}
			$fonts[] = $this->format_font( $font_data );
		}
		return $fonts;
	}

	/**
	 * Save/create the kit or delete it if the list of fonts is empty.
	 *
	 * @param  array $fonts  A list of fonts.
	 * @return array         A potentially modified list of fonts.
	 */
	public function save_fonts( $fonts ) {
		if ( empty( $fonts ) ) {
			Jetpack_Fonts_Typekit::maybe_delete_kit();
			return $fonts;
		}

		// Avoid publishing a kit when we are only in preview mode.
		if ( class_exists( 'CustomDesign' ) && ! CustomDesign::is_upgrade_active() ) {
			return $fonts;
		}

		$kit_id = $this->get_kit_id();
		$families = $this->convert_fonts_for_api( $fonts );

		if ( ! $kit_id ) {
			$response = $this->create_kit( $families );
			if ( is_wp_error( $response ) ) {
				return $fonts;
			}
			$kit_id = $response['kit']['id'];
			$this->set( 'kit_id', $kit_id );
		} else {
			$response = $this->edit_kit( $kit_id, $families );
			if ( is_wp_error( $response ) ) {
				return $fonts;
			}
		}

		$families = $response['kit']['families'];

		// We need to modify our `cssName` property for each family we published
		$modified_fonts = array();
		foreach ( $families as $family ) {
			$filtered = wp_list_filter( $fonts, array( 'id' => $family['id'] ) );
			// still need to loop since both "heading" and "body-text" could be the same font
			foreach ( $filtered as $font ) {
				$font['cssName'] = '"' . implode( '","', $family['css_names'] ) . '"';
				$modified_fonts[] = $font;
			}
		}

		// now, publish that kit!
		$this->publish_kit( $kit_id );

		return $modified_fonts;
	}

	/**
	 * Helper for creating a kit without needing all of the extra bits
	 * @param  array $families  Array of fonts to save
	 * @return array|WP_Error   A `response` array from `wp_remote_post` on success,
	 *                          `WP_Error` instance on failure.
	 */
	public function create_kit( $families ) {
		$kit_domains = $this->get_site_hosts();
		$kit_name = $this->get_kit_name();
		$kit_subset = $this->get_subset_for_blog_language();
		return $this->api_create_kit( $kit_domains, $kit_name, $kit_subset, $families );
	}

	/**
	 * Helper for editing a kit while setting the rest of the parameters DRY-ly
	 * @param  string $kit_id   Existing kit_id to edit, or an empty string to create a new kit
	 * @param  array $families  Array of fonts to save
	 * @return array|WP_Error   A `response` array from `wp_remote_post` on success,
	 *                          `WP_Error` instance on failure.
	 */
	public function edit_kit( $kit_id, $families ) {
		$kit_domains = $this->get_site_hosts();
		$kit_name = $this->get_kit_name();
		$kit_subset = $this->get_subset_for_blog_language();
		return $this->api_edit_kit( $kit_id, $kit_domains, $kit_name, $kit_subset, $families );
	}

	/**
	 * Helper for publishing a kit
	 * @param  string $kit_id  The kit id to publish
	 * @return array|WP_Error  A `response` array from `wp_remote_post` on success,
	 *                         `WP_Error` instance on failure.
	 */
	public function publish_kit( $kit_id ) {
		return $this->api_publish_kit( $kit_id );
	}

	/**
	 * Helper for deleting a kit
	 * @param  string $kit_id  The kit id to delete
	 * @return array|WP_Error  A `response` array from `wp_remote_post` on success,
	 *                         `WP_Error` instance on failure.
	 */
	public function delete_kit( $kit_id ) {
		return $this->api_delete_kit( $kit_id );
	}

	/**
	 * Helper for getting a kit's info
	 * @param  string $kit_id  The kit id to get info for
	 * @return array|WP_Error  A `response` array from `wp_remote_get` on success,
	 *                         `WP_Error` instance on failure.
	 */
	public function get_kit_info( $kit_id ) {
		return $this->api_get_kit_info( $kit_id );
	}

	/**
	 * Gets a PreviewKit token for the site's current domain
	 * @return array|WP_Error  A `response` array from `wp_remote_get` on success,
	 *                         `WP_Error` instance on failure.
	 */
	public function get_previewkit_token() {
		return $this->api_get_previewkit_token( $this->primary_site_host() );
	}

	/**
	 * Get the fonts into a format that the typekit api expects
	 */
	private function convert_fonts_for_api( $fonts ) {
		$api_fonts = array();
		foreach ( $fonts as $font ) {
			$rule_type = $this->get_rule_type( $font['type'] );
			if ( ! $rule_type ) {
				continue;
			}
			$api_font = array(
				'id' => $font['id'],
				'fvd' => $rule_type['fvdAdjust'] && isset( $font['currentFvd'] ) ? $font['currentFvd'] : null,
			);

			// if we don't have an fvd for a font that adjusts the fvd, pick the closest to n4
			if ( $rule_type['fvdAdjust'] && null === $api_font['fvd'] ) {
				$font = $this->get_font( $font['id'] );
				$api_font['fvd'] = TypekitApi::find_nearest_fvd( 'n4', $font['fvds'] );
			}

			$api_fonts[] = $api_font;
		}
		return $api_fonts;
	}

	private function get_rule_type( $type ) {
		$rule_types = Jetpack_Fonts::get_instance()->get_generator()->get_rule_types();
		$result = wp_list_filter( $rule_types, array( 'id' => $type ) );
		if ( ! empty( $result ) ) {
			return array_shift( $result );
		}
		return false;
	}

	/**
	 * Gets the primary hostname (domain or subdomain) that this blog is hosted
	 * on. Any other domains for the blog should redirect to this one.
	 *
	 * @return string|null Returns the primary hostname for the blog
	 */
	private function primary_site_host() {
		if ( function_exists( 'get_primary_redirect' ) ) {
			// Get the primary redirect host for a wordpress.com blog
			return get_primary_redirect();
		} else {
			// Get the host from the standalone wordpress 'home' option
			$parsed = parse_url( get_option( 'home' ) );
			if ( is_array( $parsed ) && array_key_exists( 'host', $parsed ) ) {
				return $parsed['host'];
			}
		}
		return null;
	}

	/**
	 * Gets the unique hosts (domains or subdomains) that should be included in a
	 * kit for the blog. First the blog's primary site host is included and then
	 * *.wordpress.com is included just for good measure.
	 *
	 * The site's primary host should always be the first host returned in the
	 * array so that the Typekit app knows how to construct a url for the blog
	 * in the colophon page.
	 *
	 * @return array Returns an array of hosts (domains or subdomains ).
	 */
	private function get_site_hosts() {
		return array( $this->primary_site_host(), '*.wordpress.com' );
	}

	/**
	 * Gets a valid kit name based on the name of the blog. Kit names can't be
	 * empty or more than 50 characters. If the blog name is more than 50
	 * characters, it's clipped. If the blog name is empty, the primary site
	 * host is used instead.
	 *
	 * @return string Returns the name to use for a kit created for this site.
	 */
	private function get_kit_name() {
		$name = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
		if ( seems_utf8( $name ) ) {
			$name = sanitize_user( $name, true ); // Reduce to ASCII since Typekit can't deal with UTF-8 characters
		}
		if ( empty( $name ) ) {
			$name = $this->primary_site_host();
		}
		return substr( $name, 0, 50 );
	}

	/**
	 * Returns the Typekit character subset ( 'default' or 'all' ) to use for the
	 * lanuage that this blog is written in. English, Spanish, Portuguese, and
	 * Italian are supported by the default character subset. Other languages
	 * require the all character subset.
	 *
	 * @return string Returns 'default' or 'all' depending on the blog language.
	 */
	private function get_subset_for_blog_language() {
		$lang_id = get_option( 'lang_id' );
		if ( ! $lang_id || ! function_exists( 'get_lang_code_by_id' ) ) {
			return 'default';
		}
		$lang = get_lang_code_by_id( $lang_id );
		$lang_parts = explode( '-', $lang );
		if ( in_array( $lang_parts[0], array( 'en', 'it', 'pt', 'es' ) ) ) {
			return 'default';
		}
		return 'all';
	}

	private function api_make_call( $method, $endpoint, $params = [] ) {
		$site = Jetpack_Options::get_option( 'id' );
		$url = '/sites/' . $site . '/typekit-fonts' . $endpoint;
		$body = empty( $params ) ? null : json_encode( $params );
		$response = self::wpcom_json_api_request_as_blog( $url, 2, [ 'method' => $method, 'headers' => [ 'content-type' => 'application/json' ] ], $body, 'wpcom' );
		$response_code = wp_remote_retrieve_response_code( $response );
		if ( 200 !== $response_code ) {
			$proto = apply_filters( 'jetpack_can_make_outbound_https', true ) ? 'https' : 'http';
			$stripped_path = preg_replace( '/^\//', '', $url );
			$full_url = sprintf( '%s://%s/%s/v%s/%s', $proto, JETPACK__WPCOM_JSON_API_HOST, 'wpcom', 2, $stripped_path );
			$error = new WP_Error( 'api_error', "Error connecting to API {$method} {$full_url} ({$response_code}).", $response );
			do_action( 'wpcomsh_log', 'Custom-Fonts: Typekit API error: ' . $error->get_error_message() );
			return $error;
		}
		$response_body = wp_remote_retrieve_body( $response );
		return json_decode( $response_body, true );
	}

	/**
	 * Query the WordPress.com REST API using the blog token
	 *
	 * Based on `Jetpack_Client::wpcom_json_api_request_as_blog()` but modified
	 * to allow working with v2 wpcom endpoints via the $base_api_path param.
	 *
	 * See https://github.com/Automattic/jetpack/pull/6813
	 *
	 * Also allows any HTTP verb (not just GET and POST).
	 *
	 * @param string  $path
	 * @param string  $version
	 * @param array   $args
	 * @param string  $body
	 * @param string  $base_api_path Determines the base API path for jetpack requests; defaults to 'rest'
	 * @return array|WP_Error $response Data.
	 */
	public static function wpcom_json_api_request_as_blog( $path, $version = 1, $args = array(), $body = null, $base_api_path = 'rest' ) {
		$filtered_args = array_intersect_key( $args, array(
			'headers'     => 'array',
			'method'      => 'string',
			'timeout'     => 'int',
			'redirection' => 'int',
			'stream'      => 'boolean',
			'filename'    => 'string',
			'sslverify'   => 'boolean',
		) );

		/**
		 * Determines whether Jetpack can send outbound https requests to the WPCOM api.
		 *
		 * @since 3.6.0
		 *
		 * @param bool $proto Defaults to true.
		 */
		$proto = apply_filters( 'jetpack_can_make_outbound_https', true ) ? 'https' : 'http';

		// unprecedingslashit
		$stripped_path = preg_replace( '/^\//', '', $path );

		// Use GET by default whereas `remote_request` uses POST
		$request_method = ( isset( $filtered_args['method'] ) ) ? $filtered_args['method'] : 'GET';

		$validated_args = array_merge( $filtered_args, array(
			'url'     => sprintf( '%s://%s/%s/v%s/%s', $proto, JETPACK__WPCOM_JSON_API_HOST, $base_api_path, $version, $stripped_path ),
			'blog_id' => (int) Jetpack_Options::get_option( 'id' ),
			'method'  => $request_method,
		) );

		return Jetpack_Client::remote_request( $validated_args, $body );
	}

	private function api_get_family( $id ) {
		if ( defined( 'WPCOM_TYPEKIT_API_TOKEN' ) ) {
			return TypekitApi::get_family( $id );
		}
		return $this->api_make_call( 'GET', '/' . $id . '/family' );
	}

	private function api_get_kit_info( $kit_id ) {
		if ( defined( 'WPCOM_TYPEKIT_API_TOKEN' ) ) {
			return TypekitApi::get_kit_info( $kit_id );
		}
		return $this->api_make_call( 'GET', '/' . $kit_id );
	}

	private function api_delete_kit( $kit_id ) {
		if ( defined( 'WPCOM_TYPEKIT_API_TOKEN' ) ) {
			return TypekitApi::delete_kit( $kit_id );
		}
		return $this->api_make_call( 'DELETE', '/' . $kit_id );
	}

	private function api_publish_kit( $kit_id ) {
		if ( defined( 'WPCOM_TYPEKIT_API_TOKEN' ) ) {
			return TypekitApi::publish_kit( $kit_id );
		}
		return $this->api_make_call( 'PUT', '/' . $kit_id . '/publish' );
	}

	private function api_edit_kit( $kit_id, $kit_domains, $kit_name, $kit_subset, $families ) {
		if ( defined( 'WPCOM_TYPEKIT_API_TOKEN' ) ) {
			return TypekitApi::edit_kit( $kit_id, $kit_domains, $kit_name, $kit_subset, $families );
		}
		return $this->api_make_call( 'PUT', '/' . $kit_id, [
			'domains' => $kit_domains,
			'name' => $kit_name,
			'subset' => $kit_subset,
			'families' => $families,
		] );
	}

	private function api_get_previewkit_token( $host ) {
		if ( defined( 'WPCOM_TYPEKIT_API_TOKEN' ) ) {
			return TypekitApi::get_previewkit_auth_for_domain( $host );
		}
		$response = $this->api_make_call( 'GET', '/' . $host . '/previewkit' );
		return $response;
	}

	private function api_create_kit( $kit_domains, $kit_name, $kit_subset, $families ) {
		if ( defined( 'WPCOM_TYPEKIT_API_TOKEN' ) ) {
			return TypekitApi::create_kit( $kit_domains, $kit_name, $kit_subset, $families );
		}
		return $this->api_make_call( 'POST', '', [
			'domains' => $kit_domains,
			'name' => $kit_name,
			'subset' => $kit_subset,
			'families' => $families,
		] );
	}
}
