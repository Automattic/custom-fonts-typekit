<?php
/**
 * Plugin Name: WordPress.com Site Helper
 * Description: A helper for connecting WordPress.com sites to external host infrastructure.
 * Version: 2.9.46
 * Author: Automattic
 * Author URI: http://automattic.com/
 *
 * @package wpcomsh
 */

// Increase version number if you change something in wpcomsh.
define( 'WPCOMSH_VERSION', '2.9.46' );

// If true, Typekit fonts will be available in addition to Google fonts
add_filter( 'jetpack_fonts_enable_typekit', '__return_true' );

// This exists only on the Atomic platform. Blank if migrated elsewhere, so it doesn't fatal.
if ( ! class_exists( 'Atomic_Persistent_Data' ) ) {
	require_once __DIR__ . '/class-atomic-persistent-data.php';
}

require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/wpcom-features/functions-wpcom-features.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/i18n.php';

require_once __DIR__ . '/plugin-hotfixes.php';

require_once __DIR__ . '/footer-credit/footer-credit.php';
require_once __DIR__ . '/block-theme-footer-credits/block-theme-footer-credits.php';
require_once __DIR__ . '/storefront/storefront.php';
require_once __DIR__ . '/custom-colors/colors.php';
require_once __DIR__ . '/storage/storage.php';

// Interoperability with the core WordPress data privacy functionality (See also "GDPR")
require_once __DIR__ . '/privacy/class-wp-privacy-participating-plugins.php';

// Functionality to make sites private and only accessible to members with appropriate capabilities
require_once __DIR__ . '/private-site/private-site.php';

// Updates customizer Save/Publish labels to avoid confusion on launching vs saving changes on a site.
require_once __DIR__ . '/customizer-fixes/customizer-fixes.php';

require_once __DIR__ . '/class-wpcomsh-log.php';
require_once __DIR__ . '/safeguard/plugins.php';
require_once __DIR__ . '/logo-tool/logo-tool.php';
require_once __DIR__ . '/jetpack-token-error-header/class-atomic-record-jetpack-token-errors.php';

/**
 * WP.com Widgets (in alphabetical order)
 */
require_once __DIR__ . '/widgets/class-aboutme-widget.php';
require_once __DIR__ . '/widgets/class-gravatar-widget.php';
require_once __DIR__ . '/widgets/class-jetpack-i-voted-widget.php';
require_once __DIR__ . '/widgets/class-jetpack-posts-i-like-widget.php';
require_once __DIR__ . '/widgets/class-music-player-widget.php';
require_once __DIR__ . '/widgets/class-widget-authors-grid.php';
require_once __DIR__ . '/widgets/class-wpcom-freshly-pressed-widget.php';
require_once __DIR__ . '/widgets/class-wpcom-widget-recent-comments.php';
require_once __DIR__ . '/widgets/class-wpcom-widget-reservations.php';

// WP.com Category Cloud widget
require_once __DIR__ . '/widgets/class-wpcom-category-cloud-widget.php';
// Override core tag cloud widget to add a settable `limit` parameter
require_once __DIR__ . '/widgets/class-wpcom-tag-cloud-widget.php';

require_once __DIR__ . '/widgets/tlkio/class-tlkio-widget.php';
require_once __DIR__ . '/widgets/class-widget-top-clicks.php';
require_once __DIR__ . '/widgets/class-pd-top-rated.php';
require_once __DIR__ . '/widgets/class-jetpack-widget-twitter.php';

// autoload composer sourced plugins
require_once __DIR__ . '/vendor/autoload.php';

// REST API
require_once __DIR__ . '/endpoints/rest-api.php';

// Load feature plugin overrides
require_once __DIR__ . '/feature-plugins/additional-css.php';
require_once __DIR__ . '/feature-plugins/full-site-editing.php';
require_once __DIR__ . '/feature-plugins/google-fonts.php';
require_once __DIR__ . '/feature-plugins/gutenberg-mods.php';
require_once __DIR__ . '/feature-plugins/hooks.php';
require_once __DIR__ . '/feature-plugins/coblocks-mods.php';
require_once __DIR__ . '/feature-plugins/autosave-revision.php';
require_once __DIR__ . '/feature-plugins/marketplace.php';
require_once __DIR__ . '/feature-plugins/masterbar.php';
require_once __DIR__ . '/feature-plugins/post-list.php';

if ( ! class_exists( 'Jetpack_Data' ) ) {
	require_once __DIR__ . '/feature-plugins/class-jetpack-data.php';
}

// wp-admin Notices
require_once __DIR__ . '/notices/plan-notices.php';
require_once __DIR__ . '/notices/storage-notices.php';

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once __DIR__ . '/class-wpcomsh-cli-commands.php';
}

require_once __DIR__ . '/wpcom-migration-helpers/site-migration-helpers.php';

require_once __DIR__ . '/class-jetpack-plugin-compatibility.php';
new Jetpack_Plugin_Compatibility();

require_once __DIR__ . '/support-session.php';

// Adds fallback behavior for non-Gutenframed sites to be able to use the 'Share Post' functionality from WPCOM Reader.
require_once __DIR__ . '/share-post/share-post.php';

// Jetpack Token Resilience.
require_once __DIR__ . '/jetpack-token-resilience/class-wpcomsh-blog-token-resilience.php';

// Require a Jetpack Connection Owner.
require_once __DIR__ . '/jetpack-require-connection-owner/class-wpcomsh-require-connection-owner.php';

// Jetpack Token Migration Cleanup.
require_once __DIR__ . '/jetpack-token-migration-cleanup/class-wpcomsh-token-migration-cleanup.php';

// Enable MailPoet subscriber stats reports
require_once __DIR__ . '/mailpoet/class-wpcomsh-mailpoet-subscribers-stats-report.php';

const WPCOM_CORE_ATOMIC_PLUGINS = array(
	'jetpack/jetpack.php',
	'akismet/akismet.php',
);
const WPCOM_FEATURE_PLUGINS     = array(
	'coblocks/class-coblocks.php',
	'full-site-editing/full-site-editing-plugin.php',
	'gutenberg/gutenberg.php',
	'layout-grid/index.php',
	'page-optimize/page-optimize.php',
);

/**
 * The AMP plugin displays an error message in the dashboard when
 * it's installed in the wrong directory (i.e. not `amp`).
 *
 * When the plugin is managed by us, the AMP plugin incorrectly thinks it's
 * been installed in the wrong directory due to symlinking. So we disable
 * the error message when the installation directory is correct and managed
 * by us.
 *
 * However, some users might do it wrong and that could affect their
 * ability to have the plugin updated automatically.
 * We should keep the warning if that's the case.
 *
 * See https://github.com/Automattic/wp-calypso/issues/64104.
 *
 * @return void
 */
function wpcomsh_maybe_remove_amp_incorrect_installation_notice() {
	if ( wpcomsh_is_managed_plugin( 'amp/amp.php' ) ) {
		remove_action( 'admin_notices', '_amp_incorrect_plugin_slug_admin_notice' );
	}
}

add_action(
	'admin_head',
	'wpcomsh_maybe_remove_amp_incorrect_installation_notice',
	9 // Priority 9 to run before default priority
);

/**
 * Remove VaultPress WP Admin notices
 *
 * @return void
 */
