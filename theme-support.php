<?php
/**
 * TYPEKIT THEME SUPPORT
 *
 * ALLOW THEMES TO REGISTER SUPPORT FOR CUSTOM TYPEKIT KITS
 *
 * USAGE:
 *
 * function wpcom_typekit_theme_integration() {
 * 	add_theme_support( 'wpcom-typekit-fonts', array(
 * 		array(
 * 			'id'  => 'tgbb',
 * 			'fvd' => array( 'i4', 'n4', 'i7', 'n7', ),
 * 		),
 * 		array(
 * 			'id' => 'rftw',
 * 		),
 * 	) );
 * }
 * add_action( 'after_setup_theme', 'wpcom_typekit_theme_integration' );
 */

class Typekit_Theme_Support {
	/**
	 * Singleton!
	 */
	private static $__instance = null;

	/**
	 * Theme support key
	 */
	private $key = 'wpcom-typekit-fonts';

	/**
	 * Does current theme support Typekit fonts?
	 */
	private $supported = false;

	/**
	 * Fonts specified by the active theme
	 */
	private $fonts = false;

	/**
	 * Default options for fonts specified by theme
	 */
	private $font_defaults = array(
		'id'  => '',
		'fvd' => null,
	);

	/**
	 * Themes listed here include a free year of Custom Design with their purchase.
	 * We must track this manually, as we can't count on the supported theme being active, so we can't check `current_theme_supports()`.
	 */
	private static $themes_with_free_cd = array(
		'premium/oxford',
		'premium/bailey',
	);

	/**
	 * Instantiate singleton
	 *
	 * @return object
	 */
	public static function get_instance() {
		if ( ! is_a( self::$__instance, __CLASS__ ) ) {
			self::$__instance = new self;
		}

		return self::$__instance;
	}

	/**
	 * Register actions
	 *
	 * @uses add_action
	 * @return null
	 */
	private function __construct() {
		// Handle theme support
		add_action( 'init', array( $this, 'check_support' ) );

		// Reset on theme switch, if necessary
		add_action( 'switch_theme', array( $this, 'reset' ) );

		// Reset when primary domain changes, as Typekit kits use domain whitelisting
		// Since we're leveraging Advanced Mode, kit republish handled in the `TypekitAdmin` class doesn't handle this for us
		add_action( 'wpcom_makeprimaryblog', array( $this, 'reset' ) );

		// Purchasing a supported theme includes one free year of Custom Design
		add_action( 'premium_theme_purchased', array( $this, 'maybe_subscribe_custom_design' ), 10, 2 );
	}

	/**
	 * Check if current theme supports custom font kits
	 * If supported, ensure custom kit is configured for use on this site via the WP.com Typekit account
	 *
	 * @uses self::get_provider()
	 * @uses Jetpack_Typekit_Font_Provider::has_advanced_kit()
	 * @uses Jetpack_Typekit_Font_Provider::has_themes_set_kit()
	 * @uses current_theme_supports()
	 * @uses Jetpack_Typekit_Font_Provider::get()
	 * @uses CustomDesign::is_upgrade_active()
	 * @uses self::get_theme_fonts()
	 * @uses self::kit()
	 * @uses bump_stats_extra()
	 * @uses wp_get_theme()
	 * @uses self::reset()
	 * @uses add_action()
	 * @uses add_filter()
	 * @return null
	 */
	public function check_support() {
		$provider = $this->get_provider();

		// User explicitly opted out.
		if ( $provider->get( 'theme_override' ) ) {
			return;
		}

		// Don't override an advanced kit set manually on this site, even if the theme specifies its own font stack
		if ( $provider->has_advanced_kit() && ! $provider->has_theme_set_kit() ) {
			return;
		}

		// Parse the activate theme's support for this feature
		$supported = current_theme_supports( $this->key ) && CustomDesign::is_upgrade_active();
		$set = $provider->get( 'set_by_theme' );

		if ( $supported && ! $set ) {
			$this->get_theme_fonts();
			$this->kit();

			bump_stats_extra( 'typekit-theme-fonts-enabled', wp_get_theme()->stylesheet );
		} elseif ( ! $supported && $set ) {
			$this->reset();
			// self::reset() bumps its own stat
		}

		// Check that the active kit matches theme specifications
		add_action( 'admin_init', array( $this, 'maybe_refresh_kit' ) );

		// Possibly add a body class indicating this feature is active
		add_filter( 'body_class', array( $this, 'filter_body_classes' ) );
	}

