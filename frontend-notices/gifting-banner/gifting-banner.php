<?php // phpcs:ignore WordPress.File.FileName.InvalidClassFileName
/**
 * Show the gifting banner on Simple & Atomic sites.
 * This file is duplicated in WPCOM and WPCOMSH.
 * WPCOM: public_html/wp-content/blog-plugins/gifting-banner.php
 * WPCOMSH: wpcomsh/frontend-notices/gifting-banner/gifting-banner.php
 * See: https://dotcomdesignp2.wordpress.com/2022/10/14/the-gift-of-blogging
 *
 * @package gifting-banner
 */

/**
 * Class Gifting_Banner
 */
class Gifting_Banner {

	/**
	 * The current purchased plan of the blog.
	 * Used to pass data between methods.
	 *
	 * @var object|null
	 */
	public $current_plan;

	/**
	 * Maybe show the gifting banner for the current site.
	 */
	public function maybe_show_gifting_banner() {

		if ( $this->should_display_expiring_plan_notice() ) {
			// Inject the gifting banner after the launch banner.
			if ( defined( 'IS_ATOMIC' ) && IS_ATOMIC ) {
				add_action( 'wp_head', array( $this, 'inject_gifting_banner_wpcomsh' ), 1103 );
			} else {
				add_action( 'wp_head', array( $this, 'inject_gifting_banner_wpcom' ), 1103 );
			}
		}
	}

	/**
	 * Determines if the plan expiring notice should display.
	 *
	 * @return bool
	 */
	public function should_display_expiring_plan_notice() {
		$this->current_plan = $this->get_plan_purchase();

		// If site doesn't have valid plan -> don't show the banner.
		if ( ! $this->current_plan ) {
			return false;
		}

		// If wpcom_gifting_subscription option exists, we show/hide the banner based on it.
		if ( 'option-not-exists' !== get_option( 'wpcom_gifting_subscription', 'option-not-exists' ) ) {
			return (bool) get_option( 'wpcom_gifting_subscription' );
		}

		// Create parity between WPCOM and WPCOMSH for auto_renew.
		if ( defined( 'IS_ATOMIC' ) && IS_ATOMIC ) {
			$this->current_plan->user_allows_auto_renew = $this->current_plan->auto_renew;
		}

		// Test if gifting is enabled - We default to the inverse of auto-renew but configured options take precedence.
		if ( ! get_option( 'wpcom_gifting_subscription', ! $this->current_plan->user_allows_auto_renew ) ) {
			return false;
		}

		/*
		 * We will display the banner:
		 * - 54 days before the annual plan expiration.
		 * - 5 days before the monthly plan expiration.
		 */
		$days_of_warning          = false !== strpos( $this->current_plan->product_slug, 'monthly' ) ? 5 : 54;
		$seconds_until_expiration = strtotime( $this->current_plan->expiry_date ) - time();

		if ( $seconds_until_expiration < $days_of_warning * DAY_IN_SECONDS ) {
			// Show the banner.
			return true;
		}

		return false;
	}

	/**
	 * Get checkout link.
	 */
	public function get_checkout_link() {
		return 'https://wordpress.com/checkout/' . $this->current_plan->product_slug . '/gift/' . $this->current_plan->subscription_id . '?cancel_to=/home';
	}

	/**
	 * Get how many days the banner should be dismissed based on plan type (30 days for monthly, 1 year for yearly)
	 */
	public function get_days_to_dismiss_banner() {
		return false !== strpos( $this->current_plan->product_slug, 'monthly' ) ? 30 : 365;
	}

	/**
	 * Get more info link.
	 */
	public function get_more_info_link() {
		return 'https://wordpress.com/support/gift-a-wordpress-com-subscription/';
	}

	/**
	 * Inject the gifting banner on WPCOM.
	 */
	public function inject_gifting_banner_wpcom() {
		$days_to_expire             = ceil( ( strtotime( $this->current_plan->expiry_date ) - time() ) / DAY_IN_SECONDS );
		$data                       = array();
		$data['dismiss_days_count'] = $this->get_days_to_dismiss_banner();
		$data['checkout_link']      = $this->get_checkout_link();
		$data['more_info_link']     = $this->get_more_info_link();
		$data['i18n']               = array(
			'title'       => $this->get_title_texts( $days_to_expire ),
			'subtitle'    => $this->get_subtitle_texts( $this->current_plan, $days_to_expire ),
			'button_text' => __(
				'Gift',
				'gifting-banner'
			),
		);

		// Change the version if associated files are updated, current: 20230103.
		wp_enqueue_style( 'gifting-banner', plugins_url( 'gifting-banner/css/gifting-banner.css', __FILE__ ), array(), '20230103' );
		wp_enqueue_script( 'gifting-banner', plugins_url( 'gifting-banner/js/gifting-banner.js', __FILE__ ), array(), '20230103', true );
		wp_localize_script( 'gifting-banner', 'gifting_banner', $data );
		wp_set_script_translations( 'gifting-banner', 'gifting-banner' );
	}

