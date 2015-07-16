<?php

class Typekit_Advanced_Mode {

	public static $id = 'typekit_advanced_mode';

	public static function customizer_init( $wp_customize ) {
		// unset the standard controls
		$wp_customize->remove_setting( 'jetpack_fonts[selected_fonts]' );
		$wp_customize->remove_control( 'jetpack_fonts' );

		// dequeue resources
		remove_action( 'customize_preview_init', array( Jetpack_Fonts::get_instance(), 'add_preview_scripts' ) );

		// register our bits
		$wp_customize->add_setting( self::$id, array(
			'default' => true,
			'transport' => 'postMessage',
			'type' => self::$id
		) );
		$wp_customize->add_control( new Typekit_Advanced_Mode_Control(
			$wp_customize, self::$id, array(
			'label' => __( 'Uncheck to disable' ),
			'section' => 'jetpack_fonts',
			'type' => 'checkbox'
		) ) );

		add_action( 'customize_update_' . self::$id, array( __CLASS__, 'maybe_disable_advanced_mode' ) );
	}

	public static function maybe_disable_advanced_mode( $value ) {
		if ( $value === true ) {
			return;
		}

		// oh good we can disable it!
		$legacy_option = get_option( 'typekit_data', array() );
		$legacy_option['advanced_mode'] = null;
		$legacy_option['advanced_kit_id'] = null;
		$legacy_option['advanced_kit_families'] = null;
		update_option( 'typekit_data', $legacy_option );
		Jetpack_Fonts::get_instance()->get_provider('typekit')->set( 'advanced_kit_id', false );
	}
}

if ( class_exists( 'WP_Customize_Control' ) ) :

class Typekit_Advanced_Mode_Control extends WP_Customize_Control {

	public function render_content() {
		echo '<p>';
		_e( 'You added a Typekit kit ID through our legacy interface, which is no longer supported. Uncheck the box below and click "Save" to remove your kit from this blog and use our easy new interface for choosing fonts.' );
		echo '</p>';
		parent::render_content();
	}

	public function enqueue() {
		wp_enqueue_script( Typekit_Advanced_Mode::$id, plugins_url( 'js/advanced-mode.js', __FILE__ ), '', '20150715', true );
	}
}

endif;