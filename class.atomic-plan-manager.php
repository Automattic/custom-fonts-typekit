<?php

/**
 * Class Atomic_Plan_Manager
 * The plan manager gets initialize after all mu-plugins are loaded and
 * gates features based on the site plan.
 */
class Atomic_Plan_Manager {

	/**
	 * Free plan slug
	 *
	 * @var string
	 */
	const FREE_PLAN_SLUG = 'free';

	/**
	 * Personal plan slug
	 *
	 * @TODO This constant was added as a placeholder since at the time AT did not had a "Personal" plan implemented.
	 *       With the actual implementation of personal plan, this should be handled properly.
	 *
	 * @var string
	 */
	const PERSONAL_PLAN_SLUG = 'personal';

	/**
	 * Business plan slug
	 *
	 * @var string
	 */
	const BUSINESS_PLAN_SLUG = 'business';

	/**
	 * Ecommerce plan slug
	 *
	 * @var string
	 */
	const ECOMMERCE_PLAN_SLUG = 'ecommerce';

	/**
	 * Atomic Plan Manager instance
	 */
	private static $instance;

	/**
	 * Initialize the plan manager
	 *
	 * @return Atomic_Plan_Manager
	 */
	public static function init() {
		if ( self::$instance ) {
			return self::$instance;
		}
		self::$instance = new self();

		return self::$instance;
	}

	/**
	 * Return the local plan slug
	 * If a local plan slug can't be found it will
	 * return BUSINESS_PLAN_SLUG by default
	 *
	 * @return string
	 */
	public static function current_plan_slug() {
		$atomic_site_id = wpcomsh_get_atomic_site_id();

		// If the Atomic Site ID is not set, or it's before cutoff
		// Use old at_options plan slug.
		if ( empty( $atomic_site_id ) || $atomic_site_id < 149516540 ) {
			$at_options = get_option( 'at_options', array() );
			if ( ! is_array( $at_options ) ) {
				$at_options = array( 'plan_slug' => self::BUSINESS_PLAN_SLUG );
			} elseif ( ! isset( $at_options['plan_slug'] ) ) {
				$at_options['plan_slug'] = self::BUSINESS_PLAN_SLUG;
			}
			return $at_options['plan_slug'];
		}

		// Otherwise, persistent data.
		$persistent_data = new Atomic_Persistent_Data();
		$wpcom_plan      = $persistent_data->WPCOM_PLAN;
		if ( empty( $wpcom_plan ) ) {
			return self::FREE_PLAN_SLUG;
		}

		return $wpcom_plan;
	}

	/**
	 * Check if the site has an Atomic supported plan.
	 *
	 * @return bool
	 */
	public static function has_atomic_supported_plan() {
		$supported_plans = array(
			self::BUSINESS_PLAN_SLUG,
			self::ECOMMERCE_PLAN_SLUG,
		);

		$plan_slug = self::current_plan_slug();
		return in_array( $plan_slug, $supported_plans, true );
	}
}
