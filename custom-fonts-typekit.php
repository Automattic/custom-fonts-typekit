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

if ( ! ( defined( 'IS_WPCOM' ) && IS_WPCOM ) ) {
	require __DIR__ . '/non-dotcom-shim.php';
}

class Jetpack_Fonts_Typekit {

	const PREVIEWKIT_AUTH_ID = 'wp';

	/**
	 * Remembers if an option that requires the kit to be republished has been
	 * updated during this execution so that we can republish the kit one time
	 * upon shutdown using all the new option values.
	 * @var boolean
	 */
	public static $republish_kit_on_shutdown = false;

	public static function init() {
		require_once __DIR__ . '/annotation-compat.php';
		add_action( 'customize_register', array( __CLASS__, 'maybe_override_for_advanced_mode' ), 20 );
		add_action( 'jetpack_fonts_register', array( __CLASS__, 'register_provider' ) );
		add_action( 'customize_controls_print_scripts', array( __CLASS__, 'enqueue_scripts' ) );
		add_action( 'customize_preview_init', array( __CLASS__, 'enqueue_scripts' ) );
		add_action( 'wp_head', array( __CLASS__, 'maybe_print_advanced_kit' ) );
		require_once __DIR__ . '/typekit-shims.php';
		if ( ! ( defined( 'IS_WPCOM' ) && IS_WPCOM ) ) {
			add_filter( 'wpcom_font_rules_location_base', array( __CLASS__, 'local_dev_annotations' ) );
		} else {
			require_once __DIR__ . '/usage.php';
			require_once __DIR__ . '/theme-support.php';
			add_action( 'jetpack_fonts_register', array( __CLASS__, 'maybe_migrate_options' ), 99 );
		}
	}

	public static function maybe_migrate_options() {
		if ( Jetpack_Fonts::get_instance()->get( 'migrated' ) ) {
			return;
		}
		require_once __DIR__ . '/migrate.php';
		wpcom_typekit_data_migrate();
	}

	/**
	 * Get the Typekit `Jetpack_Fonts_Provider` instance
	 * @return object Typekit_Jetpack_Fonts_Provider instance
	 */
	public static function get_provider() {
		return Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
	}

	public static function maybe_print_advanced_kit() {
		if ( ! self::get_provider()->has_advanced_kit() ) {
			return;
		}


		$kit_id = self::get_provider()->get( 'advanced_kit_id' );

		$config = array(
			'typekit' => array(
				'id' => $kit_id
			)
		);

		$theme_config = apply_filters( 'typekit_theme_fonts_async_load_config', array(), $kit_id );
		$additional_js = apply_filters( 'typekit_theme_fonts_additional_config_js', '', $kit_id );

		if ( is_array( $theme_config ) && ! empty( $theme_config ) ) {
			// `active` and `inactive` require special handling and can't be JSON-encoded
			if ( isset( $theme_config['active'] ) ) {
				$theme_config_active = $theme_config['active'];
				unset( $theme_config['active'] );
			}

			if ( isset( $theme_config['inactive'] ) ) {
				$theme_config_inactive = $theme_config['inactive'];
				unset( $theme_config['inactive'] );
			}

			$config = array_merge( $theme_config, $config ); // ensure default configuration wins
		}

		// JSON-encode what we have so far
		$config = json_encode( $config );

		// The values of the theme-provided `active` and `inactive` configurations must be executable functions
		// If we pass them through `json_encode()`, they become strings and the loading script breaks
		if ( isset( $theme_config_active ) || isset( $theme_config_inactive ) ) {
			$config = trim( $config );

			$config_left = substr( $config, 0, strrpos( $config, '}' ) );

			if ( isset( $theme_config_active ) ) {
				$config_left .= ', "active": ' . $theme_config_active;
			}

			if ( isset( $theme_config_inactive ) ) {
				$config_left .= ', "inactive": ' . $theme_config_inactive;
			}

			$config = $config_left . '}';
		}

		// output!
		echo
<<<EMBED
<script type="text/javascript" id="webfont-output">
  {$additional_js}
  WebFontConfig = {$config};
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
	})();
