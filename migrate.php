<?php

function wpcom_typekit_data_migrate() {
	$typekit_data = (array) get_option( 'typekit_data' );
	$existing = (array) get_option( 'jetpack_fonts' );

	// sanity checks
	if ( isset( $existing['selected_fonts'] ) && ! empty( $existing['selected_fonts'] ) ) {
		// don't overwrite existing ones
		Jetpack_Fonts::get_instance()->set( 'migrated', true );
		bump_stats_extras( 'fonts_data_migration', 'lost-migration-flag' );
		return;
	}

	// moar sanity
	if ( empty( $typekit_data ) ) {
		Jetpack_Fonts::get_instance()->set( 'migrated', true );
		bump_stats_extras( 'fonts_data_migration', 'no-typekit-data' );
	}

	$jetpack_fonts = array(
		'migrated' => true,
		'selected_fonts' => wpcom_typekit_migrate_families( $typekit_data )
	);

	$map = array(
		'advanced_kit_id' => 'typekit_advanced_kit_id',
		'kit_id' => 'typekit_kit_id',
		'set_by_theme' => 'typekit_set_by_theme',
		'advanced_kit_families' => 'typekit_theme_families'
	);

	foreach( $map as $old_key => $new_key ) {
		if ( array_key_exists( $old_key, $typekit_data ) ) {
			$jetpack_fonts[ $new_key ] = $typekit_data[ $old_key ];
		}
	}
	if ( defined( 'REST_API_REQUEST' ) && REST_API_REQUEST ) {
		$type = 'restapi';
	} elseif ( defined( 'WP_CLI' ) && WP_CLI ) {
		$type = 'cli';
	} elseif ( is_admin() ) {
		$type = 'wpadmin';
	} else {
		$type = 'frontend';
	}
	bump_stats_extras( 'fonts_data_migration', $type );
	update_option( 'jetpack_fonts', $jetpack_fonts );
	delete_option( 'typekit_data' );
}

function wpcom_typekit_migrate_families( $typekit_data ) {
	if ( ! isset( $typekit_data['families'] ) || ! $typekit_data[ 'families'] ) {
		return array();
	}

	$families = array();

	foreach ( $typekit_data[ 'families'] as $type => $legacy_font ) {
		if ( ! $legacy_font['id'] ) {
			continue;
		}
		$font_data = wpcom_get_font_data( $legacy_font['id'] );
		if ( ! $font_data ) {
			continue;
		}

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

		$family = array();
		// only keep the stuff we really want. the rest is superfluous
		foreach( array( 'id', 'cssName', 'provider', 'type' ) as $key ) {
			$family[ $key ] = $font_data[ $key ];
		}

		$families[] = $family;
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