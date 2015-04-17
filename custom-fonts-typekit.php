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

	const PREVIEWKIT_AUTH_ID = 'wp';
	const PREVIEWKIT_PRIMARY_AUTH_TOKEN = ''; // TODO: store this somewhere

	public static function init() {
		add_action( 'jetpack_fonts_register', array( get_called_class(), 'register_provider' ) );
		// Note: for some reason using wp_enqueue_scripts does not work for the sidebar window
		add_action( 'wp_print_scripts', array( get_called_class(), 'enqueue_scripts' ) );
	}

	public static function enqueue_scripts() {
		wp_enqueue_script( 'typekit-preview', 'http://use.typekit.net/previewkits/pk-v1.js', array(), '20150417', true );
		wp_enqueue_script( 'jetpack-fonts-typekit', plugins_url( 'js/providers/typekit.js', __FILE__ ), array( 'typekit-preview' ), '20150417', true );
		wp_localize_script( 'jetpack-fonts-typekit', '_JetpackFontsTypekitAuth', array(
			'auth_id' => self::PREVIEWKIT_AUTH_ID,
			'auth_token' => self::get_preview_token()
		) );
	}

	public static function get_preview_token() {
		$primary_host = self::primary_site_host();

		if ( ! $primary_host ) {
			return null;
		}

		if ( is_admin() || is_customize_preview() || preg_match( '/\.wordpress\.com$/', $primary_host ) ) {
			return rawurlencode( self::PREVIEWKIT_PRIMARY_AUTH_TOKEN );
		}
		// TODO: generate a temp token for custom domains
	}

	/**
	 * Gets the primary hostname (domain or subdomain) that this blog is hosted
	 * on. Any other domains for the blog should redirect to this one.
	 *
	 * @return string|null Returns the primary hostname for the blog
	 */
	public static function primary_site_host() {
		if ( function_exists( 'get_primary_redirect' ) ) {
			// Get the primary redirect host for a wordpress.com blog
			return get_primary_redirect( get_current_blog_id() );
		} else {
			// Get the host from the standalone wordpress 'home' option
			$parsed = parse_url( get_option( 'home' ) );
			if ( is_array( $parsed ) && array_key_exists( 'host', $parsed ) ) {
				return $parsed['host'];
			}
		}
		return null;
	}

	public static function register_provider( $jetpack_fonts ) {
		$provider_dir = dirname( __FILE__ ) . '/';
		$jetpack_fonts->register_provider( 'typekit', 'Jetpack_Typekit_Font_Provider', $provider_dir . 'typekit.php' );
	}
}

add_action( 'init', array( 'Jetpack_Fonts_Typekit', 'init' ) );
