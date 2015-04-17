<?php
/*
Plugin Name: Custom Fonts Typekit
Plugin URI: http://automattic.com/
Description: Adds a Typekit provider to the custom-fonts plugin
Version: 0.1
Author: Automattic
Author URI: http://automattic.com/
*/

/**
 * Copyright (c) 2015 Automattic. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

class Jetpack_Fonts_Typekit {
	/**
	 * Holds the single instance of this object
	 * @var null|object
	 */
	private static $instance;

	/**
	 * Retrieve the single instance of this class, creating if
	 * not previously instantiated.
	 * @return object Jetpack_Fonts instance
	 */
	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Fires when the plugin is activated
	 * @return void
	 */
	public static function on_activate() {
		self::get_instance();
	}

	/**
	 * Fires when the plugin is deactivated
	 * @return void
	 */
	public static function on_deactivate() {
		self::get_instance();
	}

	/**
	 * Kicks things off on the init hook, loading what's needed
	 * @return void
	 */
	public function init() {
		add_action( 'jetpack_fonts_register', array( $this, 'register_provider' ) );
	}

	function register_provider( $jetpack_fonts ) {
		$provider_dir = dirname( __FILE__ ) . '/';
		$jetpack_fonts->register_provider( 'typekit', 'Jetpack_Typekit_Font_Provider', $provider_dir . 'typekit.php' );
	}

	/**
	 * Silence is golden
	 */
	protected function __construct() {}
}

add_action( 'init', array( Jetpack_Fonts_Typekit::get_instance(), 'init' ) );
register_activation_hook( __FILE__, array( 'Jetpack_Fonts_Typekit', 'on_activate' ) );
register_deactivation_hook( __FILE__, array( 'Jetpack_Fonts_Typekit', 'on_deactivate' ) );
