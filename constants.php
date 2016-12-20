<?php

/**
 * You also need to define two more constants in the `private-constants.php` file or
 * anywhere else during the PHP code execution before this plugin loads.
 * These constants will point to WPCom pub (free) and premium themes.
 * Example of `private-constants.php` file:
 *
 * define( 'WPCOMSH_WPCOM_PUB_THEMES_PATH', '/srv/www/wpcom-pub-themes' );
 * define( 'WPCOMSH_WPCOM_PREMIUM_THEMES_PATH', '/srv/www/wpcom-premium-themes' );
 *
 */

$current_dir = dirname( __FILE__ );

if ( file_exists( "$current_dir/private-constants.php" ) ) {
	require_once( 'private-constants.php' );
} else if (
	! defined( 'WPCOMSH_WPCOM_PUB_THEMES_PATH' ) ||
    ! defined( 'WPCOMSH_WPCOM_PREMIUM_THEMES_PATH' )
) {
	// This won't work. Just a fallback so functions in this plugin return false instead of warning/error.
	define( 'WPCOMSH_WPCOM_PUB_THEMES_PATH', $current_dir );
	define( 'WPCOMSH_WPCOM_PREMIUM_THEMES_PATH', $current_dir );

	error_log(
		'WPComSH: define WPCOMSH_WPCOM_PUB_THEMES_PATH and WPCOMSH_WPCOM_PREMIUM_THEMES_PATH ' .
		'so they point to the correct WPCom themes paths.'
	);
}

define( 'WPCOMSH_WPCOM_PUB_THEME_TYPE', 'wpcom_pub_theme_type' );
define( 'WPCOMSH_WPCOM_PREMIUM_THEME_TYPE', 'wpcom_premium_theme_type' );
define( 'WPCOMSH_NON_WPCOM_THEME', 'non_wpcom_theme' );
