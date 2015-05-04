<?php
class Jetpack_Typekit_Font_Provider extends Jetpack_Font_Provider {

	protected $api_base = 'https://typekit.com/api/v1/json';

	public $id = 'typekit';

	private static $defaults = array(
		'kit_id' => null
	);

	/**
	 * Constructor
	 * @param Jetpack_Fonts $custom_fonts Manager instance
	 */
	public function __construct( Jetpack_Fonts $custom_fonts ) {
		require_once( 'typekit-font-list.php' );
		parent::__construct( $custom_fonts );
		$this->manager = $custom_fonts;
		add_filter( 'jetpack_fonts_whitelist_' . $this->id, array( $this, 'default_whitelist' ) );
	}

	public function default_whitelist( $whitelist ) {
		$all_fonts = wp_list_pluck( Jetpack_Fonts_List_Typekit::get_fonts(), 'id' );
		$set_fonts = wp_list_filter( $this->manager->get_fonts(), array( 'provider' => $this->id ) );
		$set_fonts = wp_list_pluck( $set_fonts, 'id' );
		$retired = array(
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
		);
		$whitelist = array();
		foreach( $all_fonts as $id ) {
			if ( in_array( $id, $set_fonts ) || ! in_array( $id, $retired ) ) {
				$whitelist[] = $id;
			}
		}
		return $whitelist;
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
		$fonts;
		$kit_id = $this->get_kit_id();
		if ( $kit_id ) {
			$this->output_typekit_code( $kit_id );
		}
	}

	private function output_typekit_code( $kit_id ) {
		$config = array(
			'kitId'         => esc_js( $kit_id ),
			'scriptTimeout' => 3000,
		);
		$config = json_encode( $config );
				echo
<<<EMBED
<script type="text/javascript" id="custom-fonts-js">
(function(doc) {
	var config = {$config},
	h=doc.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+="wf-inactive"},config.scriptTimeout);var tk=doc.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=doc.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s);
})(document);
</script>

EMBED;
	}

	private function get_kit_id() {
		return $this->get( 'kit_id' );
	}

	/**
	 * Retrieves the associative array where the plugin stores its data from the
	 * WordPress option.
	 *
	 * @return array Returns an associative array of data for the plugin.
	 */
	private function data() {
		$data = get_option( 'typekit_data', self::$defaults );
		$data = wp_parse_args( $data, self::$defaults );
		return $data;
	}

	/**
	 * Retrieves an individual plugin data value associated with the given key for
	 * the current user.
	 *
	 * @param string $key The key of the plugin data value to get.
	 * @return string Returns the current value for the given key.
	 */
	private function get( $key ) {
		$data = $this->data();
		if ( $data && is_array( $data ) && array_key_exists( $key, $data ) ) {
			return $data[ $key ];
		}
		return null;
	}

	/**
	 * Sets the plugin data value associated with the given key for the current
	 * user.
	 *
	 * @param string $key The key of the plugin data value to set.
	 * @param array|string|boolean|null $value The new value to be associated with this key.
	 * @return boolean Returns true if the associated key was found and set, or false if the key isn't among the defaults.
	 */
	private function set( $key, $value ) {
		$data = self::data();
		if ( array_key_exists( $key, self::$defaults ) ) {
			$data[$key] = $value;
			update_option( 'typekit_data', $data );
			return true;
		}
		return false;
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
	 * Save the kit
	 * @param  array $fonts     A list of fonts.
	 * @return boolean|WP_Error true on success, WP_Error instance on failure.
	 */
	public function save_fonts( $fonts ) {
		require_once( __DIR__ . '/typekit-api.php' );
		/*
			1. Check for an existing kit id
			2. If not 1), create a new kit using TypekitApi::create_kit()
			3. Call TypekitApi::edit_kit()
			4. The `$families` param in 3) expects the following format:
				(
				    [headings] => Array
				        (
				            [id] => ftnk
				            [fvd] => n5
				        )

				    [body-text] => Array
				        (
				            [id] => cwfk
				            [fvd] =>
				        )
				)
			5. A successful return result looks like:
				(
				    [kit] => Array
				        (
				            [id] => dwf3clw
				            [name] => actually a blawg
				            [analytics] =>
				            [domains] => Array
				                (
				                    [0] => wattmiebe.wordpress.com
				                    [1] => *.wordpress.com
				                )

				            [families] => Array
				                (
				                    [0] => Array
				                        (
				                            [id] => cwfk
				                            [name] => Jubilat
				                            [slug] => jubilat
				                            [css_names] => Array
				                                (
				                                    [0] => jubilat-1
				                                    [1] => jubilat-2
				                                )

				                            [css_stack] => "jubilat-1","jubilat-2",sans-serif
				                            [subset] => default
				                            [variations] => Array
				                                (
				                                    [0] => n4
				                                    [1] => i4
				                                    [2] => n7
				                                    [3] => i7
				                                )

				                        )

				                    [1] => Array
				                        (
				                            [id] => ftnk
				                            [name] => Futura PT
				                            [slug] => futura-pt
				                            [css_names] => Array
				                                (
				                                    [0] => futura-pt-1
				                                    [1] => futura-pt-2
				                                )

				                            [css_stack] => "futura-pt-1","futura-pt-2",sans-serif
				                            [subset] => default
				                            [variations] => Array
				                                (
				                                    [0] => n5
				                                )

				                        )

				                )

				        )

				)
				6. The `css_stack` will need to be shimmed into our saved `cssName` property for those fonts as that is what the Typekit kit will render as.
				7. Note how an empty `fvd` translates into the [n4,i4,n7,i7] variations for the body-text font automatically.
				8. a `WP_Error` will be returned from TypekitApi responses if things go wrong.
				9. See `TypekitAdmin::publish_kit_with_data()` for how the API is called in the current plugin https://wpcom.trac.automattic.com/browser/trunk/wp-content/mu-plugins/custom-fonts/typekit-admin.php#L225
		*/
		return true;
	}
}
