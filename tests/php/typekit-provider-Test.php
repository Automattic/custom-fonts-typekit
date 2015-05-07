<?php

// Begin mocks
class Jetpack_Fonts {}
class Jetpack_Font_Provider {
	public function __construct( Jetpack_Fonts $custom_fonts ) {
		$custom_fonts;
	}

	public function get_cached_fonts() {}
	public function set_cached_fonts() {}
}

function get_test_fonts() {
	return array(
		array(
			'displayName' => 'Abril Text',
			'id' => 'gjst',
			'cssName' => 'abril-text',
			'variants' => array(
				'n4',
				'i4',
				'n6',
				'i6',
				'n7',
				'i7',
				'n8',
				'i8',
			),
			'shortname' => 'Abril Text',
			'smallTextLegibility' => true
		),
		array(
			'displayName' => 'Special Adelle Web',
			'id' => 'xxxx',
			'cssName' => 'special-adelle-web',
			'variants' => array(
				'n4',
				'i4',
				'n7',
				'i7',
			),
			'shortname' => 'Special Adelle',
			'smallTextLegibility' => false,
		),
	);
}

// End mocks

class Jetpack_Typekit_Font_Provider_Test extends PHPUnit_Framework_TestCase {
	public function setUp() {
		\WP_Mock::setUp();
		\WP_Mock::wpPassthruFunction( 'esc_js' );
		\WP_Mock::wpPassthruFunction( 'wp_parse_args' );
		\WP_Mock::onFilter( 'jetpack_fonts_list_typekit' )->with( array() )->reply( get_test_fonts() );
		include_once dirname( __FILE__ ) . '/../../typekit.php';
	}

	public function tearDown() {
		\WP_Mock::tearDown();
	}

	protected function get_fonts() {
		$jetpack_fonts = new Jetpack_Fonts();
		$provider = new Jetpack_Typekit_Font_Provider( $jetpack_fonts );
		return $provider->get_fonts();
	}

	protected function get_first_font() {
		$fonts = $this->get_fonts();
		return $fonts[0];
	}

	protected function get_second_font() {
		$fonts = $this->get_fonts();
		return $fonts[1];
	}

	public function test_instance_exists() {
		$jetpack_fonts = new Jetpack_Fonts();
		$provider = new Jetpack_Typekit_Font_Provider( $jetpack_fonts );
		$this->assertTrue( (boolean)$provider );
	}

	public function test_get_fonts_returns_array_with_one_item_per_font() {
		$this->assertCount( 2, $this->get_fonts() );
	}

	public function test_get_fonts_returns_encoded_id() {
		$font = $this->get_first_font();
		$this->assertEquals( 'gjst', $font[ 'id' ] );
	}

	public function test_get_fonts_returns_css_name() {
		$font = $this->get_first_font();
		$this->assertEquals( 'abril-text', $font[ 'cssName' ] );
	}

	public function test_get_fonts_returns_display_name() {
		$font = $this->get_first_font();
		$this->assertEquals( 'Abril Text', $font[ 'displayName' ] );
	}

	public function test_get_fonts_returns_true_body_text_if_whitelisted() {
		$font = $this->get_first_font();
		$this->assertTrue( $font[ 'bodyText' ] );
	}

	public function test_get_fonts_returns_false_body_text_if_not_whitelisted() {
		$font = $this->get_second_font();
		$this->assertFalse( $font[ 'bodyText' ] );
	}

	public function test_get_fonts_returns_fvds_with_correct_italic() {
		$font = $this->get_first_font();
		$this->assertContains( 'i4', $font[ 'fvds' ] );
	}

	public function test_get_fonts_returns_fvds_with_correct_bold_italic() {
		$font = $this->get_first_font();
		$this->assertContains( 'i7', $font[ 'fvds' ] );
	}

	public function test_get_fonts_returns_fvds_with_correct_regular() {
		$font = $this->get_first_font();
		$this->assertContains( 'n4', $font[ 'fvds' ] );
	}

	public function test_get_fonts_returns_fvds_with_correct_bold() {
		$font = $this->get_first_font();
		$this->assertContains( 'n7', $font[ 'fvds' ] );
	}

	public function test_get_fonts_returns_non_retired_fonts() {
		$this->assertContains( 'gjst', array_map( function( $font ) { return $font[ 'id' ]; }, $this->get_fonts() ) );
	}

	public function test_get_fonts_does_not_return_retired_fonts() {
		\WP_Mock::onFilter( 'jetpack_fonts_list_typekit_retired' )->with( array() )->reply( array( 'gjst' ) );
		$this->assertNotContains( 'gjst', array_map( function( $font ) { return $font[ 'id' ]; }, $this->get_fonts() ) );
	}

	public function test_get_fonts_returns_retired_fonts_if_they_are_active() {
		\WP_Mock::onFilter( 'jetpack_fonts_list_typekit_retired' )->with( array() )->reply( array( 'gjst' ) );
		// TODO: make this font active
		$this->assertContains( 'gjst', array_map( function( $font ) { return $font[ 'id' ]; }, $this->get_fonts() ) );
	}

	public function test_render_fonts_outputs_kit_javascript() {
		\WP_Mock::wpFunction( 'get_option', array(
			'return' => array( 'kit_id' => 'foobar' )
		) );
		$jetpack_fonts = new Jetpack_Fonts();
		$provider = new Jetpack_Typekit_Font_Provider( $jetpack_fonts );
		$provider->render_fonts( array() );
		$this->expectOutputRegex( '/<script type="text\/javascript" id="custom-fonts-js">/' );
	}

	public function test_render_fonts_outputs_kit_javascript_with_kit_id_in_config() {
		\WP_Mock::wpFunction( 'get_option', array(
			'return' => array( 'kit_id' => 'foobar' )
		) );
		$jetpack_fonts = new Jetpack_Fonts();
		$provider = new Jetpack_Typekit_Font_Provider( $jetpack_fonts );
		$provider->render_fonts( array() );
		$this->expectOutputRegex( '/"kitId":"foobar"/' );
	}

	public function test_render_fonts_outputs_nothing_when_there_is_no_kit_id() {
		\WP_Mock::wpFunction( 'get_option', array(
			'return' => null
		) );
		$jetpack_fonts = new Jetpack_Fonts();
		$provider = new Jetpack_Typekit_Font_Provider( $jetpack_fonts );
		$provider->render_fonts( array() );
		$this->expectOutputString( '' );
	}

	public function test_render_fonts_outputs_nothing_when_there_is_no_option_set() {
		\WP_Mock::wpFunction( 'get_option', array(
			'return' => null
		) );
		$jetpack_fonts = new Jetpack_Fonts();
		$provider = new Jetpack_Typekit_Font_Provider( $jetpack_fonts );
		$provider->render_fonts( array() );
		$this->expectOutputString( '' );
	}
}


