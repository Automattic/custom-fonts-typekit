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

if ( ! defined( 'WPCOM_TYPEKIT_API_TOKEN' ) ) {
	define( 'WPCOM_TYPEKIT_API_TOKEN', '83285b026d39a1de4d36810211436d39574f0cf4' );
}

class Jetpack_Fonts_Typekit {

	const PREVIEWKIT_AUTH_ID = 'wp';
	const PREVIEWKIT_PRIMARY_AUTH_TOKEN = '3bb2a6e53c9684ffdc9a9aff185b2a62b09b6f5189114fc2b7a762d37126575957cc2be9ed2cf64258c2828e5d92d94602695c102ffcecb6fa701fe59ba9e9fee2253aa8ba8e355def1b980688bb77aa2d22dba28934c842d6375ecd';

	public static function init() {
		add_action( 'customize_register', array( __CLASS__, 'maybe_override_for_advanced_mode' ), 20 );
		add_action( 'jetpack_fonts_register', array( __CLASS__, 'register_provider' ) );
		add_action( 'customize_controls_print_scripts', array( __CLASS__, 'enqueue_scripts' ) );
		add_action( 'customize_preview_init', array( __CLASS__, 'enqueue_scripts' ) );
		add_action( 'wp_head', array( __CLASS__, 'maybe_print_advanced_kit' ) );
		require_once __DIR__ . '/wpcom-compat.php';
		if ( ! ( defined( 'IS_WPCOM' ) && IS_WPCOM ) ) {
			add_filter( 'wpcom_font_rules_location_base', array( __CLASS__, 'local_dev_annotations' ) );
		} else {
			require_once __DIR__ . '/usage.php';
			require_once __DIR__ . '/theme-support.php';
		}
	}

	/**
	 * Get the Typekit `Jetpack_Fonts_Provider` instance
	 * @return object Typekit_Jetpack_Fonts_Provider instance
	 */
	public static function get_provider() {
		return Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
	}

	public function maybe_print_advanced_kit() {
		if ( ! self::get_provider()->has_advanced_kit() ) {
			return;
		}

		$config = array(
			'typekit' => array(
				'id' => self::get_provider()->get( 'advanced_kit_id' )
			)
		);
		Jetpack_Fonts::get_instance()->output_webfont_loader( $config );
	}

	public function maybe_override_for_advanced_mode( $wp_customize ) {
		if ( ! self::get_provider()->has_advanced_kit() ) {
			return;
		}

		require_once __DIR__ . '/advanced-mode.php';
		Typekit_Advanced_Mode::customizer_init( $wp_customize );
	}

	/**
	 * Delete any saved kit.
	 */
	public static function maybe_delete_kit() {
		self::delete_kit();
	}

	/**
	 * Re-create a kit if there are Typekit fonts saved.
	 */
	public static function maybe_create_kit() {
		$jetpack_fonts = Jetpack_Fonts::get_instance();
		$saved_fonts = $jetpack_fonts->get_fonts();
		$typekit_fonts = wp_list_filter( $saved_fonts, array( 'provider' => 'typekit' ) );
		if ( empty( $typekit_fonts ) ) {
			return;
		}
		// re-saving will trigger things that need triggering
		$jetpack_fonts->save_fonts( $saved_fonts, true );
	}

	/**
	 * Delete a Typekit Kit both from the Typekit service itself as well as from
	 * the site's options. If the Typekit service reports a failure to delete the
	 * kit, the kit ID in the options will not be deleted either.
	 *
	 * @param string $kit_id (Optional) The kit ID to delete. Defaults to the currently saved kit ID as returned by `get_kit_id`.
	 *
	 * @return null|WP_Error Returns null if successful or if not kit ID exists, otherwise will return a WP_Error.
	 */
	public static function delete_kit( $kit_id = null ) {
		if ( ! isset( $kit_id ) ) {
			$kit_id = self::get_kit_id();
		}
		if ( empty( $kit_id ) ) {
			return;
		}
		require_once( __DIR__ . '/typekit-api.php' );
		$response = TypekitApi::delete_kit( $kit_id );
		if ( is_wp_error( $response ) ) {
			// If the service returns a 404, the kit already doesn't exist,
			// so we want to go down to the bottom and delete the stored
			// kit_id that no longer exists
			if ( 'typekit_api_404' !== $response->get_error_code() ) {
				return $response;
			}
		}
		Jetpack_Fonts::get_instance()->delete( 'typekit_kit_id' );
	}

	/**
	 * Return the currently saved typekit kit ID for this site.
	 *
	 * @return string The kit ID.
	 */
	public static function get_kit_id() {
		return Jetpack_Fonts::get_instance()->get( 'typekit_kit_id' );
	}

	public static function local_dev_annotations( $dir ) {
		return __DIR__ . '/annotations';
	}

	public static function enqueue_scripts() {
		if ( ! self::get_provider()->is_active() ) {
			return;
		}
		$deps = is_admin()
			? array( 'jetpack-fonts' )
			: array( 'typekit-preview', 'jetpack-fonts-preview' );

		wp_register_script( 'typekit-preview', '//use.typekit.net/previewkits/pk-v1.js', array(), '20150417', true );
		wp_enqueue_script( 'jetpack-fonts-typekit', plugins_url( 'js/providers/typekit.js', __FILE__ ), $deps, '20150417', true );

		wp_localize_script( 'jetpack-fonts-typekit', '_JetpackFontsTypekitOptions', array(
			'authentication' => array(
				'auth_id' => self::PREVIEWKIT_AUTH_ID,
				'auth_token' => self::PREVIEWKIT_PRIMARY_AUTH_TOKEN
			),
			'imageDir' => plugins_url( '/img/', __FILE__ ),
			'webKitShim' => 'https://wordpress.com/wp-content/mu-plugins/custom-fonts/webkit-shim.html',
			'isAdmin' => is_admin()
		) );

		if ( is_admin() ) {
			wp_enqueue_style( 'jetpack-fonts-typekit', plugins_url( 'css/jetpack-fonts-typekit.css', __FILE__ ), array(), '20150501', 'screen' );
		}
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
		$provider_dir = dirname( __FILE__ ) . '/providers/';
		$jetpack_fonts->register_provider( 'typekit', 'Jetpack_Typekit_Font_Provider', $provider_dir . 'typekit.php' );
	}
}

add_action( 'setup_theme', array( 'Jetpack_Fonts_Typekit', 'init' ), 9 );
add_action( 'custom-design-downgrade', array( 'Jetpack_Fonts_Typekit', 'maybe_delete_kit' ) );
add_action( 'custom-design-upgrade', array( 'Jetpack_Fonts_Typekit', 'maybe_create_kit' ) );

// Hey wp-cli is fun
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	include dirname( __FILE__ ) . '/wp-cli-command.php';
}