</script>
EMBED;
	}

	public static function maybe_override_for_advanced_mode( $wp_customize ) {
		if ( ! self::get_provider()->has_advanced_kit() ) {
			return;
		}

		require_once __DIR__ . '/advanced-mode.php';
		Typekit_Advanced_Mode::customizer_init( $wp_customize );
	}

	/**
	 * Should be added as a callback to any hooks for updating an option that
	 * affects how the kit is published (domains, languages, etc.) This allows the
	 * kit to be republished just once, even when more than one of these options
	 * changes at once.
	 */
	public static function kit_option_updated() {
		self::$republish_kit_on_shutdown = true;
	}

	/**
	 * Should be added as a callback on the shutdown hook. If kit_option_updated
	 * was called during this execution and the user is upgraded, using standard
	 * mode, and has saved families, this method will republish the user's kit
	 * with all of the current data values. This keeps the kit up-to-date and
	 * working properly on the blog regardless of what changes are made to
	 * WordPress options that affect how the kit needs to be published (like
	 * domains, languages, etc.).
	 */
	public static function maybe_republish_kit() {
		if ( ! self::$republish_kit_on_shutdown ) {
			return;
		}
		$provider = Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
		if ( ! $provider->is_active() ) {
			return;
		}
		self::maybe_create_kit();
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
		$response = self::get_provider()->delete_kit( $kit_id );
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
			? array( 'typekit-preview', 'jetpack-fonts', 'underscore' )
			: array( 'typekit-preview', 'jetpack-fonts-preview' );

		wp_register_script( 'typekit-preview', '//use.typekit.net/previewkits/pk-v1.js', array(), '20150417', true );
		wp_enqueue_script( 'jetpack-fonts-typekit', plugins_url( 'js/providers/typekit.js', __FILE__ ), $deps, '20150417', true );

		wp_localize_script( 'jetpack-fonts-typekit', '_JetpackFontsTypekitOptions', array(
			'authentication' => array(
				'auth_id' => self::PREVIEWKIT_AUTH_ID,
				'auth_token' => self::get_auth_token()
			),
			'isAdmin' => is_admin(),
			'badge' => array(
				'url' => 'https://typekit.com/?utm_source=wordpress&utm_medium=wp-plugin&utm_content=wppl110601&utm_campaign=more-info',
				'text' => __( 'Premium Fonts by Adobe Typekit' )
			)
		) );

		if ( is_admin() ) {
			wp_enqueue_style( 'jetpack-fonts-typekit', plugins_url( 'css/jetpack-fonts-typekit.css', __FILE__ ), array(), '20150501', 'screen' );
		}
	}

	/**
	 * Gets a TypekitPreview auth token, either the universal one for *.wordpress.com,
	 * or a temporary one from their API
	 * @return string  Auth token
	 */
	private static function get_auth_token() {
		if ( defined( 'IS_WPCOM' ) && IS_WPCOM ) {
			return WPCOM_TYPEKIT_PREVIEWKIT_TOKEN;
		}

		// have one?
		$maybe_token = get_transient( 'typekit_previewkit_token' );
		if ( $maybe_token ) {
			return $maybe_token;
		}

		// nope, get one
		$response = Jetpack_Fonts::get_instance()->get_provider( 'typekit' )->get_previewkit_token();
		// fail silently, I guess
		if ( is_wp_error( $response ) ) {
			return '';
		}

		// ok store it plz
		$token = $response['auth_token'];
		// shave an hour off the actual expiry, no surprises
		$expiry = strtotime( $response['expires_at'] ) - time() - HOUR_IN_SECONDS;
		set_transient( 'typekit_previewkit_token', $token, $expiry );

		// token token
		return $token;
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

// Add actions to mark kit for republishing when domain options change
add_action( 'update_option_home', array( 'Jetpack_Fonts_Typekit', 'kit_option_updated' ) );
add_action( 'update_option_siteurl', array( 'Jetpack_Fonts_Typekit', 'kit_option_updated' ) );
add_action( 'wpcom_makeprimaryblog', array( 'Jetpack_Fonts_Typekit', 'kit_option_updated' ) );

// Add action to mark kit for republishing when language options change
add_action( 'update_option_lang_id', array( 'Jetpack_Fonts_Typekit', 'kit_option_updated' ) );

// Add action to republish the kit on shutdown if any options have changed
add_action( 'shutdown', array( 'Jetpack_Fonts_Typekit', 'maybe_republish_kit' ) );

// Hey wp-cli is fun
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	include dirname( __FILE__ ) . '/wp-cli-command.php';
}
