<?php


add_action( 'typekit_publish_kit', 'wpcom_log_font_usage', 10, 2 );
/**
 * Log Typekit font usage for internal and tracking and audits
 * Bumps a stat for how many times a font has been switched to
 * Also logs when a blog changes its font, where the font is being used,
 * if the font is currently active, and how long a certain font was used.
 *
 * Adapted from the old Typekit-specific custom-fonts plugin
 *
 * See https://wpcom.trac.automattic.com/ticket/2290
 */
function wpcom_log_font_usage( $kit_id, $fonts ) {
	global $wpdb;
	$blog_id = get_current_blog_id();
	$active_fonts = array();
	$new_fonts = array();

	foreach( $fonts as $font ) {
		$new_fonts[ $font['type'] ] = $font;
	}

	// Get currently active fonts to compare against new fonts being published.
	$actives = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM font_usage_log WHERE blog_id = %d AND currently_active = 1", $blog_id ) );
	foreach( $actives as $active ) {
		$active_fonts[ $active->location ] = $active->font;
	}

	$locations = Jetpack_Fonts::get_instance()->get_generator()->get_rule_types();
	$locations = wp_list_pluck( $locations, 'id' );


	// loop through our font locations to see if 1) there are new ones or 2) there were old ones

	foreach( $locations as $location ) {
		$font_previously_set = isset( $active_fonts[ $location ] );
		$new_font_set = isset( $new_fonts[ $location ] );

		if ( $new_font_set ) {
			$font = $new_fonts[ $location ];
			$short_font_name = trim( array_shift( explode( ',', $font['cssName'] ) ), '"' );

			// first make sure we don't have the same font, no point then
			if ( $font_previously_set && $short_font_name === $active_fonts[ $location ]  ) {
				continue;
			}

			// ok, new font. log it, if typekit.
			// this logic works because old fonts were always typekit
			// and we'll only ever set typekit ones from here on out
			if ( $font['provider'] === 'typekit' ) {
				wpcom_log_new_font( $location, $short_font_name );
			}

			if ( $font_previously_set ) {
				wpcom_mark_font_inactive( $location, $short_font_name );
			}
		} else if ( $font_previously_set ) {
			// here a font was previously set for a location
			// but that location is now empty
			wpcom_mark_font_inactive( $location );
		}
	}
}

function wpcom_log_new_font( $location_name, $font_name ) {
	global $wpdb;
	$kit_id = Jetpack_Fonts::get_instance()->get_provider( 'typekit' )->get_kit_id();

	$wpdb->insert(
		'font_usage_log',
		array(
			'blog_id' => get_current_blog_id(),
			'font' => $font_name,
			'location' => $location_name,
			'activation_date' => gmdate( "Y-m-d H:i:s", time() ),
			'currently_active' => 1,
			'typekit_id' => $kit_id,
		),
		array( '%d', '%s', '%s', '%s', '%d', '%s' )
	);

	// Bump this new font so we can track how popular it is.
	bump_stats_extras( 'typekit-fonts', $font_name );
}

function wpcom_mark_font_inactive( $location_name, $font_name ){
	global $wpdb;
	$kit_id = Jetpack_Fonts::get_instance()->get_provider( 'typekit' )->get_kit_id();

	$wpdb->update(
		'font_usage_log',
		array(
			'deactivation_date' => gmdate( "Y-m-d H:i:s", time() ),
			'currently_active' => 0,
		),
		array(
			'blog_id' => get_current_blog_id(),
			'font' => $font_name,
			'location' => $location_name,
			'deactivation_date' => "0000-00-00 00:00:00",
			'currently_active' => 1,
			'typekit_id' => $kit_id,
		),
		array( '%s', '%d' ),
		array( '%d', '%s', '%s', '%s', '%d', '%s' )
	);

}