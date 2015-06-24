<?php

// add late, see if we need to shim in rules
add_action( 'jetpack_fonts_rules', 'wpcom_font_rules_compat', 20 );
function wpcom_font_rules_compat( $rules ) {
	if ( $rules->has_rules() ) {
		return;
	}

	// first, load 'em up
	$annotations_base = apply_filters( 'wpcom_font_rules_location_base', WPMU_PLUGIN_DIR . '/custom-fonts/theme-annotations' );
	$annotations_file = trailingslashit( $annotations_base ) . get_stylesheet() . '.php';
	if ( file_exists( $annotations_file ) ) {
		require_once __DIR__ . '/typekit-theme-mock.php';
		include_once $annotations_file;
		TypekitTheme::$rules_dependency = $rules;
		apply_filters( 'typekit_add_font_category_rules', array() );
	}
}

add_action( 'jetpack_fonts_save', 'wpcom_jetpack_fonts_save' );
function wpcom_jetpack_fonts_save() {
	// invalidate any saved Typekit fonts at this point
	$typekit_data = (array) get_option( 'typekit_data', array( 'families' => null ) );
	if ( isset( $typekit_data['families'] ) && $typekit_data['families'] ) {
		$typekit_data['families'] = null;
		update_option( 'typekit_data', $typekit_data );
	}
}

add_filter( 'jetpack_fonts_selected_fonts', 'wpcom_legacy_fonts' );
// Convert typekit font settings from old plugin to new plugin
function wpcom_legacy_fonts( $fonts ) {
	$typekit_data = (array) get_option( 'typekit_data', array( 'families' => null ) );

	if ( ! isset( $typekit_data['families'] ) || ! $typekit_data[ 'families'] ) {
		return $fonts;
	}

	// If we're filtering in, we can assume there's nothing in the real option
	// Saving will delete the old option and only use our new one
	$families = array();

	foreach ( $typekit_data[ 'families'] as $type => $legacy_font ) {
		if ( ! $legacy_font['id'] ) {
			continue;
		}
		$font_data = wpcom_get_font_data( $legacy_font['id'] );
		$font_data['type'] = $type;

		if ( isset( $legacy_font['size'] ) && $legacy_font['size'] !== 0 ) {
			$font_data['size'] = $legacy_font['size'];
		}

		if ( isset( $legacy_font['css_names'] ) && is_array( $legacy_font['css_names'] ) ) {
			$font_data['cssName'] = '"' . implode( '","', $legacy_font['css_names'] ) . '"';
		}

		// body-text won't have an fvd and can keep the above default.
		if ( isset( $legacy_font['fvd'] ) && $legacy_font['fvd'] ) {
			$font_data['currentFvd'] = $legacy_font['fvd'];
		}

		$families[] = $font_data;
	}

	return $families;
}

function wpcom_get_font_data( $font_id ) {
	$font_data = Jetpack_Fonts::get_instance()->get_all_fonts();
	$filtered = wp_list_filter( $font_data, array(
		'id' => $font_id,
		'provider' => 'typekit'
	) );
	if ( ! empty( $filtered ) ) {
		return array_shift( $filtered );
	}
	return false;
}

// make sure the customizer gets the filtered version too
add_filter( 'customize_sanitize_js_' . Jetpack_Fonts::OPTION . '[selected_fonts]', array( Jetpack_Fonts::get_instance(), 'get_fonts' ) );

// https://mc.a8c.com/s/typekit_data/
// offers a view into how the typekit plugin is being used and how the options field is being updated
function wpcom_typekit_data_stat( $old, $new ) {
	// Creating a kit id = saving fonts in standard mode for the first time.
	if ( null == $old['kit_id'] && ( $new['kit_id'] != $old['kit_id'] ) ) {
		bump_stats_extras( 'typekit_data', 'kit_id_added' );
	}

	// Deleting a kit id happens when the Custom Design upgrade is deactivated.
	// TODO: kits are never deleted
	if ( ! empty( $old['kit_id'] ) && null == $new['kit_id'] ) {
		bump_stats_extras( 'typekit_data', 'kit_id_deleted' );
	}

	// Previewing fonts by saving them without purchasing the upgrade.
	if ( ! CustomDesign::is_upgrade_active() && ( $new['selected_fonts'] != $old['selected_fonts'] ) ) {
		bump_stats_extras( 'typekit_data', 'families_preview' );
	}

	// Upgrade is purchased, and saving families for the first time.
	if ( CustomDesign::is_upgrade_active() && null == $old['selected_fonts'] && ( $new['selected_fonts'] != $old['selected_fonts'] ) ) {
		bump_stats_extras( 'typekit_data', 'families_upgraded' );
	}

	// User saved a kit id that they entered manually, in advanced mode.
	// TODO: advanced_mode no longer exists
	if ( null == $old['advanced_kit_id'] && ( $new['advanced_kit_id'] != $old['advanced_kit_id'] ) ) {
		bump_stats_extras( 'typekit_data', 'advanced_kit_id' );
	}

	// User deleted their existing advanced kit id (saved during the Typekit migration).
	// TODO: advanced_mode no longer exists
	if ( true === $old['old_user'] && ! empty( $old['advanced_kit_id'] ) && empty( $new['advanced_kit_id'] ) ) {
		bump_stats_extras( 'typekit_data', 'remove_old_user_kit' );
	}

	// User switched from standard mode to advanced mode.
	// TODO: advanced_mode no longer exists
	if ( false === $old['advanced_mode'] && true === $new['advanced_mode'] ) {
		bump_stats_extras( 'typekit_data', 'advanced_mode_activate' );
	}

	// User switched from advanced mode to standard mode.
	// TODO: advanced_mode no longer exists
	if ( true === $old['advanced_mode'] && false === $new['advanced_mode'] ) {
		bump_stats_extras( 'typekit_data', 'advanced_mode_deactivate' );
	}
}
add_action( 'update_option_jetpack_fonts', 'wpcom_typekit_data_stat', 10, 2 );

// uncomment to test with mocked legacy option data
# include __DIR__ . '/tests/php/legacy-data-mock.php';
