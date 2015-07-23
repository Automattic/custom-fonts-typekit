<?php

class TypekitData {

	public static function set( $key, $data ) {
		$method = 'set_' . $key;
		if ( is_callable( array( __CLASS__, $method ) ) ) {
			return self::$method( $data );
		}
		return null;
	}

	public static function get( $key ) {
		$method = 'get_' . $key;
		if ( is_callable( array( __CLASS__, $method ) ) ) {
			return self::$method();
		}
		return null;
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
			'headings' => array( 'id' => false ),
			'site-title' => array( 'id' => false ),
			'body-text' => array( 'id' => false )
		);
		foreach ( $fonts as $font ) {
			$families[ $font['type'] ]['id'] = true;
		}
		if ( ! $families['site-title']['id'] && $families['headings']['id'] ) {
			$families['site-title']['id'] = true;
		}
		return $families;
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