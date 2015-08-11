<?php

// Begin mocks
class Jetpack_Fonts {
	public function get_fonts() { return array(); }
}

class Jetpack_Font_Provider {
	public function __construct( Jetpack_Fonts $custom_fonts ) {
		$custom_fonts;
	}

	public function get() {}
	public function set() {}
	public function get_cached_fonts() { return get_test_fonts(); }

}

function wp_list_pluck( $list, $field ) {
	$results = array();
	foreach( $list as $item ) {
		if ( $item[ $field ] ) {
			array_push( $results, $item[ $field ] );
		}
	}
	return $results;
}

function get_test_fonts() {
	return array(
		array(
			'id' => 'gjst',
			'cssName' => 'abril-text',
			'displayName' => 'Abril Text',
			'fvds' =>
			array (
				'n3','i3','n4','i4','n6','i6','n7','i7','n8','i8'
			),
			'genericFamily' => 'sans-serif',
			'subsets' =>
			array (
			),
			'bodyText' => true,
			'oldFvdCount' => 8,
			'provider' => 'typekit',

		),
		array(
			'id' => 'xxxx',
			'cssName' => 'special-adelle-web',
			'displayName' => 'Special Adelle Web',
			'fvds' =>
			array (
				'n1','i1','n3','i3','n4','i4','n6','i6','n7','i7','n8','i8','n9','i9'
			),
			'genericFamily' => 'serif',
			'subsets' =>
			array (
			),
			'bodyText' => false,
			'oldFvdCount' => 4,
			'provider' => 'typekit',
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
		include_once dirname( __FILE__ ) . '/../../providers/typekit.php';
	}

	public function tearDown() {
		\WP_Mock::tearDown();
	}

	protected function get_fonts() {
		$jetpack_fonts = new Jetpack_Fonts();
		$provider = new Jetpack_Typekit_Font_Provider( $jetpack_fonts );
		return $provider->get_fonts();
	}

	protected function default_whitelist() {
		$jetpack_fonts = new Jetpack_Fonts();
		$provider = new Jetpack_Typekit_Font_Provider( $jetpack_fonts );
		return $provider->default_whitelist( array() );
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

	public function test_default_whitelist_returns_non_retired_fonts() {
		\WP_Mock::wpFunction( 'wp_list_filter', array(
			'return' => array()
		) );
		$this->assertContains( 'gjst', $this->default_whitelist() );
	}

	public function test_default_whitelist_does_not_return_retired_fonts() {
		\WP_Mock::wpFunction( 'wp_list_filter', array(
			'return' => array()
		) );
		\WP_Mock::onFilter( 'jetpack_fonts_list_typekit_retired' )->with( array() )->reply( array( 'gjst' ) );
		$this->assertNotContains( 'gjst', $this->default_whitelist() );
	}

	public function test_default_whitelist_returns_retired_fonts_if_they_are_active() {
		\WP_Mock::wpFunction( 'wp_list_filter', array(
			'return' => array( array( 'id' => 'gjst' ) )
		) );
		\WP_Mock::onFilter( 'jetpack_fonts_list_typekit_retired' )->with( array() )->reply( array( 'gjst' ) );
		$this->assertContains( 'gjst', $this->default_whitelist() );
	}
}


