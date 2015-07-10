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
		if ( apply_filters( 'jetpack_fonts_enable_typekit', true ) ) {
			add_action( 'jetpack_fonts_register', array( __CLASS__, 'register_provider' ) );
			add_action( 'customize_controls_print_scripts', array( __CLASS__, 'enqueue_scripts' ) );
			add_action( 'customize_preview_init', array( __CLASS__, 'enqueue_scripts' ) );
		}
		require_once __DIR__ . '/wpcom-compat.php';
		if ( ! ( defined( 'IS_WPCOM' ) && IS_WPCOM ) ) {
			add_filter( 'wpcom_font_rules_location_base', array( __CLASS__, 'local_dev_annotations' ) );
		}
	}

	/**
	 * Re-create the kit if it is missing or delete it if not being used.
	 *
	 * @param array $saved_fonts (Optional) All the currently saved fonts. Defaults to getting them from the site options.
	 */
	public static function maybe_create_or_delete_kit( $saved_fonts = null ) {
		$kit_id = self::get_kit_id();
		$typekit_saved_fonts = self::get_saved_typekit_fonts( $saved_fonts );
		$provider = null;
		if ( apply_filters( 'jetpack_fonts_enable_typekit', true ) ) {
			$provider = Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
		}

		// If a kit ID exists but the provider is disabled, delete the kit
		if ( $kit_id && ! $provider ) {
			self::delete_kit( $kit_id );
		}

		// If a kit ID exists but there are no saved Typekit fonts, delete the kit
		if ( $kit_id && $provider && count( $typekit_saved_fonts ) < 1 ) {
			self::delete_kit( $kit_id );
		}

		// If no kit ID exists, but there are saved Typekit fonts, publish the kit
		if ( ! $kit_id && $provider && count( $typekit_saved_fonts ) > 0 ) {
			$provider->save_fonts( $typekit_saved_fonts );
		}
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
		$typekit_saved_fonts = self::get_saved_typekit_fonts();
		$provider = Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
		if ( $provider && count( $typekit_saved_fonts ) > 0 ) {
			$provider->save_fonts( $typekit_saved_fonts );
		}
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
			// The TypekitApi class reports this error
			return $response;
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

	/**
	 * Return an array of saved fonts that use the typekit provider.
	 *
	 * @param array $saved_fonts (Optional) All the saved fonts. Defaults to getting the array from the site options.
	 *
	 * @return array The saved fonts that have the typekit provider.
	 */
	public static function get_saved_typekit_fonts( $saved_fonts = null ) {
		if ( ! is_array( $saved_fonts ) ) {
			$saved_fonts = Jetpack_Fonts::get_instance()->get( 'selected_fonts' );
		}
		return wp_list_filter( $saved_fonts, array( 'provider' => 'typekit' ) );
	}

	public static function local_dev_annotations( $dir ) {
		return __DIR__ . '/annotations';
	}

	public static function enqueue_scripts() {
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
add_action( 'jetpack_fonts_save', array( 'Jetpack_Fonts_Typekit', 'maybe_create_or_delete_kit' ) );

// Hey wp-cli is fun
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	include dirname( __FILE__ ) . '/wp-cli-command.php';
}
