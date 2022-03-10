<?php
/**
 * Collection of hooks that apply feature checks on Atomic sites.
 *
 * @package wpcomsh
 */

/**
 * If this site does NOT have the 'options-permalink' feature, remove the Settings > Permalinks submenu item.
 */
function wpcomsh_maybe_remove_permalinks_menu_item() {
	if ( wpcom_site_has_feature( WPCOM_Features::OPTIONS_PERMALINK ) ) {
		return;
	}
	remove_submenu_page( 'options-general.php', 'options-permalink.php' );
}
add_action( 'admin_menu', 'wpcomsh_maybe_remove_permalinks_menu_item' );

/**
 * If this site does NOT have the 'options-permalink' feature, disable the /wp-admin/options-permalink.php page.
 * But always allow proxied users to access the permalink options page.
 */
function wpcomsh_maybe_disable_permalink_page() {
	if ( wpcom_site_has_feature( WPCOM_Features::OPTIONS_PERMALINK ) ) {
		return;
	}
	if ( ! ( defined( 'AT_PROXIED_REQUEST' ) && AT_PROXIED_REQUEST ) ) {
		wp_die(
			__( 'You do not have permission to access this page.', 'wpcomsh' ),
			'',
			array(
				'back_link' => true,
				'response'  => 403,
			)
		);
	} else {
		add_action(
			'admin_notices',
			function() {
				echo '<div class="notice notice-warning"><p>' . esc_html__( 'Proxied only: You can see this because you are proxied. Do not use this if you don\'t know why you are here.', 'wpcomsh' ) . '</p></div>';
			}
		);
	}
}
add_action( 'load-options-permalink.php', 'wpcomsh_maybe_disable_permalink_page' );

/**
 * Restricts the allowed mime types if the site have does NOT have access to the required feature.
 *
 * @param array mimes Mime types keyed by the file extension regex corresponding to those types.
 * @return array Allowed mime types.
 */
function wpcomsh_maybe_restrict_mimetypes( $mimes ) {
	$disallowed_mimes = array();
	if ( ! wpcom_site_has_feature( WPCOM_Features::UPGRADED_UPLOAD_FILETYPES ) ) {
		// Copied from WPCOM (see `WPCOM_UPLOAD_FILETYPES_FOR_UPGRADES` in `.config/wpcom-options.php`).
		$upgraded_upload_filetypes = 'mp3 m4a wav ogg zip txt tiff bmp';
		$disallowed_mimes          = array_merge( $disallowed_mimes, explode( ' ', $upgraded_upload_filetypes ) );
	}

	if ( ! wpcom_site_has_feature( WPCOM_Features::VIDEOPRESS ) ) {
		// Copied from WPCOM (see `WPCOM_UPLOAD_FILETYPES_FOR_VIDEOS` in `.config/wpcom-options.php`).
		// The `ttml` extension is set by `wp-content/mu-plugins/videopress/subtitles.php`.
		$video_upload_filetypes = 'ogv mp4 m4v mov wmv avi mpg 3gp 3g2 ttml';
		$disallowed_mimes       = array_merge( $disallowed_mimes, explode( ' ', $video_upload_filetypes ) );
	}

	foreach ( $disallowed_mimes as $disallowed_mime ) {
		foreach ( $mimes as $ext_pattern => $mime ) {
			if ( strpos( $ext_pattern, $disallowed_mime ) !== false )
				unset( $mimes[ $ext_pattern ] );
		}
	}

	return $mimes;
}
add_filter( 'upload_mimes', 'wpcomsh_maybe_restrict_mimetypes', PHP_INT_MAX );

/**
 * Redirect plugins.php and plugin-install.php to their Calypso counterparts if this site doesn't have the
 * MANAGE_PLUGINS feature.
 */
function wpcomsh_maybe_redirect_to_calypso_plugin_pages() {
	if ( wpcom_site_has_feature( WPCOM_Features::MANAGE_PLUGINS ) ) {
		return;
	}

	if ( ! class_exists( 'Automattic\Jetpack\Status' ) ) {
		return;
	}

	$request_uri = wp_unslash( $_SERVER['REQUEST_URI'] ); // phpcs:ignore

	$site = ( new Automattic\Jetpack\Status() )->get_site_suffix();

	// Redirect to calypso when user is trying to install plugin.
	if ( 0 === strpos( $request_uri, '/wp-admin/plugin-install.php' ) ) {
		wp_safe_redirect( 'https://wordpress.com/plugins/' . $site );
		exit;
	}

	if ( 0 === strpos( $request_uri, '/wp-admin/plugins.php' ) ) {
		wp_safe_redirect( 'https://wordpress.com/plugins/manage/' . $site );
		exit;
	}
}

add_action( 'plugins_loaded', 'wpcomsh_maybe_redirect_to_calypso_plugin_pages' );

/**
 * This function manages the feature that allows the user to hide the "WP.com Footer Credit".
 * The footer credit feature lives in a separate platform-agnostic repository, so we rely on filters to manage it.
 * Pressable Footer Credit repository: https://github.com/Automattic/at-pressable-footer-credit
 *
 * @param bool $previous_value The previous value or default value of filter.
 */
function wpcomsh_gate_footer_credit_feature( $previous_value ) {
	return wpcom_site_has_feature( WPCOM_Features::NO_WPCOM_BRANDING );
}
add_filter( 'wpcom_better_footer_credit_can_customize', 'wpcomsh_gate_footer_credit_feature' );

/**
 * Gate the Additional CSS feature to eligible sites.
 */
add_action( 'jetpack_loaded', array( '\WPCOMSH_Feature_Manager\Manage_Additional_CSS_Feature', 'maybe_disable_custom_css' ) );
