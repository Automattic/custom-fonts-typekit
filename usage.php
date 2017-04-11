<?php

add_action( 'jetpack_fonts_save', 'wpcom_record_fonts_events' );
function wpcom_record_fonts_events( $new_fonts ) {
	// this works because the new fonts haven't been saved yet.
	$old_fonts = Jetpack_Fonts::get_instance()->get_fonts();

	// don't record if there's no change
	if ( $old_fonts === $new_fonts ) {
		return;
	}
	$properties = wpcom_fonts_event_props( 'new', $new_fonts );
	$properties = wpcom_fonts_event_props( 'old', $old_fonts, $properties );
	require_lib( 'tracks/client' );

	if ( ! empty( $new_fonts ) ) {
		// we are saving fonts
		if ( ! empty( $old_fonts ) ) {
			tracks_record_event( wp_get_current_user(), 'wpcom_fonts_saved_new', $properties );
		} else {
			tracks_record_event( wp_get_current_user(), 'wpcom_fonts_saved_changed', $properties );
		}
	} else {
		// fonts have been unset
		tracks_record_event( wp_get_current_user(), 'wpcom_fonts_saved_deleted', $properties );
	}
}

function wpcom_fonts_event_props( $key_prefix, $fonts, $properties = array() ) {
	foreach( $fonts as $font ) {
		$font_data = Jetpack_Fonts::get_instance()->get_provider( $font['provider'] )->get_font( $font['id'] );
		if ( ! $font_data ) {
			continue;
		}
		$key =  'font_' . $key_prefix . '_' . str_replace( '-', '_', $font['type'] );
		$value = $font_data['displayName'];
		$properties[ $key ] = $value;
	}
	return $properties;
}

add_action( 'jetpack_fonts_save', 'wpcom_log_font_usage' );
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
function wpcom_log_font_usage( $fonts ) {
	global $wpdb;
	$active_fonts = array();
	$new_fonts = array();

	foreach( $fonts as $font ) {
		$new_fonts[ $font['type'] ] = $font;
	}

	// Get currently active fonts to compare against new fonts being published.
	$actives = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM font_usage_log WHERE blog_id = %d AND currently_active = 1", get_current_blog_id() ) );
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
			$short_font_name = array_shift( explode( ',', $font['cssName'] ) );
			$short_font_name = preg_replace( "/[^a-zA-Z]/", '', $short_font_name );

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
				wpcom_mark_font_inactive( $location, $active_fonts[ $location ] );
			}
		} else if ( $font_previously_set ) {
			// here a font was previously set for a location
			// but that location is now empty
			wpcom_mark_font_inactive( $location, $active_fonts[ $location ] );
		}
	}
}

function wpcom_log_new_font( $location_name, $font_name, $kit_id = false ) {
	global $wpdb;
	if ( ! $kit_id ) {
		$kit_id = Jetpack_Fonts::get_instance()->get_provider( 'typekit' )->get_kit_id();
	}


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
		),
		array( '%s', '%d' ),
		array( '%d', '%s', '%s', '%s', '%d' )
	);
}

add_action( 'custom-design-downgrade', 'wpcom_mark_all_fonts_inactive', 9 );
function wpcom_mark_all_fonts_inactive() {
	global $wpdb;
	$actives = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM font_usage_log WHERE blog_id = %d AND currently_active = 1", get_current_blog_id() ) );

	foreach( $actives as $active ) {
		wpcom_mark_font_inactive( $active->location, $active->font );
	}
}

// https://mc.a8c.com/s/typekit_data/
// offers a view into how the typekit plugin is being used and how the options field is being updated
function wpcom_typekit_data_stat( $old, $new ) {
	// Creating a kit id = saving fonts in standard mode for the first time.
	if ( ! typekit_exists_and_truthy( $old, 'typekit_kit_id' ) &&typekit_exists_and_truthy( $new, 'typekit_kit_id' ) ) {
		bump_stats_extras( 'typekit_data', 'kit_id_added' );
		// Upgrade is purchased, so probably saving families for the first time
		if ( CustomDesign::is_upgrade_active() ) {
			bump_stats_extras( 'typekit_data', 'families_upgraded' );
		}
	}

	// Deleting a kit id happens when the Custom Design upgrade is deactivated.
	if ( typekit_exists_and_truthy( $old, 'typekit_kit_id' ) && ! typekit_exists_and_truthy( $new, 'typekit_kit_id' ) ) {
		bump_stats_extras( 'typekit_data', 'kit_id_deleted' );
	}
}
add_action( 'update_option_jetpack_fonts', 'wpcom_typekit_data_stat', 10, 2 );

function typekit_exists_and_truthy( $array, $key ) {
	return array_key_exists( $key, $array ) && !! $array[ $key ];
}
