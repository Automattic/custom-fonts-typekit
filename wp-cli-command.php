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
		require_once __DIR__ . '/typekit-api.php';
		$data = TypekitApi::get_published_kit_info( $kit_id );
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
}

WP_CLI::add_command( 'typekit', 'Typekit_Fonts_Command' );