function wpcomsh_remove_vaultpress_wpadmin_notices() {
	if ( ! class_exists( 'VaultPress' ) ) {
		return;
	}

	$vp_instance = VaultPress::init();

	remove_action( 'user_admin_notices', array( $vp_instance, 'activated_notice' ) );
	remove_action( 'admin_notices', array( $vp_instance, 'activated_notice' ) );

	remove_action( 'user_admin_notices', array( $vp_instance, 'connect_notice' ) );
	remove_action( 'admin_notices', array( $vp_instance, 'connect_notice' ) );

	remove_action( 'user_admin_notices', array( $vp_instance, 'error_notice' ) );
	remove_action( 'admin_notices', array( $vp_instance, 'error_notice' ) );
}
add_action(
	'admin_head',
	'wpcomsh_remove_vaultpress_wpadmin_notices',
	11 // Priority 11 so it runs after VaultPress `admin_head` hook
);

// Force Jetpack to update plugins one-at-a-time to avoid a site-breaking core concurrent update bug
// https://core.trac.wordpress.org/ticket/53705
if (
	! defined( 'JETPACK_PLUGIN_AUTOUPDATE' ) &&
	0 === strncmp( $_SERVER['REQUEST_URI'], '/xmlrpc.php?', strlen( '/xmlrpc.php?' ) ) ) { //phpcs:ignore
	define( 'JETPACK_PLUGIN_AUTOUPDATE', true );
}

/**
 * Detects new plugins and defaults them to be auto-updated
 *
 * This is a pre-option filter for the auto_update_plugins option. Its purpose
 * is to default newly added plugins to being auto-updated. After that, if users
 * want to disable auto-updates for those plugins, they can.
 *
 * @param mixed $pre_auto_update_plugins Pre auto update plugins
 *
 * @return bool
 */
