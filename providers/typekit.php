<?php
class Jetpack_Typekit_Font_Provider extends Jetpack_Font_Provider {

	protected $api_base = 'https://typekit.com/api/v1/json';

	public $id = 'typekit';

	/**
	 * Constructor
	 * @param Jetpack_Fonts $custom_fonts Manager instance
	 */
	public function __construct( Jetpack_Fonts $custom_fonts ) {
		require_once( __DIR__ . '/../typekit-font-list.php' );
		parent::__construct( $custom_fonts );
		$this->manager = $custom_fonts;
		add_filter( 'jetpack_fonts_whitelist_' . $this->id, array( $this, 'default_whitelist' ) );
	}

	public function default_whitelist( $whitelist ) {
		$all_fonts = wp_list_pluck( $this->get_fonts(), 'id' );
		$set_fonts = wp_list_filter( $this->manager->get_fonts(), array( 'provider' => $this->id ) );
		$set_fonts = wp_list_pluck( $set_fonts, 'id' );
		$retired = apply_filters( 'jetpack_fonts_list_typekit_retired', array() );
		$whitelist = array();
		foreach( $all_fonts as $id ) {
			if ( in_array( $id, $set_fonts ) || ! in_array( $id, $retired ) ) {
				$whitelist[] = $id;
			}
		}
		return $whitelist;
	}

	public function is_active() {
		return apply_filters( 'jetpack_fonts_enable_typekit', true );
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
		$formatted = array(
			'id'   => urlencode( $font['id'] ),
			'cssName' => $font['cssName'],
			'displayName' => $font['displayName'],
			'fvds' => $font['variants'],
			'subsets' => array(),
			'bodyText' => $font['smallTextLegibility']
		);
		return $formatted;
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
					'id' => $kit_id
				)
			);
		}
	}

	public function get_kit_id() {
		return $this->get( 'kit_id' );
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
		// we don't bother with caching since it's a static list
		$fonts = array();
		$fonts = apply_filters( 'jetpack_fonts_list_typekit', $fonts );
		$fonts = array_map( array( $this, 'format_font' ), $fonts );
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
		if ( class_exists( 'CustomDesign' ) && CustomDesign::is_previewing() ) {
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
		foreach( $families as $family ) {
			$filtered = wp_list_filter( $fonts, array( 'id' => $family['id'] ) );
			// still need to loop since both "heading" and "body-text" could be the same font
			foreach( $filtered as $font ) {
				$font['cssName'] = '"' . implode('","', $family['css_names'] ) . '"';
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
		return $this->edit_kit( '', $families );
	}

	/**
	 * Helper for editing a kit while setting the rest of the parameters DRY-ly
	 * @param  string $kit_id   Existing kit_id to edit, or an empty string to create a new kit
	 * @param  array $families  Array of fonts to save
	 * @return array|WP_Error   A `response` array from `wp_remote_post` on success,
	 *                          `WP_Error` instance on failure.
	 */
	public function edit_kit( $kit_id, $families ) {
		$this->require_api();
		$kit_domains = $this->get_site_hosts();
		$kit_name = $this->get_kit_name();
		$kit_subset = $this->get_subset_for_blog_language();
		return TypekitApi::edit_kit( $kit_id, $kit_domains, $kit_name, $kit_subset, $families );
	}

	/**
	 * Helper for publishing a kit
	 * @param  string $kit_id  The kit id to publish
	 * @return array|WP_Error  A `response` array from `wp_remote_post` on success,
	 *                         `WP_Error` instance on failure.
	 */
	public function publish_kit( $kit_id ) {
		$this->require_api();
		return TypekitApi::publish_kit( $kit_id );
	}

	/**
	 * Helper for deleting a kit
	 * @param  string $kit_id  The kit id to delete
	 * @return array|WP_Error  A `response` array from `wp_remote_post` on success,
	 *                         `WP_Error` instance on failure.
	 */
	public function delete_kit( $kit_id ) {
		$this->require_api();
		return TypekitApi::delete_kit( $kit_id );
	}

	/**
	 * Helper for getting a kit's info
	 * @param  string $kit_id  The kit id to get info for
	 * @return array|WP_Error  A `response` array from `wp_remote_get` on success,
	 *                         `WP_Error` instance on failure.
	 */
	public function get_kit_info( $kit_id ) {
		$this->require_api();
		return TypekitApi::get_published_kit_info( $kit_id );
	}

	public function require_api() {
		if ( ! class_exists( 'TypekitApi' ) ) {
			require __DIR__ . '/../typekit-api.php';
		}
	}

	/**
	 * Get the fonts into a format that `TypekitApi` expects
	 */
	private function convert_fonts_for_api( $fonts ) {
		$api_fonts = array();
		foreach( $fonts as $font ) {
			$rule_type = $this->get_rule_type( $font['type'] );
			if ( ! $rule_type ) {
				continue;
			}
			$api_fonts[] = array(
				'id' => $font['id'],
				'fvd' => $rule_type['fvdAdjust'] && isset( $font['currentFvd'] ) ? $font['currentFvd'] : null
			);
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
			$parsed = parse_url( get_option('home') );
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
		if ( seems_utf8( $name ) )
			$name = sanitize_user( $name, true ); // Reduce to ASCII since Typekit can't deal with UTF-8 characters
		if ( empty( $name ) ) {
			return $this->primary_site_host();
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

}
