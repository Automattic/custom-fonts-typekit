<?php

/**
 * Private Site
 * Functionality to make sites private and only accessible to members with appropriate capabilities
 */

namespace Private_Site;

function admin_init() {
	// Add the radio option to the wp-admin Site Privacy selector
	add_action( 'blog_privacy_selector', '\Private_Site\privatize_blog_priv_selector' );
}
add_action( 'admin_init', '\Private_Site\admin_init' );

function init() {
	if ( ! site_is_private() ) {
		return;
	}

	// Scrutinize most requests
	add_action( 'parse_request', '\Private_Site\parse_request', 100 );

	// Scrutinize REST API requests
	add_action( 'rest_api_init', '\Private_Site\rest_api_init' );

	// Prevent Pinterest pinning
	add_action( 'wp_head', '\Private_Site\private_no_pinning' );

	// Prevent leaking site information via OPML
	add_action( 'opml_head', '\Private_Site\hide_opml' );

	// Mask the blog name on the login screen etc.
	add_filter( 'bloginfo', '\Private_Site\mask_site_name', 3, 2 );

	// Block incoming comments for non-users
	add_filter( 'preprocess_comment', '\Private_Site\preprocess_comment', 0 );

	// Robots requests are allowed via `should_prevent_site_access`
	add_filter( 'robots_txt', '\Private_Site\private_robots_txt' );

	// @TODO pre_trackback_post maybe..?

	// @TODO add "lock" toolbar item when private

	/** Jetpack-specific hooks **/

	// Prevent Jetpack certain modules from running while the site is private
	add_filter( 'jetpack_active_modules', '\Private_Site\filter_jetpack_active_modules', 0 );

	// Only allow Jetpack XMLRPC methods -- Jetpack handles verifying the token, request signature, etc.
	add_filter( 'xmlrpc_methods', '\Private_Site\xmlrpc_methods_limit_to_jetpack' );

	// Lift the blog name mask prior to Jetpack sync activity
	add_action( 'jetpack_sync_before_send_queue_full_sync', '\Private_Site\remove_mask_site_name_filter' );
	add_action( 'jetpack_sync_before_send_queue_sync', '\Private_Site\remove_mask_site_name_filter' );
}
add_action( 'init', '\Private_Site\init' );

function site_is_private() {
	return '-1' == get_option( 'blog_public' );
}

/**
 * Determine if site access should be blocked for various types of requests.
 * This function is cached for subsequent calls so we can use it gratuitously.
 *
 * @param array $args
 *
 * @return bool
 */
function should_prevent_site_access() {
	global $pagenow, $wp;

	$doing_bloginfo_filter = doing_filter( 'bloginfo' );

	$use_cache = ! $doing_bloginfo_filter;

	static $cached;

	if ( $use_cache && isset( $cached ) ) {
		return $cached;
	}

	if ( ! site_is_private() ) {
		if ( $use_cache ) {
			$cached = false;
		}
		return false;
	}

	if ( 'wp-login.php' === $pagenow && ! $doing_bloginfo_filter ) {
		if ( $use_cache ) {
			$cached = false;
		}
		return false;
	}

	if ( defined( 'WP_CLI' ) && WP_CLI ) {
		if ( $use_cache ) {
			$cached = false;
		}
		return false;
	}

	// Serve robots.txt for private blogs.
	if ( is_object( $wp ) && ! empty( $wp->query_vars['robots'] ) ) {
		if ( $use_cache ) {
			$cached = false;
		}
		return false;
	}

	$to_return = ! is_private_blog_user();
	if ( $use_cache ) {
		$cached = $to_return;
	}
	return $to_return;
}

function parse_request() {
	global $wp;

	if ( ! should_prevent_site_access() ) {
		return;
	}

	status_header( 403 );

	if ( ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ||
		 'admin-ajax.php' === ( $wp->query_vars['pagename'] ?? '' )
	) {
		wp_send_json_error( [ 'code' => 'private_site', 'message' => __( 'This site is private.' ) ] );
	}

	require __DIR__ . '/private-site-template.php';
	exit;
}