function wpcomsh_auto_update_new_plugins_by_default( $pre_auto_update_plugins ) {
	// Listing plugins is a costly operation, so we only want to do this under certain circumstances.
	$look_for_new_plugins = false;

	// Does this look like a Jetpack plugin update attempt?
	// ref: https://github.com/WordPress/wordpress-develop/blob/18ebf26bc3787e8ccc03438bd8375e4828030ca9/src/wp-admin/includes/class-wp-upgrader.php#L904
	// ref: https://github.com/Automattic/jetpack/blob/82d102a231c34585150056329879e0745c954974/projects/plugins/jetpack/json-endpoints/jetpack/class.jetpack-json-api-plugins-modify-endpoint.php#L331
	if (
		defined( 'XMLRPC_REQUEST' ) && XMLRPC_REQUEST &&
		HOUR_IN_SECONDS < ( time() - get_option( 'auto_updater.lock', 0 ) )
	) {
		$look_for_new_plugins = true;
	}

	// We'd like admin operations via WP-CLI to have the latest auto-updated plugins list
	if ( defined( 'WP_CLI' ) && WP_CLI ) {
		$look_for_new_plugins = true;
	}

	// Is core doing update-related things?
	// ref: https://github.com/WordPress/wordpress-develop/blob/98c9ab835e9e1e2195d336fa0ef913debb76edca/src/wp-includes/update.php#L966
	if (
		doing_action( 'load-plugins.php' ) ||
		doing_action( 'load-update.php' ) ||
		doing_action( 'load-update-core.php' ) ||
		doing_action( 'wp_update_plugins' )
	) {
		$look_for_new_plugins = true;
	}

	if ( ! $look_for_new_plugins ) {
		return $pre_auto_update_plugins;
	}

	// Remove this pre_option filter immediately because it:
	// - calls get_option for the same option and will otherwise infinitely recurse
	// - updates auto_update_plugins on-demand an only needs to run once
	$filter_removed = remove_filter( 'pre_option_auto_update_plugins', __FUNCTION__ );
	if ( ! $filter_removed ) {
		// Return immediately because it's not safe to continue
		return $pre_auto_update_plugins;
	}

	$baseline_plugins_list = get_option( 'wpcomsh_plugins_considered_for_auto_update' );
	if ( ! function_exists( 'get_plugins' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}
	$fresh_plugins_list  = array_keys( get_plugins() );
	$auto_update_plugins = get_option( 'auto_update_plugins', array() );

	$skip_new_plugins = false;

	if ( false === $baseline_plugins_list && ! empty( $auto_update_plugins ) ) {
		// We don't yet have a baseline plugin list, so we can't identify new plugins.
		// Since the site already has a non-empty auto_update_plugins option,
		// let's assume it matches the admin's intention and leave it as-is.
		// This should be the first and only time we are missing a baseline plugin list.
		// Plugins added in the future should be auto-updated by default.
		$skip_new_plugins = true;
	}

	if ( false === $baseline_plugins_list ) {
		$baseline_plugins_list = array();
	}

	$new_unmanaged_plugins = array();

	if ( ! $skip_new_plugins ) {
		$new_plugins = array_diff( $fresh_plugins_list, $baseline_plugins_list );
		foreach ( $new_plugins as $new_plugin ) {
			if ( ! wpcomsh_is_managed_plugin( $new_plugin ) ) {
				$new_unmanaged_plugins[] = $new_plugin;
			}
		}
	}

	if ( ! empty( $new_unmanaged_plugins ) ) {
		$auto_update_plugins = array_unique( array_merge( $auto_update_plugins, $new_unmanaged_plugins ) );
		update_option( 'auto_update_plugins', $auto_update_plugins );
	}

	if ( $baseline_plugins_list != $fresh_plugins_list ) { //phpcs:ignore
		update_option( 'wpcomsh_plugins_considered_for_auto_update', $fresh_plugins_list, false );
	}

	return $auto_update_plugins;
}
add_filter( 'pre_option_auto_update_plugins', 'wpcomsh_auto_update_new_plugins_by_default' );

/**
 * Get atomic managed theme template auto update label
 *
 * @return string
 */
function wpcomsh_atomic_managed_theme_template_auto_update_label() {
	/* translators: Message about how a managed theme is updated. */
	return __( 'Updates managed by WordPress.com', 'wpcomsh' );
}
add_filter( 'atomic_managed_theme_template_auto_update_label', 'wpcomsh_atomic_managed_theme_template_auto_update_label' );

/**
 * Get atomic managed plugin auto update debug label
 *
 * @return string
 */
function wpcomsh_atomic_managed_plugin_auto_update_debug_label() {
	/* translators: Information about how a managed plugin is updated, for debugging purposes. */
	return __( 'Updates managed by WordPress.com', 'wpcomsh' );
}
add_filter( 'atomic_managed_plugin_auto_update_debug_label', 'wpcomsh_atomic_managed_plugin_auto_update_debug_label' );

/**
 * Get atomic managed theme auto update debug label
 *
 * @return string
 */
function wpcomsh_atomic_managed_theme_auto_update_debug_label() {
	/* translators: Information about how a managed theme is updated, for debugging purposes. */
	return __( 'Updates managed by WordPress.com', 'wpcomsh' );
}
add_filter( 'atomic_managed_theme_auto_update_debug_label', 'wpcomsh_atomic_managed_theme_auto_update_debug_label' );


/**
 * Add managed plugins action links
 */
function wpcomsh_managed_plugins_action_links() {
	foreach ( WPCOM_CORE_ATOMIC_PLUGINS as $plugin ) {
		if ( wpcomsh_is_managed_plugin( $plugin ) ) {
			add_filter(
				"plugin_action_links_{$plugin}",
				'wpcomsh_hide_plugin_deactivate_edit_links'
			);

			add_action(
				"after_plugin_row_{$plugin}",
				'wpcomsh_show_plugin_auto_managed_notice',
				10,
				2
			);
		} else {
			add_action( "after_plugin_row_{$plugin}", 'wpcomsh_show_unmanaged_plugin_separator', PHP_INT_MAX );
		}
	}

	foreach ( WPCOM_FEATURE_PLUGINS as $plugin ) {
		if ( wpcomsh_is_managed_plugin( $plugin ) ) {
			add_action(
				"after_plugin_row_{$plugin}",
				'wpcomsh_show_plugin_auto_managed_notice',
				10,
				2
			);
		} else {
			add_action( "after_plugin_row_{$plugin}", 'wpcomsh_show_unmanaged_plugin_separator', PHP_INT_MAX );
		}
	}

	// Remove `delete` link for all managed plugins purchased from Wordpress.com Marketplace.
	$all_plugin_files     = array_keys( get_plugins() );
	$active_subscriptions = get_option( 'wpcom_active_subscriptions', array() );
	foreach ( $active_subscriptions as $plugin_slug => $subscription ) {
		if ( ! isset( $subscription->product_type ) || 'marketplace_plugin' !== $subscription->product_type ) {
			continue;
		}

		// Get installed plugin.
		$installed_plugin = array_values(
			array_filter(
				$all_plugin_files,
				function( $plugin_file ) use ( $plugin_slug ) {
					if ( wpcomsh_is_managed_plugin( $plugin_file ) && str_starts_with( $plugin_file, $plugin_slug ) ) {
						return true;
					}
				}
			)
		);

		if ( ! $installed_plugin ) {
			continue;
		}

		add_filter(
			"plugin_action_links_{$installed_plugin[0]}",
			'wpcomsh_hide_plugin_remove_link'
		);

		add_action(
			"after_plugin_row_{$installed_plugin[0]}",
			'wpcomsh_show_plugin_auto_managed_notice',
			10,
			2
		);
	}
}
add_action( 'admin_init', 'wpcomsh_managed_plugins_action_links' );


/**
 * Remove hooks that add the plugins autoupdate column. They are ineffective on Atomic sites.
 */
function wpcomsh_remove_plugin_autoupdates() {
	if ( ! class_exists( 'Jetpack_Calypsoify' ) ) {
		return;
	}
	remove_action( 'manage_plugins_columns', array( Jetpack_Calypsoify::get_instance(), 'manage_plugins_columns_header' ) );
	remove_action( 'manage_plugins_custom_column', array( Jetpack_Calypsoify::get_instance(), 'manage_plugins_custom_column' ) );
	remove_action( 'bulk_actions-plugins', array( Jetpack_Calypsoify::get_instance(), 'bulk_actions_plugins' ) );
	remove_action( 'handle_bulk_actions-plugins', array( Jetpack_Calypsoify::get_instance(), 'handle_bulk_actions_plugins' ) );
}
add_action( 'admin_init', 'wpcomsh_remove_plugin_autoupdates' );


/**
 * Removed unused capability (it was only used for the autoupdates columns).
 *
 * @param mixed $caps Capabilities
 * @param mixed $cap Capability
 *
 * @return [type]
 */
function wpcomsh_remove_autoupdates_meta_cap( $caps, $cap ) {
	return 'jetpack_manage_autoupdates' === $cap ? array( 'do_not_allow' ) : $caps;
}
add_filter( 'map_meta_cap', 'wpcomsh_remove_autoupdates_meta_cap', 10, 2 );

/**
 * Hide update notice for managed plugins
 */
function wpcomsh_hide_update_notice_for_managed_plugins() {
	$plugin_files = array_keys( get_plugins() );
	foreach ( $plugin_files as $plugin ) {
		if ( wpcomsh_is_managed_plugin( $plugin ) ) {
			remove_action( "after_plugin_row_{$plugin}", 'wp_plugin_update_row', 10, 2 );
		}
	}
}
add_action( 'load-plugins.php', 'wpcomsh_hide_update_notice_for_managed_plugins', 25 );

/**
 * Check if pluginis managed
 *
 * @param mixed $plugin_file Name of plugin file
 *
 * @return bool
 */
function wpcomsh_is_managed_plugin( $plugin_file ) {
	if ( defined( 'IS_ATOMIC' ) && IS_ATOMIC && class_exists( 'Atomic_Platform_Mu_Plugin' ) ) {
		return Atomic_Platform_Mu_Plugin::is_managed_plugin( $plugin_file );
	}

	return false;
}

/**
 * Hide hide vaultpress from plugin list
 *
 * @return void
 */
function hide_vaultpress_from_plugin_list() {
	global $wp_list_table;
	unset( $wp_list_table->items['vaultpress/vaultpress.php'] );
}
add_action( 'pre_current_active_plugins', 'hide_vaultpress_from_plugin_list' );

/**
 * Hide wpcomsh plugin links
 *
 * @return array
 */
function wpcomsh_hide_wpcomsh_plugin_links() {
	return array();
}

/**
 * Hide plugin deactivate edit links
 *
 * @param mixed $links The nav links
 *
 * @return array
 */
function wpcomsh_hide_plugin_deactivate_edit_links( $links ) {
	if ( ! is_array( $links ) ) {
		return array();
	}

	unset( $links['deactivate'] );
	unset( $links['edit'] );

	return $links;
}

/**
 * Hide plugin removal link
 *
 * @param mixed $links The nav links
 *
 * @return array
 */
function wpcomsh_hide_plugin_remove_link( $links ) {
	if ( ! is_array( $links ) ) {
		return array();
	}

	unset( $links['delete'] );

	return $links;
}

/**
 * Hide the Jetpack version number from the plugin list.
 * That version is managed by the Atomic platform.
 *
 * @param string[] $plugin_meta An array of the plugin's metadata, including
 *                              the version, author, author URI, and plugin URI.
 * @param string   $plugin_file Path to the plugin file relative to the plugins directory.
 * @param array    $plugin_data An array of plugin data.
 * @param string   $status      Status filter currently applied to the plugin list.
 */
function wpcom_hide_jetpack_version_number( $plugin_meta, $plugin_file, $plugin_data, $status ) { // phpcs:ignore
	if (
		is_array( $plugin_meta )
		&& isset( $plugin_data['slug'], $plugin_data['Version'] )
		&& 'jetpack' === $plugin_data['slug']
		&& false !== strpos( $plugin_meta[0], $plugin_data['Version'] )
	) {
		unset( $plugin_meta[0] );
	}

	return $plugin_meta;
}
add_filter( 'plugin_row_meta', 'wpcom_hide_jetpack_version_number', 10, 4 );

/**
 * Show plugin auto managed notice
 *
 * @param mixed $file The plugin file
 * @param mixed $plugin_data The plugin data
 */
function wpcomsh_show_plugin_auto_managed_notice( $file, $plugin_data ) {
	$plugin_name = 'The plugin';
	$active      = is_plugin_active( $file ) ? ' active' : '';

	if ( array_key_exists( 'Name', $plugin_data ) ) {
		$plugin_name = $plugin_data['Name'];
	}

	/* translators: %s: plugin name */
	$message = sprintf( __( '%s is automatically managed for you.', 'wpcomsh' ), $plugin_name );

	if ( in_array( $file, WPCOM_FEATURE_PLUGINS, true ) ) {
		$message = esc_html__( 'This plugin was installed by WordPress.com and provides features offered in your plan subscription.', 'wpcomsh' );
	}

	echo '<tr class="plugin-update-tr' . $active . '">' . //phpcs:ignore
			'<td colspan="4" class="plugin-update colspanchange">' .
				'<div class="notice inline notice-success notice-alt">' .
					"<p>{$message}</p>" . //phpcs:ignore
				'</div>' .
			'</td>' .
		'</tr>';
}

/**
 * Renders a separator row for plugins that are managed by WordPress.com but the user has currently
 * removed it and added an unmanaged version.
 *
 * @param string $file  Plugin file name.
 */
function wpcomsh_show_unmanaged_plugin_separator( $file ) {
	$active = is_plugin_active( $file ) ? 'active' : '';

	echo "<tr class=\"$active\">" . //phpcs:ignore
		'<th colspan="4" scope="row" class="check-column"></th>' .
		'</tr>';
}

/**
 * Hides mustuse and dropin plugins in Plugins list.
 */
add_filter( 'show_advanced_plugins', '__return_false' );

/**
 * Register theme hooks
 */
function wpcomsh_register_theme_hooks() {
	add_filter(
		'jetpack_wpcom_theme_skip_download',
		'wpcomsh_jetpack_wpcom_theme_skip_download',
		10,
		2
	);

	add_filter(
		'jetpack_wpcom_theme_delete',
		'wpcomsh_jetpack_wpcom_theme_delete',
		10,
		2
	);
}
add_action( 'init', 'wpcomsh_register_theme_hooks' );

/**
 * Provides a favicon fallback in case it's undefined.
 *
 * @param string $url Site Icon URL.
 * @return string Site Icon URL.
 */
function wpcomsh_site_icon_url( $url ) {
	if ( empty( $url ) ) {
		$url = 'https://s0.wp.com/i/webclip.png';
	}

	return $url;
}
add_filter( 'get_site_icon_url', 'wpcomsh_site_icon_url' );

/**
 * Filters a user's capabilities depending on specific context and/or privilege.
 *
 * @param array  $required_caps Returns the user's actual capabilities.
 * @param string $cap           Capability name.
 * @return array Primitive caps.
 */
function wpcomsh_map_caps( $required_caps, $cap ) {
	if ( 'edit_themes' === $cap ) {
		$theme = wp_get_theme();
		if ( wpcomsh_is_wpcom_premium_theme( $theme->get_stylesheet() )
			&& 'Automattic' !== $theme->get( 'Author' ) ) {
			$required_caps[] = 'do_not_allow';
		}
	}
	return $required_caps;
}
add_action( 'map_meta_cap', 'wpcomsh_map_caps', 10, 2 );

/**
 * Don't allow site owners to be removed.
 *
 * @param array $allcaps An array of all the user's capabilities.
 * @param array $caps    Actual capabilities for meta capability.
 * @param array $args    Optional parameters passed to has_cap(), typically object ID.
 * @return array
 */
function wpcomsh_prevent_owner_removal( $allcaps, $caps, $args ) { //phpcs:ignore
	// Trying to edit or delete a user other than yourself?
	if ( in_array( $args[0], array( 'edit_user', 'delete_user', 'remove_user', 'promote_user' ), true ) ) {
		$jetpack = get_option( 'jetpack_options' );

		if ( ! empty( $jetpack['master_user'] ) && $args[2] == $jetpack['master_user'] ) { //phpcs:ignore
			return array();
		}
	}

	return $allcaps;
}
add_filter( 'user_has_cap', 'wpcomsh_prevent_owner_removal', 10, 3 );

/**
 * Remove theme delete button
 *
 * @param array $prepared_themes Prepared themes
 *
 * @return array
 */
function wpcomsh_remove_theme_delete_button( $prepared_themes ) {

	foreach ( $prepared_themes as $theme_slug => $theme_data ) {
		if ( wpcomsh_is_wpcom_theme( $theme_slug ) || wpcomsh_is_symlinked_storefront_theme( $theme_slug ) ) {
			$prepared_themes[ $theme_slug ]['actions']['delete'] = '';
		}
	}

	return $prepared_themes;
}
add_filter( 'wp_prepare_themes_for_js', 'wpcomsh_remove_theme_delete_button' );


/**
 * Jetpack wpcom theme skip download
 *
 * @param mixed $result Result
 * @param mixed $theme_slug Theme slug
 *
 * @return bool
 */
function wpcomsh_jetpack_wpcom_theme_skip_download( $result, $theme_slug ) { //phpcs:ignore

	$theme_type = wpcomsh_get_wpcom_theme_type( $theme_slug );

	// If we are dealing with a non WPCom theme, don't interfere.
	if ( ! $theme_type ) {
		return false;
	}

	if ( wpcomsh_is_theme_symlinked( $theme_slug ) ) {
		error_log( "WPComSH: WPCom theme with slug: {$theme_slug} is already installed/symlinked." ); //phpcs:ignore

		return new WP_Error(
			'wpcom_theme_already_installed',
			'The WPCom theme is already installed/symlinked.'
		);
	}

	$was_theme_symlinked = wpcomsh_symlink_theme( $theme_slug, $theme_type );

	if ( is_wp_error( $was_theme_symlinked ) ) {
		return $was_theme_symlinked;
	}

	wpcomsh_delete_theme_cache( $theme_slug );

	// Skip the theme installation as we've "installed" (symlinked) it manually above.
	add_filter(
		'jetpack_wpcom_theme_install',
		function() use ( $was_theme_symlinked ) {
			return $was_theme_symlinked;
		},
		10,
		2
	);

	// If the installed WPCom theme is a child theme, we need to symlink its parent theme
	// as well.
	if (
		wpcomsh_is_wpcom_child_theme( $theme_slug ) &&
		! wpcomsh_is_theme_symlinked( wp_get_theme( $theme_slug )->get_template() )
	) {
		$was_parent_theme_symlinked = wpcomsh_symlink_parent_theme( $theme_slug );

		if ( ! $was_parent_theme_symlinked ) {
			return new WP_Error(
				'wpcom_theme_installation_failed',
				"Can't install specified WPCom theme. Check error log for more details."
			);
		}
	}

	return true;
}

/**
 * Jetpack wpcom theme delete
 *
 * @param mixed $result Result
 * @param mixed $theme_slug Theme slug
 *
 * @return bool
 */
function wpcomsh_jetpack_wpcom_theme_delete( $result, $theme_slug ) { //phpcs:ignore
	if (
		! wpcomsh_is_wpcom_theme( $theme_slug ) ||
		! wpcomsh_is_theme_symlinked( $theme_slug )
	) {
		return false;
	}

	$theme = wp_get_theme( $theme_slug );
	if ( ! $theme->exists() ) {
		return false;
	}

	$num_child_themes = wpcomsh_count_child_themes( $theme->get_stylesheet() );
	if ( $num_child_themes > 0 ) {
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions
		error_log( 'WPComSH: Cannot remove parent theme. It still has installed child themes.' );
		return false;
	}

	$is_child_theme = wpcomsh_is_wpcom_child_theme( $theme_slug );

	// Remember how many child themes there are before we delete this one.
	// That way, we have the same count later, whether the previous themes list was cached or not.
	$num_themes_with_same_parent = 0;
	if ( $is_child_theme ) {
		$num_themes_with_same_parent = wpcomsh_count_child_themes( $theme->get_template() );
	}

	$was_theme_unsymlinked = wpcomsh_delete_symlinked_theme( $theme_slug );
	if ( is_wp_error( $was_theme_unsymlinked ) ) {
		return $was_theme_unsymlinked;
	}

	// If the theme was an only child, we need to unsymlink the parent theme as well.
	if ( $is_child_theme && $num_themes_with_same_parent === 1 ) {
		$parent_theme = $theme->get_template();
		if ( wpcomsh_is_wpcom_theme( $parent_theme ) ) {
			// phpcs:ignore WordPress.PHP.DevelopmentFunctions
			error_log( 'WPComSH: Unsymlinking parent theme.' );
			// Ignore result because the child theme is already removed,
			// and any problem should be logged by the deletion function.
			wpcomsh_delete_symlinked_theme( $parent_theme );
		}
	}

	return true;
}

/**
 * Filter attachment URLs if the 'wpcom_attachment_subdomain' option is present.
 * Local image files will be unaffected, as they will pass a file_exists check.
 * Files stored remotely will be filtered to have the correct URL.
 *
 * Once the files have been transferred, the 'wpcom_attachment_subdomain' will
 * be removed, preventing further stats.
 *
 * @param string $url The attachment URL
 * @param int    $post_id The post id
 * @return string The filtered attachment URL
 */
function wpcomsh_get_attachment_url( $url, $post_id ) {
	$attachment_subdomain = get_option( 'wpcom_attachment_subdomain' );
	if ( $attachment_subdomain ) {
		if ( $file = get_post_meta( $post_id, '_wp_attached_file', true ) ) { //phpcs:ignore
			$local_file = WP_CONTENT_DIR . '/uploads/' . $file;
			if ( ! file_exists( $local_file ) ) {
				return esc_url( 'https://' . $attachment_subdomain . '/' . $file );
			}
		}
	}
	return $url;
}
add_filter( 'wp_get_attachment_url', 'wpcomsh_get_attachment_url', 11, 2 );
/**
 * When WordPress.com passes along an expiration for auth cookies and it is smaller
 * than the value set by Jetpack by default (YEAR_IN_SECONDS), use the smaller
 * value.
 *
 * @param int $seconds The cookie expiration in seconds
 * @return int The filtered cookie expiration in seconds
 */
function wpcomsh_jetpack_sso_auth_cookie_expiration( $seconds ) {
	if ( isset( $_GET['expires'] ) ) { //phpcs:ignore
		$expires = absint( $_GET['expires'] ); //phpcs:ignore

		if ( ! empty( $expires ) && $expires < $seconds ) {
			$seconds = $expires;
		}
	}
	return intval( $seconds );
}
add_filter( 'jetpack_sso_auth_cookie_expiration', 'wpcomsh_jetpack_sso_auth_cookie_expiration' );

/**
 * If a user is logged in to WordPress.com, log him in automatically to wp-login
 */
add_filter( 'jetpack_sso_bypass_login_forward_wpcom', '__return_true' );

/**
 * When a request is made to Jetpack Themes API, we need to distinguish between a WP.com theme
 * and a WP.org theme in the response. This function adds/modifies the `theme_uri` field of a theme
 * changing it to `https://wordpress.com/theme/{$theme_slug}` if a theme is a WP.com one.
 *
 * @param array $formatted_theme Array containing the Jetpack Themes API data to be sent to wpcom
 *
 * @return array The original or modified theme info array
 */
function wpcomsh_add_wpcom_suffix_to_theme_endpoint_response( $formatted_theme ) {
	if ( ! array_key_exists( 'id', $formatted_theme ) ) {
		return $formatted_theme;
	}

	$theme_slug    = $formatted_theme['id'];
	$is_storefront = 'storefront' === $theme_slug;

	if ( wpcomsh_is_theme_symlinked( $theme_slug ) && ! $is_storefront ) {
		$formatted_theme['theme_uri'] = "https://wordpress.com/theme/{$theme_slug}";
	}

	return $formatted_theme;
}
add_filter( 'jetpack_format_theme_details', 'wpcomsh_add_wpcom_suffix_to_theme_endpoint_response' );

/**
 * Returns the value for the `at_wpcom_premium_theme` option, which
 * makes sure a stylesheet is returned only if the current theme has been
 * symlinked and is a WPCOM premium theme.
 *
 * @return string The wpcom premium theme stylesheet
 */
function wpcomsh_handle_atomic_premium_theme_option() {
	$stylesheet = wp_get_theme()->get_stylesheet();
	if ( wpcomsh_is_theme_symlinked( $stylesheet )
		&& wpcomsh_is_wpcom_premium_theme( $stylesheet ) ) {
			return sprintf( 'premium/%s', $stylesheet );
	}

	return false;
}
add_filter( 'pre_option_at_wpcom_premium_theme', 'wpcomsh_handle_atomic_premium_theme_option' );

/**
 * Disable bulk plugin deactivation
 *
 * @param array $actions The actions
 *
 * @return array
 */
function wpcomsh_disable_bulk_plugin_deactivation( $actions ) {
	if ( array_key_exists( 'deactivate-selected', $actions ) ) {
		unset( $actions['deactivate-selected'] );
	}

	return $actions;
}
add_filter( 'bulk_actions-plugins', 'wpcomsh_disable_bulk_plugin_deactivation' );

/**
 * Admin enqueue style
 */
function wpcomsh_admin_enqueue_style() {
	wp_enqueue_style(
		'wpcomsh-admin-style',
		plugins_url( 'assets/admin-style.css', __FILE__ ),
		null,
		WPCOMSH_VERSION
	);
}
add_action( 'admin_enqueue_scripts', 'wpcomsh_admin_enqueue_style', 999 );

/**
 * Allow custom wp options
 *
 * @param araay $options The options
 *
 * @return array
 */
function wpcomsh_allow_custom_wp_options( $options ) {
	// For storing AT options.
	$options[] = 'at_options';
	$options[] = 'at_options_logging_on';
	$options[] = 'at_wpcom_premium_theme';
	$options[] = 'jetpack_fonts';
	$options[] = 'site_logo';
	$options[] = 'footercredit';

	return $options;
}
add_filter( 'jetpack_options_whitelist', 'wpcomsh_allow_custom_wp_options' );

add_filter( 'jetpack_site_automated_transfer', '__return_true' );

/**
 * Check site has pending automated transfer
 *
 * @return bool
 */
function check_site_has_pending_automated_transfer() {
	return get_option( 'has_pending_automated_transfer' );
}

add_filter( 'jetpack_site_pending_automated_transfer', 'check_site_has_pending_automated_transfer' );

/**
 * Load a WordPress.com theme compat file, if it exists.
 */
function wpcomsh_load_theme_compat_file() {
	if ( ( ! defined( 'WP_INSTALLING' ) || 'wp-activate.php' === $GLOBALS['pagenow'] ) ) {
		// Many wpcom.php files call $themecolors directly. Ease the pain.
		global $themecolors;

		$template_path   = get_template_directory();
		$stylesheet_path = get_stylesheet_directory();
		$file            = '/inc/wpcom.php';

		// Look also in /includes as alternate location, since premium theme partners may use that convention.
		if ( ! file_exists( $template_path . $file ) && ! file_exists( $stylesheet_path . $file ) ) {
			$file = '/includes/wpcom.php';
		}

		// Include 'em. Child themes first, just like core.
		if ( $template_path !== $stylesheet_path && file_exists( $stylesheet_path . $file ) ) {
			include_once $stylesheet_path . $file;
		}

		if ( file_exists( $template_path . $file ) ) {
			include_once $template_path . $file;
		}
	}
}

// Hook early so that after_setup_theme can still be used at default priority.
add_action( 'after_setup_theme', 'wpcomsh_load_theme_compat_file', 0 );

/**
 * Filter plugins_url for when __FILE__ is outside of WP_CONTENT_DIR
 *
 * @param string $url    The complete URL to the plugins directory including scheme and path.
 * @param string $path   Path relative to the URL to the plugins directory. Blank string
 *                       if no path is specified.
 * @param string $plugin The plugin file path to be relative to. Blank string if no plugin
 *                       is specified.
 * @return string Filtered URL.
 */
function wpcomsh_symlinked_plugins_url( $url, $path, $plugin ) { //phpcs:ignore
	$url = preg_replace(
		'#((?<!/)/[^/]+)*/wp-content/plugins/wordpress/plugins/wpcomsh/([^/]+)/#',
		'/wp-content/mu-plugins/wpcomsh/',
		$url
	);

	if ( 'woocommerce-product-addons.php' === $plugin || 'woocommerce-gateway-stripe.php' === $plugin ) {
		$url = home_url( '/wp-content/plugins/' . basename( $plugin, '.php' ) );
	}

	return $url;
}
add_filter( 'plugins_url', 'wpcomsh_symlinked_plugins_url', 0, 3 );

/**
 * Require library helper function
 *
 * @param mixed $slug Slug of library
 */
function require_lib( $slug ) {
	if ( ! preg_match( '|^[a-z0-9/_.-]+$|i', $slug ) ) {
		return;
	}

	// these are whitelisted libraries that Jetpack has
	$in_jetpack = array(
		'tonesque',
		'class.color',
	);

	// hand off to `jetpack_require_lib`, if possible.
	if ( in_array( $slug, $in_jetpack ) && function_exists( 'jetpack_require_lib' ) ) { //phpcs:ignore
		return jetpack_require_lib( $slug );
	}

	$basename = basename( $slug );

	$lib_dir = __DIR__ . '/lib';

	/**
	 * Filter the location of the library directory.
	 *
	 * @since 2.5.0
	 *
	 * @param str $lib_dir Path to the library directory.
	 */
	$lib_dir = apply_filters( 'require_lib_dir', $lib_dir );

	$choices = array(
		"$lib_dir/$slug.php",
		"$lib_dir/$slug/0-load.php",
		"$lib_dir/$slug/$basename.php",
	);
	foreach ( $choices as $file_name ) {
		if ( is_readable( $file_name ) ) {
			require_once $file_name;
			return;
		}
	}
}

/**
 * Provides a fallback Google Maps API key when otherwise not configured by the
 * user. This is subject to a usage quota.
 *
 * @see https://a8cio.wordpress.com/2016/06/24/google-requiring-api-key-for-all-maps-products/
 *
 * @param string $api_key Google Maps API key
 * @return string Google Maps API key
 */
function wpcomsh_google_maps_api_key( $api_key ) {
	// Fall back to the dotcom API key if the user has not set their own.
	return ( empty( $api_key ) ) ? 'AIzaSyCq4vWNv6eCGe2uvhPRGWQlv80IQp8dwTE' : $api_key;
}
add_filter( 'jetpack_google_maps_api_key', 'wpcomsh_google_maps_api_key' );

/**
 * Links were removed in 3.5 core, but we've kept them active on dotcom.
 * This will expose both the Links section, and the widget.
 */
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

/**
 * We have some instances where `track_number` of an audio attachment is `??0` and shows up as type string.
 * However the problem is, that if post has nested property attachments with this track_number, `json_serialize` fails silently.
 * Of course, this should be fixed during audio upload, but we need this fix until we can clean this up properly.
 * More detail here: https://github.com/Automattic/automated-transfer/issues/235
 *
 * @param array $exif_data The file exif data
 *
 * @return array
 */
function wpcomsh_jetpack_api_fix_unserializable_track_number( $exif_data ) {
	if ( isset( $exif_data['track_number'] ) ) {
		$exif_data['track_number'] = intval( $exif_data['track_number'] );
	}
	return $exif_data;
}
add_filter( 'wp_get_attachment_metadata', 'wpcomsh_jetpack_api_fix_unserializable_track_number' );

// Jetpack for Atomic sites are always production version
add_filter( 'jetpack_development_version', '__return_false' );

// Remove WordPress 5.2+ Site Health Tests that are not a good fit for Atomic
add_filter( 'site_status_tests', 'wpcomsh_site_status_tests_disable' );

/**
 * The site status tests disable
 *
 * @param mixed $tests The tests
 *
 * @return [type]
 */
function wpcomsh_site_status_tests_disable( $tests ) {
	unset( $tests['direct']['plugin_version'] );
	unset( $tests['direct']['theme_version'] );
	return $tests;
}

/**
 * Make User Agent consistent with the rest of WordPress.com.
 *
 * @param mixed $agent The agent
 */
function wpcomsh_filter_outgoing_user_agent( $agent ) {
	global $wp_version;

	return str_replace( "WordPress/$wp_version", 'WordPress.com', $agent );
}
add_filter( 'http_headers_useragent', 'wpcomsh_filter_outgoing_user_agent', 999 );

/**
 * Limit post revisions
 *
 * @param mixed $revisions The revisions
 *
 * @return [type]
 */
function wpcomsh_limit_post_revisions( $revisions ) { //phpcs:ignore
	return 100;
}
add_filter( 'wp_revisions_to_keep', 'wpcomsh_limit_post_revisions', 5 );


/**
 * The log wp_die() calls
 *
 * @param mixed $message The message
 * @param mixed $title The title
 * @param mixed $args The arguments
 *
 * @return void
 */
function wpcomsh_wp_die_handler( $message, $title, $args ) {
	$e = new Exception( 'wp_die was called' );
	error_log( $e ); //phpcs:ignore

	if ( function_exists( '_default_wp_die_handler' ) ) {
		_default_wp_die_handler( $message, $title, $args );
		return;
	}
	// if the default wp_die handler is not available just die.
	die();
}

/**
 * Get wp die handler
 */
function wpcomsh_get_wp_die_handler() {
	return 'wpcomsh_wp_die_handler';
}
// Disabling the die handler per p9F6qB-3TQ-p2
// add_filter( 'wp_die_handler', 'wpcomsh_get_wp_die_handler' );

/**
 * WordPress 5.3 adds "big image" processing, for images over 2560px (by default).
 * This is not needed on Atomic since we use Photon for dynamic image work.
 */
add_filter( 'big_image_size_threshold', '__return_false' );

/**
 * WordPress 5.3 adds periodic admin email verification, disable it for WordPress.com on Atomic
 */
add_filter( 'admin_email_check_interval', '__return_zero' );

/**
 * Allow redirects to WordPress.com from Customizer.
 *
 * @param array $hosts The hosts
 */
function wpcomsh_allowed_redirect_hosts( $hosts ) {
	if ( is_array( $hosts ) ) {
		$hosts[] = 'wordpress.com';
		$hosts[] = 'calypso.localhost';
		$hosts   = array_unique( $hosts );
	}
	return $hosts;
}
add_filter( 'allowed_redirect_hosts', 'wpcomsh_allowed_redirect_hosts', 11 );

/**
 * WP.com make clickable
 *
 * Converts all plain-text HTTP URLs in post_content to links on display
 *
 * @param array $content The content
 *
 * @uses make_clickable()
 * @since 20121125
 */
function wpcomsh_make_content_clickable( $content ) {
	// make_clickable() is expensive, check if plain-text URLs exist before running it
	// don't look inside HTML tags
	// don't look in <a></a>, <pre></pre>, <script></script> and <style></style>
	// use <div class="skip-make-clickable"> in support docs where linkifying
	// breaks shortcodes, etc.
	$_split = preg_split( '/(<[^<>]+>)/i', $content, -1, PREG_SPLIT_DELIM_CAPTURE );
	$end    = $out = $combine = ''; //phpcs:ignore
	$split  = array();

	// filter the array and combine <a></a>, <pre></pre>, <script></script> and <style></style> into one
	// (none of these tags can be nested so when we see the opening tag, we grab everything untill we reach the closing tag)
	foreach ( $_split as $chunk ) {
		if ( $chunk === '' ) {
			continue;
		}

		if ( $end ) {
			$combine .= $chunk;

			if ( $end == strtolower( str_replace( array( "\t", ' ', "\r", "\n" ), '', $chunk ) ) ) { //phpcs:ignore
				$split[] = $combine;
				$end     = $combine = ''; //phpcs:ignore
			}
			continue;
		}

		if ( strpos( strtolower( $chunk ), '<a ' ) === 0 ) {
			$combine .= $chunk;
			$end      = '</a>';
		} elseif ( strpos( strtolower( $chunk ), '<pre' ) === 0 ) {
			$combine .= $chunk;
			$end      = '</pre>';
		} elseif ( strpos( strtolower( $chunk ), '<style' ) === 0 ) {
			$combine .= $chunk;
			$end      = '</style>';
		} elseif ( strpos( strtolower( $chunk ), '<script' ) === 0 ) {
			$combine .= $chunk;
			$end      = '</script>';
		} elseif ( strpos( strtolower( $chunk ), '<div class="skip-make-clickable' ) === 0 ) {
			$combine .= $chunk;
			$end      = '</div>';
		} elseif ( strpos( strtolower( $chunk ), '<textarea' ) === 0 ) {
			$combine .= $chunk;
			$end      = '</textarea>';
		} else {
			$split[] = $chunk;
		}
	}

	foreach ( $split as $chunk ) {
		// if $chunk is white space or a tag (or a combined tag), add it and continue
		if ( preg_match( '/^\s+$/', $chunk ) || ( $chunk[0] == '<' && $chunk[ strlen( $chunk ) - 1 ] == '>' ) ) { //phpcs:ignore
			$out .= $chunk;
			continue;
		}

		// three strpos() are faster than one preg_match() here. If we need to check for more protocols, preg_match() would probably be better
		if ( strpos( $chunk, 'http://' ) !== false || strpos( $chunk, 'https://' ) !== false || strpos( $chunk, 'www.' ) !== false ) {
			// looks like there is a plain-text url
			$out .= make_clickable( $chunk );
		} else {
			$out .= $chunk;
		}
	}

	return $out;
}

add_filter( 'the_content', 'wpcomsh_make_content_clickable', 120 );
add_filter( 'the_excerpt', 'wpcomsh_make_content_clickable', 120 );

/**
 * Hide scan threats from transients
 *
 * @param mixed $response The response
 *
 * @return mixed
 */
function wpcomsh_hide_scan_threats_from_transients( $response ) {
	if ( ! empty( $response->threats ) ) {
		$response->threats = array();
	}
	return $response;
}
add_filter( 'transient_jetpack_scan_state', 'wpcomsh_hide_scan_threats_from_transients' );

/**
 * Hide scan threats from api
 *
 * @param mixed $response The reponse
 *
 * @return mixed
 */
function wpcom_hide_scan_threats_from_api( $response ) {
	if (
		! ( $response instanceof WP_REST_Response )
		|| $response->get_matched_route() !== '/jetpack/v4/scan'
	) {
		return $response;
	}
	$response_data = $response->get_data();
	if ( empty( $response_data['data'] ) || ! is_string( $response_data['data'] ) ) {
		return $response;
	}

	$json_body = json_decode( $response_data['data'], true );
	if ( null === $json_body || empty( $json_body['threats'] ) ) {
		return $response;
	}

	$json_body['threats']  = array();
	$response_data['data'] = json_encode( $json_body ); //phpcs:ignore
	$response->set_data( $response_data );

	return $response;
}
add_filter( 'rest_post_dispatch', 'wpcom_hide_scan_threats_from_api' );

/**
 * Collect RUM performance data
 * https://atomicp2.wordpress.com/2020/07/20/wordpress-com-on-atomic-request-rum/
 */
function wpcomsh_footer_rum_js() {
	$service      = 'atomic';
	$allow_iframe = '';
	if ( 'admin_footer' === current_action() ) {
		global $pagenow;

		$service = 'atomic-wpadmin';

		if ( method_exists( 'Jetpack_WPCOM_Block_Editor', 'init' ) ) {
			$block_editor = Jetpack_WPCOM_Block_Editor::init();
			if ( $block_editor->is_iframed_block_editor() ) {
				$service      = 'atomic-gutenframe';
				$allow_iframe = 'data-allow-iframe="true"';
			}
		}
	}

	echo "<script defer id='bilmur' data-provider='wordpress.com' data-service='" . esc_attr( $service ) . "' " . $allow_iframe . " src='https://s0.wp.com/wp-content/js/bilmur.min.js?m=" . gmdate( 'YW' ) . "'></script>\n"; //phpcs:ignore
}
add_action( 'wp_footer', 'wpcomsh_footer_rum_js' );
add_action( 'admin_footer', 'wpcomsh_footer_rum_js' );

/**
 * Upgrade transferred db
 *
 * @return void
 */
function wpcomsh_upgrade_transferred_db() {
	global $wp_db_version;

	if ( isset( $_SERVER['ATOMIC_SITE_ID'] ) ) {
		$atomic_site_id = $_SERVER['ATOMIC_SITE_ID']; //phpcs:ignore
	} elseif ( defined( 'ATOMIC_SITE_ID' ) ) {
		$atomic_site_id = ATOMIC_SITE_ID;
	}

	if (
		empty( $atomic_site_id ) ||
		$atomic_site_id <= 149474462 /* last site ID before WP 5.5 update */
	) {
		// We only want to run for real sites created after the WordPress 5.5 update
		return;
	}

	// Value taken from:
	// https://github.com/WordPress/wordpress-develop/blob/b591209e141e0357a69fff1d01d2650ac2d916cb/src/wp-includes/version.php#L23
	$db_version_5_5 = 48748;

	if ( $wp_db_version < $db_version_5_5 ) {
		// WordPress isn't yet at the version for upgrade
		return;
	}

	if ( get_option( 'wpcomsh_upgraded_db' ) ) {
		// We only ever want to upgrade the DB once per transferred site.
		// After that, the platform should take care of upgrades as WordPress is updated.
		return;
	}

	// Log the upgrade immediately because we do not want to re-attempt upgrade
	// and bring down a site if there are persistent errors
	update_option( 'wpcomsh_upgraded_db', 1 );

	// We have to be in installation mode to work with options deprecated in WP 5.5
	// Otherwise all gets and updates are directed to the new option names.
	wp_installing( true );

	// Logic derived from:
	// https://github.com/WordPress/wordpress-develop/blob/b591209e141e0357a69fff1d01d2650ac2d916cb/src/wp-admin/includes/upgrade.php#L2176
	if (
		false !== get_option( 'comment_whitelist' ) &&
		// default value from: https://github.com/WordPress/wordpress-develop/blob/f0733600c9b8a0833d7e63f60fae651d46f22320/src/wp-admin/includes/schema.php#L536
		in_array( get_option( 'comment_previously_approved' ), array( false, 1 /* default value */ ) ) //phpcs:ignore
	) {
		$comment_previously_approved = get_option( 'comment_whitelist', '' );
		update_option( 'comment_previously_approved', $comment_previously_approved );
		delete_option( 'comment_whitelist' );
	}

	// Logic derived from:
	// https://github.com/WordPress/wordpress-develop/blob/b591209e141e0357a69fff1d01d2650ac2d916cb/src/wp-admin/includes/upgrade.php#L2182
	if (
		false !== get_option( 'blacklist_keys' ) &&
		// default value from https://github.com/WordPress/wordpress-develop/blob/f0733600c9b8a0833d7e63f60fae651d46f22320/src/wp-admin/includes/schema.php#L535
		in_array( get_option( 'disallowed_keys' ), array( false, '' /* default value */ ) ) //phpcs:ignore
	) {
		// Use more clear and inclusive language.
		$disallowed_list = get_option( 'blacklist_keys' );

		/*
		 * This option key was briefly renamed `blocklist_keys`.
		 * Account for sites that have this key present when the original key does not exist.
		 */
		if ( false === $disallowed_list ) {
			$disallowed_list = get_option( 'blocklist_keys' );
		}

		update_option( 'disallowed_keys', $disallowed_list );
		delete_option( 'blacklist_keys' );
		delete_option( 'blocklist_keys' );
	}

	// We're done updating deprecated options
	wp_installing( false );

	// Logic derived from:
	// https://github.com/WordPress/wordpress-develop/blob/b591209e141e0357a69fff1d01d2650ac2d916cb/src/wp-admin/includes/upgrade.php#L2199
	// Make sure that comment_type update is attempted
	if (
		! get_option( 'finished_updating_comment_type' ) &&
		false === wp_next_scheduled( 'wp_update_comment_type_batch' )
	) {
		update_option( 'finished_updating_comment_type', 0 );
		wp_schedule_single_event( time() + ( 1 * MINUTE_IN_SECONDS ), 'wp_update_comment_type_batch' );
	}

	// We need to be in installation mode to get actual, saved DB version
	wp_installing( true );
	$current_db_version = get_option( 'db_version' );
	wp_installing( false );

	// Update DB version to avoid applying core upgrade logic which may be destructive
	// to things like the new `comment_previously_approved` option.
	// https://github.com/WordPress/wordpress-develop/blob/b591209e141e0357a69fff1d01d2650ac2d916cb/src/wp-admin/includes/upgrade.php#L2178
	if ( $current_db_version < $db_version_5_5 ) {
		update_option( 'db_version', $db_version_5_5 );

		// Preserve previous version for troubleshooting
		update_option( 'wpcom_db_version_before_upgrade', $current_db_version, false /* do not autoload */ );
	}
}
add_action( 'muplugins_loaded', 'wpcomsh_upgrade_transferred_db' );


add_filter( 'amp_dev_tools_user_default_enabled', '__return_false' );

// Disable the Widgets Block Editor screen feature
// See https://code.a8c.com/D48850
// See https://github.com/WordPress/gutenberg/pull/24843
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

/**
 * Tracks helper. Filters Jetpack TOS option if class exists.
 *
 * @param mixed $event The event
 * @param mixed $event_properties The event property
 *
 * @return void
 */
function wpcomsh_record_tracks_event( $event, $event_properties ) {
	if ( class_exists( '\Automattic\Jetpack\Tracking' ) ) {
		// User has to agree to ToS for tracking. Thing is, on initial Simple -> Atomic we never set the ToS option.
		// And since they agreed to WP.com ToS, we can track but in a roundabout way. :)
		add_filter( 'jetpack_options', 'wpcomsh_jetpack_filter_tos_for_tracking', 10, 2 );

		$jetpack_tracks = new \Automattic\Jetpack\Tracking( 'atomic' );
		$jetpack_tracks->tracks_record_event(
			wp_get_current_user(),
			$event,
			$event_properties
		);

		remove_filter( 'jetpack_options', 'wpcomsh_jetpack_filter_tos_for_tracking', 10 );
	}
}

/**
 * Helper for filtering tos_agreed for tracking purposes.
 * Explicit function so it can be removed afterwards.
 *
 * @param mixed $value The value
 * @param mixed $name Name
 *
 * @return mixed
 */
function wpcomsh_jetpack_filter_tos_for_tracking( $value, $name ) {
	if ( 'tos_agreed' === $name ) {
		return true;
	}

	return $value;
}

/**
 * Disable the Conversation and Dialogue blocks.
 * See: https://managep2.wordpress.com/2021/02/15/anchor-conversation-block-launch-or-not/
 */
add_filter(
	'jetpack_set_available_extensions',
	function ( $extensions ) {
		return array_diff(
			$extensions,
			array(
				'conversation',
				'dialogue',
			)
		);
	}
);

if ( wpcomsh_is_managed_plugin( 'gutenberg/gutenberg.php' ) ) {
	/*
	* Disables a Yoast notification that displays when an outdated version of the Gutenberg plugin is installed.
	*/
	add_filter( 'yoast_display_gutenberg_compat_notification', '__return_false' );
}

/**
 * Avoid proxied v2 banner
 *
 * @return void
 */
function wpcomsh_avoid_proxied_v2_banner() {
	$priority = has_action( 'wp_footer', 'atomic_proxy_bar' );
	if ( false !== $priority ) {
		remove_action( 'wp_footer', 'atomic_proxy_bar', $priority );
	}

	$priority = has_action( 'admin_footer', 'atomic_proxy_bar' );
	if ( false !== $priority ) {
		remove_action( 'admin_footer', 'atomic_proxy_bar', $priority );
	}
}

// We don't want to show a "PROXIED V2" banner for legacy widget previews
// which are normally embedded within another page
if (
	defined( 'AT_PROXIED_REQUEST' ) && AT_PROXIED_REQUEST &&
	isset( $_GET['legacy-widget-preview'] ) && //phpcs:ignore
	0 === strncmp( $_SERVER['REQUEST_URI'], '/wp-admin/widgets.php?', strlen( '/wp-admin/widgets.php?' ) ) ) { //phpcs:ignore
	add_action( 'plugins_loaded', 'wpcomsh_avoid_proxied_v2_banner' );
}