	/**
	 * Retrieve Typekit fonts supported by the theme
	 *
	 * @uses get_theme_support()
	 * @uses wp_parse_args()
	 * @return array or false
	 */
	private function get_theme_fonts() {
		// Don't do the dance again if we've done it already
		if ( $this->fonts ) {
			return $this->fonts;
		}

		// What fonts do we have?
		$theme_fonts = get_theme_support( $this->key );

		if ( is_array( $theme_fonts ) && isset( $theme_fonts[0] ) && is_array( $theme_fonts[0] ) ) {
			$this->supported = true;

			$theme_fonts = $theme_fonts[0];

			foreach ( $theme_fonts as $key => $theme_font ) {
				if ( ! isset( $theme_font['id'] ) || empty( $theme_font['id'] ) ) {
					unset( $theme_fonts[ $key ] );
					continue;
				}

				$theme_fonts[ $key ] = wp_parse_args( $theme_font, $this->font_defaults );
			}

			$this->fonts = $theme_fonts;
		}

		return $this->fonts;
	}

	/**
	 * Publish a kit with theme's specified fonts
	 *
	 * @uses self::get_theme_fonts()
	 * @uses self::get_provider()
	 * @uses Jetpack_Typekit_Font_Provider::create_kit()
	 * @uses Jetpack_Fonts::save_fonts()
	 * @uses Jetpack_Typekit_Font_Provider::publish_kit()
	 * @uses Jetpack_Typekit_Font_Provider::delete_kit()
	 * @uses Jetpack_Typekit_Font_Provider::set()
	 * @uses Jetpack_Typekit_Font_Provider::delete()
	 * @return bool
	 */
	public function kit() {
		$fonts = $this->get_theme_fonts();

		if ( ! is_array( $fonts ) ) {
			return false;
		}

		$provider = $this->get_provider();

		$kit = $provider->create_kit( $fonts );

		if ( is_array( $kit ) && isset( $kit['kit'] ) ) {
			$kit = $kit['kit'];

			// Clean up any fonts/kits previously in use on this site by
			// saving an empty fonts array
			Jetpack_Fonts::get_instance()->save_fonts( array(), true );

			// set our new things
			$provider->publish_kit( $kit['id'] );
			$provider->set( 'set_by_theme', true );
			$provider->set( 'theme_families', $kit['families'] );
			$provider->set( 'advanced_kit_id', $kit['id'] );

			return true;
		} else {
			// Something went wrong with the API request. Existing debugging will log these occurrances
			return false;
		}
	}

	/**
	 * On theme switch, unset theme-specified fonts if set
	 *
	 * @uses self::get_provider()
	 * @uses Jetpack_Typekit_Font_Provider::has_themes_set_kit()
	 * @uses Jetpack_Typekit_Font_Provider::delete()
	 * @uses Jetpack_Typekit_Font_Provider::get()
	 * @uses bump_stats_extra()
	 * @uses current_filter()
	 * @action switch_theme
	 * @return null
	 */
	public function reset() {
		$provider = $this->get_provider();
		if ( $provider->get( 'theme_override' ) ) {
			$provider->delete( 'theme_override' );
		}
		if ( $provider->has_theme_set_kit() ) {
			$provider->delete( 'theme_families' );
			$provider->delete( 'set_by_theme' );
			$kit_id = $provider->get( 'advanced_kit_id' );
			if ( $kit_id ) {
				$provider->delete_kit( $kit_id );
				$provider->delete( 'advanced_kit_id' );
			}

			$this->supported = false;
			$this->fonts     = false;

			bump_stats_extra( 'typekit-theme-fonts-disabled', current_filter() );
		}
	}

	/**
	 * Check if the active kit matches a theme's specifications
	 *
	 * If the theme updates the fonts, or requested font variations, this code will rebuild the kit to match what the theme requests.
	 * Since this involves API requests, the process is locked so that it cannot be performed more than once per hour.
	 * Only an admin visit (non-Ajax, non-Customizer) triggers this update, and only when the theme supports custom font kits
	 *
	 * @global $pagenow
	 * @uses is_customize_preview()
	 * @uses DOING_AJAX
	 * @uses self::get_provider()
	 * @uses Jetpack_Typekit_Font_Provider::has_advanced_kit()
	 * @uses Jetpack_Typekit_Font_Provider::has_themes_set_kit()
	 * @uses wp_cache_add()
	 * @uses self::rekey_kit_by_id()
	 * @uses self::get_theme_fonts()
	 * @uses self::arrays_equal()
	 * @uses self::reset()
	 * @uses self::kit()
	 * @uses bump_stats_extra()
	 * @uses wp_get_theme()
	 * @action admin_init
	 * @return null
	 */
	public function maybe_refresh_kit() {
		// Stay out of the Customizer
		global $pagenow;
		if ( 'customize.php' === $pagenow || is_customize_preview() ) {
			return;
		}

		// Leave Ajax alone
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return;
		}

		$provider = $this->get_provider();

		// Only proceed if the theme-specified fonts are active
		if ( ! $provider->has_advanced_kit() || ! $provider->has_theme_set_kit() ) {
			return;
		}

