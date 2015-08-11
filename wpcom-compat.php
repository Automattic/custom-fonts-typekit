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
	if ( ! file_exists( $annotations_file ) && is_child_theme() ) {
		$annotations_file = trailingslashit( $annotations_base ) . get_template() . '.php';
	}
	if ( file_exists( $annotations_file ) ) {
		require_once __DIR__ . '/typekit-theme-mock.php';
		include_once $annotations_file;
		TypekitTheme::$rules_dependency = $rules;
		TypekitTheme::$allowed_categories = $rules->get_allowed_types();
		apply_filters( 'typekit_add_font_category_rules', array() );
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
