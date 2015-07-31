<?php

class TypekitData {

	public static function set( $key, $data ) {
		$method = 'set_' . $key;
		if ( is_callable( array( __CLASS__, $method ) ) ) {
			if ( defined( 'WPCOM_SANDBOXED' ) && WPCOM_SANDBOXED ) {
				self::trigger_error( 'set', $key );
			}
			return self::$method( $data );
		}
		return null;
	}

	public static function get( $key ) {
		$method = 'get_' . $key;
		if ( is_callable( array( __CLASS__, $method ) ) ) {
			if ( defined( 'WPCOM_SANDBOXED' ) && WPCOM_SANDBOXED ) {
				self::trigger_error( 'get', $key );
			}
			return self::$method();
		}
		return null;
	}

	private static function trigger_error( $method, $key ) {
		$message = sprintf( '`TypekitData::%s( \'%s\' )` is now only maintained as a legacy compatibility layer. The information you want likely lives in the `Jetpack_Fonts` class. Come by #customizer in Slack for help with updating your code!', $method, $key );
		trigger_error( $message );
	}

	private static function get_preview_in_customizer() {
		return (bool) get_option( 'preview_custom_design_in_customizer' );
	}

	private static function set_preview_in_customizer( $data ) {
		if ( $data ) {
			update_option( 'preview_custom_design_in_customizer', true );
		} else {
			delete_option( 'preview_custom_design_in_customizer' );
		}
	}

	private static function get_families() {
		$fonts = Jetpack_Fonts::get_instance()->get_fonts();
		$families = array(
			'headings' => array( 'id' => null ),
			'site-title' => array( 'id' => null ),
			'body-text' => array( 'id' => null )
		);
		if ( ! $fonts ) {
			return $families;
		}
		foreach ( $fonts as $font ) {
			$families[ $font['type'] ] = array(
				'id' => $font['id'],
				'css_names' => explode(',', str_replace('"', '', $font['cssName'] ) )
			);
		}
		if ( ! $families['site-title']['id'] && $families['headings']['id'] ) {
			$families['site-title'] = $families['headings'];
		}
		return $families;
	}

	private static function get_advanced_mode() {
		return Jetpack_Fonts::get_instance()->get_provider( 'typekit' )->has_advanced_kit();
	}

	private static function get_advanced_kit_id() {
		return Jetpack_Fonts::get_instance()->get_provider( 'typekit' )->get( 'advanced_kit_id' );
	}
}

class TypekitUtil {

	public static function any_selected_fonts( $families ) {
		foreach( $families as $family ) {
			if ( $family['id'] ) {
				return true;
			}
		}
		return false;
	}

}