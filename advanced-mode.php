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
		$provider = Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
		$provider->delete( 'advanced_kit_id' );
		if ( $provider->has_theme_set_kit() ) {
			$provider->delete( 'theme_families' );
			$provider->delete( 'set_by_theme' );
			$provider->set( 'theme_override', true );
		}
	}
}

if ( class_exists( 'WP_Customize_Control' ) ) :

class Typekit_Advanced_Mode_Control extends WP_Customize_Control {

	public function render_content() {
		echo '<p>';
		if ( Jetpack_Fonts::get_instance()->get_provider( 'typekit' )->has_theme_set_kit() ) :
			_e( 'Lucky you! Your theme designers chose specific fonts for you that you can’t pick otherwise. If you aren’t happy with these fonts, uncheck the checkbox below and click "Save" to choose other fonts.' );
		else:
			_e( 'You added a Typekit kit ID through our legacy interface, which is no longer supported. Uncheck the checkbox below and click "Save" to remove your kit from this blog and use our easy new interface for choosing fonts.' );
		endif;
		echo '</p>';
		parent::render_content();
	}

	public function enqueue() {
		wp_enqueue_script( Typekit_Advanced_Mode::$id, plugins_url( 'js/advanced-mode.js', __FILE__ ), '', '20150715', true );
	}
}

endif;