		$rebuild_kit = false;

		// Prevent multiple executions by locking the rebuild for five minues
		$refresh_lock_key = 'typekit_kit_rebuilding';
		$refresh_lock = wp_cache_add( $refresh_lock_key, 1, 'default', 1 * HOUR_IN_SECONDS );

		if ( $refresh_lock ) {
			$active_kit = $provider->get( 'theme_families' );
			$active_kit = $this->rekey_kit_by_id( $active_kit );

			if ( is_array( $active_kit ) ) {
				$theme_kit = $this->get_theme_fonts();
				$theme_kit = $this->rekey_kit_by_id( $theme_kit );

				if ( is_array( $theme_kit ) ) {
					// Check for changes in font IDs first
					if ( ! $this->arrays_equal( array_keys( $active_kit ), array_keys( $theme_kit ) ) ) {
						$rebuild_kit = true;
					}

					// Now check the font variations
					if ( ! $rebuild_kit ) {
						foreach ( $active_kit as $font ) {
							if ( ! $this->arrays_equal( $font['variations'], $theme_kit[ $font['id'] ]['fvd'] ) ) {
								$rebuild_kit = true;
								break;
							}
						}
					}
				}
			}

			// If the kit is outdated, remove the old first and then build a new one
			if ( $rebuild_kit ) {
				$this->reset();
				$this->kit();

				bump_stats_extra( 'typekit-theme-fonts-refresh', wp_get_theme()->stylesheet );
			}
		}
	}

	/**
	 * Add a body class when theme fonts are active
	 * Allows theme to target font modifications only when feature is active
	 *
	 * @param array $classes
	 * @uses TypekitData::get()
	 * @uses esc_attr()
	 * @filter body_class
	 * @return array
	 */
	public function filter_body_classes( $classes ) {
		if ( $this->get_provider()->has_theme_set_kit() ) {
			$classes[] = esc_attr( $this->key );
		}

		return $classes;
	}

	/**
	 * Fonts are stored in a zero-index array, which works for us in almost all cases
	 * When, however, we need to search for fonts in a kit, it's easier to check for an array key than loop through all array values
	 *
	 * @param array $kit
	 * @return array or false
	 */
	private function rekey_kit_by_id( $kit ) {
		// Kit needs to be an array to be useful to us
		if ( ! is_array( $kit ) || empty( $kit ) ) {
			return false;
		}

		$new_kit = array();

		foreach ( $kit as $font ) {
			$new_kit[ $font['id'] ] = $font;
		}

		return $new_kit;
	}

	/**
	 * Compare values of two arrays to see if either is different
	 * Ignores keys, and accounts for only one array having additional values
	 *
	 * @param array $first
	 * @param array $second
	 * @return bool
	 */
	private function arrays_equal( $first, $second ) {
		$comparison_one = array_diff( $first, $second );
		$comparison_two = array_diff( $second, $first );
		return ( empty( $comparison_one ) && empty( $comparison_two ) );
	}

	/**
	 * Add one year of free Custom Design when purchasing a supported theme
	 *
	 * @param string $stylesheet
	 * @param array $purchase_meta
	 * @uses get_store_subscription()
	 * @uses bump_stats_extra()
	 * @uses WPCOM_Store::subscribe()
	 * @action premium_theme_purchase
	 * @return null
	 */
	public function maybe_subscribe_custom_design( $stylesheet, $purchase_meta ) {
		// Only select themes include the free year. We can't give away the _entire_ store.
		if ( ! in_array( $stylesheet, self::$themes_with_free_cd ) ) {
			return;
		}

		$message = "User received free year of Custom Design for purchasing theme '{$stylesheet}'";

		if ( get_subscription( $purchase_meta['blog_id'], 0, WPCOM_CUSTOM_DESIGN_PRODUCT ) ) {
			// Extend sub to expire one year from today, if it expires earlier
			WPCOM_Store::renew_wpcom_subscriptions( [
				'blog_id' => $purchase_meta['blog_id'],
				'user_id' => $purchase_meta['user_id'],
				'product_id' => WPCOM_CUSTOM_DESIGN_PRODUCT,
				'txn_id' => $purchase_meta['txn_id'],
				'message' => $message
			] );

			bump_stats_extra( 'cd-typekit-free-year-bump', $stylesheet );
		} else {
			WPCOM_Store::subscribe( $purchase_meta['blog_id'], $purchase_meta['user_id'], WPCOM_CUSTOM_DESIGN_PRODUCT, $purchase_meta['txn_id'], $message );

			bump_stats_extra( 'cd-typekit-free-year-full', $stylesheet );
		}
	}

	private function get_provider() {
		return Jetpack_Fonts::get_instance()->get_provider( 'typekit' );
	}
}

Typekit_Theme_Support::get_instance();