	/**
	 * Inject the gifting banner on WPCOMSH.
	 */
	public function inject_gifting_banner_wpcomsh() {
		$days_to_expire             = ceil( ( strtotime( $this->current_plan->expiry_date ) - time() ) / DAY_IN_SECONDS );
		$data                       = array();
		$data['dismiss_days_count'] = $this->get_days_to_dismiss_banner();
		$data['checkout_link']      = $this->get_checkout_link();
		$data['more_info_link']     = $this->get_more_info_link();
		$data['i18n']               = array(
			'title'       => $this->get_title_texts( $days_to_expire ),
			'subtitle'    => $this->get_subtitle_texts( $this->current_plan, $days_to_expire ),
			'button_text' => __(
				'Gift',
				'wpcomsh'
			),
		);

		wp_enqueue_style( 'gifting-banner', plugins_url( 'css/gifting-banner.css', __FILE__ ), array(), WPCOMSH_VERSION );
		wp_enqueue_script( 'gifting-banner', plugins_url( 'js/gifting-banner.js', __FILE__ ), array(), WPCOMSH_VERSION, true );
		wp_localize_script( 'gifting-banner', 'gifting_banner', $data );
		wp_set_script_translations( 'gifting-banner', 'wpcomsh' );
	}

	/**
	 * Get hosting plan purchase from the current site.
	 * See: https://github.com/Automattic/wpcomsh/pull/1118
	 *
	 * @return object|null
	 */
	private static function get_plan_purchase() {
		$purchases = wpcom_get_site_purchases();

		foreach ( $purchases as $purchase ) {
			if ( wpcom_purchase_has_feature( $purchase, WPCOM_Features::SUBSCRIPTION_GIFTING ) ) {
				return $purchase;
			}
		}

		return null;
	}

	/**
	 * Get title based on days.
	 *
	 * @param int $days_to_expire Days to expire
	 * @return object|null
	 */
	private static function get_title_texts( $days_to_expire ) {

		if ( $days_to_expire < 1 ) {
			return __(
				'This site\'s plan has expired.',
				'wpcomsh'
			);
		}

		return __(
			'Enjoy this site?',
			'wpcomsh'
		);
	}

	/**
	 * Get subtitle based on days & type of plan.
	 * - Plan expired
	 * - Annual Plan < 2 weeks before expiration
	 * - Monthly Plan or Annual plan > 2 weeks before expiration
	 *
	 * @param object $current_plan Current Plan
	 * @param int    $days_to_expire Days to expire
	 * @return object|null
	 */
	private static function get_subtitle_texts( $current_plan, $days_to_expire ) {

		if ( $days_to_expire < 1 ) {
			return sprintf(
				/* translators: Banner to show the visitor the site gifting option on expired sites. */
				__(
					'Gift the author a WordPress.com upgrade.',
					'wpcomsh'
				),
				$days_to_expire
			);
		}

		if ( ! strpos( $current_plan->product_slug, 'monthly' ) && $days_to_expire < 15 ) {
			return sprintf(
				/* translators: Banner to show the visitor the site gifting option on days before expires. */
				_n(
					'Gift the author a WordPress.com plan before it expires in %d day.',
					'Gift the author a WordPress.com plan before it expires in %d days.',
					$days_to_expire,
					'wpcomsh'
				),
				$days_to_expire
			);
		}

		return sprintf(
			/* translators: Banner to show the visitor the site gifting option, no days shown. */
			__(
				'Gift the author a WordPress.com plan.',
				'wpcomsh'
			),
			$days_to_expire
		);
	}

}

/**
 * Load the Gifting Banner.
 */
$gifting_banner = new Gifting_Banner();
add_action( 'init', array( $gifting_banner, 'maybe_show_gifting_banner' ) );
