<?php
/**
 * Manage the Custom Fonts plugin.
 */
class Typekit_Fonts_Command extends WP_CLI_Command {

	private function provider() {
		return Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
	}

	/**
	 * Republish the currently saved fonts. Useful if something went wrong when publishing
	 * a kit. (Eg API was down)
	 */
	public function republish() {
		$jetpack_fonts = Jetpack_Fonts::get_instance();
		$fonts = $jetpack_fonts->get_fonts();
		$jetpack_fonts->save_fonts( $fonts, true );

		WP_CLI::line( 'Fetching published kit data' );
		$this->kit_data( array(), array() );
	}

	/**
	 * Gets the active Typekit Kit ID, if any.
	 *
	 * @subcommand kit-id
	 */
	public function kit_id() {
		$kit_id = $this->provider()->get_kit_id();
		if ( ! $kit_id ) {
			WP_CLI::error( 'No Kit ID found' );
		}
		WP_CLI::success( "The Kit ID is {$kit_id}" );
	}

	/**
	 * Outputs kit data from typekit, using the current blog's kit by default.
	 * @subcommand kit-data
	 *
	 * @synopsis [<kit-id>]
	 */
	public function kit_data( $args, $assoc_args ) {
		$kit_id = isset( $args[0] )
			? $args[0]
			: $this->provider()->get_kit_id();
		if ( ! $kit_id ) {
			WP_CLI::error( 'No Kit found' );
		}
		$data = $this->provider()->get_kit_info( $kit_id );
		if ( is_wp_error( $data ) ) {
			WP_CLI::error( sprintf( 'Error code %s with message: %s', $data->get_error_code(), $data->get_error_message() ) );
		}
		WP_CLI::print_value( $data );
	}

	/**
	 * Sets an advanced kit_id for a user.
	 *
	 * We don't have a UI for this any more and the feature is unsupported but if a user
	 * unsets their kit (or we lost it in transition) it's nice to set it back.
	 *
	 * @subcommand set-advanced-kit
	 *
	 * @synopsis <kit-id> [--force=<true>]
	 */
	public function set_advanced_kit_id( $args, $assoc_args = array( 'force' => false ) ) {
		$jetpack_fonts = Jetpack_Fonts::get_instance();
		$provider = $this->provider();

		// first, if they have erroneously set a kit through the standard interface, delete it.
		if ( ! empty( $jetpack_fonts->get_fonts() ) ) {
			if ( $assoc_args['force'] !== 'true' ) {
				WP_CLI::warning( 'The user currently has fonts set. Run this command with `--force=true` to delete their fonts and set an advanced kit id.' );
				WP_CLI::print_value( $jetpack_fonts->get_fonts() );
				return;
			} else {
				$jetpack_fonts->save_fonts( array(), true );
				WP_CLI::success( 'User\'s normally set fonts deleted' );
			}
		}

		$this->provider()->set( 'advanced_kit_id', $args[0] );
		WP_CLi::success( sprintf( 'Typekit advanced kit id of %s set for %s', $args[0], home_url() ) );
	}

	/**
	 * Check if the currently published kit matches the saved font values
	 *
	 * @subcommand check-kit
	 */
	public function check_kit( $args, $assoc_args ) {
		$jetpack_fonts = Jetpack_Fonts::get_instance();
		$provider = $this->provider();
		$typekit_fonts = wp_list_filter( $jetpack_fonts->get_fonts(), array( 'provider' => 'typekit' ) );
		$kit_id = $provider->get_kit_id();
		$kit_data = $kit_id ? $provider->get_kit_info( $kit_id ) : false;

		if ( ! $typekit_fonts ) {
			// No saved fonts
			if ( $kit_data ) {
				// orphaned kit
				return WP_CLI::warning( 'No Typekit fonts set, but there is a kit.' );
			} else {
				// no kit
				return WP_CLI::success( 'No Typekit fonts set and no kit. Looks good.' );
			}
		} else {
			// ok we have typekit fonts
			if ( $kit_data ) {
				if ( $this->is_kit_data_and_saved_fonts_matching( $kit_data, $typekit_fonts) ) {
					$this->print_data( $kit_data, $typekit_fonts );
					WP_CLI::success( 'The saved Typekit fonts and the kit are a match.' );
					WP_CLI::warning( 'Note that variations are not strictly checked. The data is above.' );
					return;
				} else {
					$this->print_data( $kit_data, $typekit_fonts );
					WP_CLI::warning( 'The saved Typekit fonts and the kit are mistmatched. The data is above.' );
					return $this->print_fixer();
				}
			} else {
				WP_CLI::warning( 'There are saved Typekit fonts, but no kit published.' );
				return $this->print_fixer();
			}
		}
		WP_CLI::error( 'Our checks failed to account for this situation.' );
	}

	private function print_fixer() {
		WP_CLI::line( sprintf( "To fix, use:\nwp --url=%s typekit republish", preg_replace( '/^https?:\/\//', '', home_url() ) ) );
	}

	private function print_data( $kit_data, $typekit_fonts ) {
		WP_CLI::print_value( "\nKit Data:\n" );
		WP_CLI::print_value( $kit_data['kit']['families'] );
		WP_CLI::print_value( "\nSaved Typekit Fonts:\n" );
		WP_CLI::print_value( $typekit_fonts );
	}

	private function is_kit_data_and_saved_fonts_matching( $kit_data, $fonts ) {
		$kit_families = $kit_data['kit']['families'];
		$kit_ids = wp_list_pluck( $kit_families, 'id' );
		$saved_font_ids = wp_list_pluck( $fonts, 'id' );
		// we need to compare both directions
		// first kit to saved
		foreach( $kit_ids as $id ) {
			if ( ! in_array( $id, $saved_font_ids ) ) {
				return false;
			}
		}
		// now saved to kit
		foreach( $saved_font_ids as $id ) {
			if ( ! in_array( $id, $kit_ids ) ) {
				return false;
			}
		}
		return true;
	}
}

WP_CLI::add_command( 'typekit', 'Typekit_Fonts_Command' );