function rest_api_init() {
	if ( should_prevent_site_access() ) {
		wp_send_json_error( [ 'code' => 'private_site', 'message' => __( 'This site is private.' ) ] );
	}
}

function xmlrpc_methods_limit_to_jetpack( $methods ) {
	if ( should_prevent_site_access() ) {
		return array_filter( $methods, function ( $key ) {
			return preg_match( '/^jetpack\..+/', $key );
		}, ARRAY_FILTER_USE_KEY );
	}
	return $methods;
}

/**
 * Does not check whether the blog is private. Works on current blog & user.
 * Returns true for super admins.
 *
 * @return bool
 */
function is_private_blog_user() {
	$user = \wp_get_current_user();
	if ( ! $user->ID ) {
		return false;
	}

	$blog_id = \get_current_blog_id();

	// check if the user has read permissions
	$the_user = \wp_clone( $user );
	$the_user->for_site( $blog_id );
	return $the_user->has_cap( 'read'  );
}

/**
 * Replaces the the site's "name" & "title" values with "Private Site"
 * Added to the `bloginfo` filter in our `init` function
 *
 * @param mixed $value The requested non-URL site information.
 * @param mixed $what  Type of information requested.
 * @return string The potentially modified bloginfo value
 */
function mask_site_name( $value, $what ) {
	if ( should_prevent_site_access() && in_array( $what, [ 'name', 'title' ], true ) ) {
		return __( 'Private Site' );
	}

	return $value;
}

/**
 * Remove the mask_site_name filter
 */
function remove_mask_site_name_filter() {
	remove_filter( 'bloginfo', '\Private_Site\mask_site_name' );
}

/**
 * Filters new comments so that users can't comment on private blogs
 *
 * @param array $comment Documented in wp-includes/comment.php.
 */
function preprocess_comment( $comment ) {
	if ( should_prevent_site_access() ) {
		require __DIR__ . '/private-site-template.php';
		exit;
	}
	return $comment;
}

/**
 * Extend the 'Site Visibility' privacy options to also include a private option
 **/
function privatize_blog_priv_selector() {
	?>
<br/><input id="blog-private" type="radio" name="blog_public"
			value="-1" <?php checked( '-1', get_option( 'blog_public' ) ); ?> />
<label for="blog-private"><?php _e( 'I would like my site to be private, visible only to myself and users I choose' ) ?></label>
	<?php
}

/**
 * Don't let search engines index private sites.
 * If the site is not private, do nothing.
 *
 * @param string $output Robots.txt output.
 * @return string the Robots.txt information
 */
function private_robots_txt( $output ) {
	if ( site_is_private() ) {
		// Purposefully overriding current output; we only want these rules.
		return "User-agent: *\nDisallow: /\n";
	}
	return $output;
}

/**
 * Output the meta tag that tells Pinterest not to allow users to pin
 * content from this page.
 * https://support.pinterest.com/entries/21063792-what-if-i-don-t-want-images-from-my-site-to-be-pinned
 */
function private_no_pinning() {
	echo '<meta name="pinterest" content="nopin" />';
}

/**
 * Returns the private page template for OPML.
 */
function hide_opml() {
	if ( should_prevent_site_access() ) {
		status_header( 403 );
?>
		<error><?php esc_html_e( 'This site is private.' ) ?></error>
	</head>
</opml>
<?php
		exit;
	}
}

/**
 * Disables modules for private sites
 *
 * @param array $modules Available modules.
 *
 * @return array Array of modules after filtering.
 */
function filter_jetpack_active_modules( $modules ) {
	$disabled_modules = [
		'publicize',
		'sharedaddy',
		'subscriptions',
		'json-api',
		'enhanced-distribution',
		'google-analytics',
		'photon',
		'sitemaps',
		'verification-tools',
		'wordads',
	];
	foreach ( $disabled_modules as $module_slug ) {
		$found = array_search( $module_slug, $modules, true );
		if ( false !== $found ) {
			unset( $modules[ $found ] );
		}
	}
	return $modules;
}