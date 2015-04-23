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
		// add_filter( 'jetpack_fonts_whitelist_' . $this->id, array( $this, 'default_whitelist' ), 9 );
	}

	public function body_font_whitelist(){
		return array(
		);
	}

	public function headings_font_whitelist(){
		return array(
		);
	}

	public function default_whitelist( $whitelist ) {
		$all_fonts = array_merge ( $this->body_font_whitelist(), $this->headings_font_whitelist() );
		return $all_fonts;
	}

	/**
	 * Retrieve fonts from the API
	 * @return array List of fonts
	 */
	public function retrieve_fonts() {
		$fonts = array();
		$fonts = apply_filters( 'jetpack_fonts_list_typekit', $fonts );
		$fonts = array_map( array( $this, 'format_font' ), $fonts );
		return $fonts;
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
			'bodyText' => in_array( urlencode( $font['id'] ), $this->body_font_whitelist() )
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
		$this->get( 'kit_id' );
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
		return array_key_exists( $key, $data ) ? $data[$key] : null;
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

	/**
	 * Save the kit
	 * @param  array $fonts     A list of fonts.
	 * @return boolean|WP_Error true on success, WP_Error instance on failure.
	 */
	public function save_fonts( $fonts ) {
		// TODO: save a new kit
		return true;
	}
}
