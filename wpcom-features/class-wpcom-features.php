<?php
/**
 * THIS FILE EXISTS VERBATIM IN WPCOM AND WPCOMSH.
 *
 * DANGER DANGER DANGER!!!
 * If you make any changes to this class you must MANUALLY update this file in both WPCOM and WPCOMSH.
 *
 * @package WPCOM_Features
 */

/**
 * Map features to purchases.
 */
class WPCOM_Features {
	/*
	 * Private const for every mapped purchase, sorted by product_id.
	 */
	private const SPACE_10GB                                  = '1gb_space_upgrade'; // 9
	private const SPACE_25GB                                  = '5gb_space_upgrade'; // 10
	private const SPACE_50GB                                  = '10gb_space_upgrade'; // 11
	private const WPCOM_VIDEOPRESS                            = 'videopress'; // 15
	private const SPACE_100GB                                 = '50gb_space_upgrade'; // 19
	private const SPACE_200GB                                 = '100gb_space_upgrade'; // 20
	private const SPACE_3GB                                   = '3gb_space_upgrade'; // 21
	private const WPCOM_VIDEOPRESS_PRO                        = 'videopress-pro'; // 47
	private const SPACE_UNLIMITED                             = 'unlimited_space'; // 48
	private const GAPPS                                       = 'gapps'; // 69
	private const GAPPS_UNLIMITED                             = 'gapps_unlimited'; // 70
	private const WP_TITAN_MAIL_MONTHLY                       = 'wp_titan_mail_monthly'; // 400
	private const WP_TITAN_MAIL_YEARLY                        = 'wp_titan_mail_yearly'; // 401
	private const WP_GOOGLE_WORKSPACE_BUSINESS_STARTER_YEARLY = 'wp_google_workspace_business_starter_yearly'; // 690
	private const WPCOM_SEARCH                                = 'wpcom_search'; // 800
	private const WPCOM_SEARCH_MONTHLY                        = 'wpcom_search_monthly'; // 801
	private const YOAST_PREMIUM                               = 'yoast_premium'; // 900
	private const WOOCOMMERCE_SUBSCRIPTIONS                   = 'woocommerce_subscriptions_yearly'; // 902
	private const WOOCOMMERCE_SUBSCRIPTIONS_MONTHLY           = 'woocommerce_subscriptions_monthly'; // 903
	private const WOOCOMMERCE_BOOKINGS                        = 'woocommerce_bookings_yearly'; // 904
	private const WOOCOMMERCE_BOOKINGS_MONTHLY                = 'woocommerce_bookings_monthly'; // 905
	private const WOOCOMMERCE_TABLE_RATE_SHIPPING             = 'woocommerce_table_rate_shipping_yearly'; // 906
	private const WOOCOMMERCE_TABLE_RATE_SHIPPING_MONTHLY     = 'woocommerce_table_rate_shipping_monthly'; // 907
	private const AUTOMATEWOO                                 = 'automatewoo_yearly'; // 908
	private const AUTOMATEWOO_MONTHLY                         = 'automatewoo_monthly'; // 909
	private const WOOCOMMERCE_SHIPMENT_TRACKING               = 'woocommerce_shipment_tracking_yearly'; // 910
	private const WOOCOMMERCE_SHIPMENT_TRACKING_MONTHLY       = 'woocommerce_shipment_tracking_monthly'; // 911
	private const WOOCOMMERCE_XERO                            = 'woocommerce_xero_yearly'; // 912
	private const WOOCOMMERCE_XERO_MONTHLY                    = 'woocommerce_xero_monthly'; // 913
	private const WORDPRESS_SEO_PREMIUM                       = 'wordpress_seo_premium_yearly'; // 914
	private const WORDPRESS_SEO_PREMIUM_MONTHLY               = 'wordpress_seo_premium_monthly'; // 915
	private const WOOCOMMERCE_POINTS_AND_REWARDS              = 'woocommerce_points_and_rewards_yearly'; // 916
	private const WOOCOMMERCE_POINTS_AND_REWARDS_MONTHLY      = 'woocommerce_points_and_rewards_monthly'; // 917
	private const WOOCOMMERCE_DEPOSITS                        = 'woocommerce_deposits_yearly'; // 918
	private const WOOCOMMERCE_DEPOSITS_MONTHLY                = 'woocommerce_deposits_monthly'; // 919
	private const WOOCOMMERCE_ONE_PAGE_CHECKOUT               = 'woocommerce_one_page_checkout_yearly'; // 920
	private const WOOCOMMERCE_ONE_PAGE_CHECKOUT_MONTHLY       = 'woocommerce_one_page_checkout_monthly'; // 921
	private const WOOTHEMES_SENSEI                            = 'woothemes_sensei_yearly'; // 924
	private const WOOTHEMES_SENSEI_MONTHLY                    = 'woothemes_sensei_monthly'; // 925
	private const VALUE_BUNDLE                                = 'value_bundle'; // 1003
	private const BUNDLE_PRO                                  = 'bundle_pro'; // 1004
	private const BUNDLE_SUPER                                = 'bundle_super'; // 1005
	private const BUNDLE_ENTERPRISE                           = 'wpcom-enterprise'; // 1007
	private const BUSINESS_BUNDLE                             = 'business-bundle'; // 1008
	private const PERSONAL_BUNDLE                             = 'personal-bundle'; // 1009
	private const BLOGGER_BUNDLE                              = 'blogger-bundle'; // 1010
	private const ECOMMERCE_BUNDLE                            = 'ecommerce-bundle'; // 1011
	private const VALUE_BUNDLE_MONTHLY                        = 'value_bundle_monthly'; // 1013
	private const BUSINESS_BUNDLE_MONTHLY                     = 'business-bundle-monthly'; // 1018
	private const PERSONAL_BUNDLE_MONTHLY                     = 'personal-bundle-monthly'; // 1019
	private const ECOMMERCE_BUNDLE_MONTHLY                    = 'ecommerce-bundle-monthly'; // 1021
	private const VALUE_BUNDLE_2Y                             = 'value_bundle-2y'; // 1023
	private const BUSINESS_BUNDLE_2Y                          = 'business-bundle-2y'; // 1028
	private const PERSONAL_BUNDLE_2Y                          = 'personal-bundle-2y'; // 1029
	private const BLOGGER_BUNDLE_2Y                           = 'blogger-bundle-2y'; // 1030
	private const ECOMMERCE_BUNDLE_2Y                         = 'ecommerce-bundle-2y'; // 1031
	private const PRO_PLAN                                    = 'pro-plan'; // 1032
	private const WP_P2_PLUS_MONTHLY                          = 'wp_p2_plus_monthly'; // 1040
	private const JETPACK_PREMIUM                             = 'jetpack_premium'; // 2000
	private const JETPACK_BUSINESS                            = 'jetpack_business'; // 2001
	private const JETPACK_FREE                                = 'jetpack_free'; // 2002
	private const JETPACK_PREMIUM_MONTHLY                     = 'jetpack_premium_monthly'; // 2003
	private const JETPACK_BUSINESS_MONTHLY                    = 'jetpack_business_monthly'; // 2004
	private const JETPACK_PERSONAL                            = 'jetpack_personal'; // 2005
	private const JETPACK_PERSONAL_MONTHLY                    = 'jetpack_personal_monthly'; // 2006
	private const JETPACK_SECURITY_DAILY                      = 'jetpack_security_daily'; // 2010
	private const JETPACK_SECURITY_DAILY_MONTHLY              = 'jetpack_security_daily_monthly'; // 2011
	private const JETPACK_SECURITY_REALTIME                   = 'jetpack_security_realtime'; // 2012
	private const JETPACK_SECURITY_REALTIME_MONTHLY           = 'jetpack_security_realtime_monthly'; // 2013
	private const JETPACK_COMPLETE                            = 'jetpack_complete'; // 2014
	private const JETPACK_COMPLETE_MONTHLY                    = 'jetpack_complete_monthly'; // 2015
	private const JETPACK_SECURITY_T1_YEARLY                  = 'jetpack_security_t1_yearly'; // 2016
	private const JETPACK_SECURITY_T1_MONTHLY                 = 'jetpack_security_t1_monthly'; // 2017
	private const JETPACK_SECURITY_T2_YEARLY                  = 'jetpack_security_t2_yearly'; // 2019
	private const JETPACK_SECURITY_T2_MONTHLY                 = 'jetpack_security_t2_monthly'; // 2020
	private const JETPACK_BACKUP_DAILY                        = 'jetpack_backup_daily'; // 2100
	private const JETPACK_BACKUP_DAILY_MONTHLY                = 'jetpack_backup_daily_monthly'; // 2101
	private const JETPACK_BACKUP_REALTIME                     = 'jetpack_backup_realtime'; // 2102
	private const JETPACK_BACKUP_REALTIME_MONTHLY             = 'jetpack_backup_realtime_monthly'; // 2103
	private const JETPACK_SEARCH                              = 'jetpack_search'; // 2104
	private const JETPACK_SEARCH_MONTHLY                      = 'jetpack_search_monthly'; // 2105
	private const JETPACK_BACKUP_T1_YEARLY                    = 'jetpack_backup_t1_yearly'; // 2112
	private const JETPACK_BACKUP_T1_MONTHLY                   = 'jetpack_backup_t1_monthly'; // 2113
	private const JETPACK_BACKUP_T2_YEARLY                    = 'jetpack_backup_t2_yearly'; // 2114
	private const JETPACK_BACKUP_T2_MONTHLY                   = 'jetpack_backup_t2_monthly'; // 2115
	private const JETPACK_VIDEOPRESS                          = 'jetpack_videopress'; // 2116
	private const JETPACK_VIDEOPRESS_MONTHLY                  = 'jetpack_videopress_monthly'; // 2117

	// WPCOM "Level 2": Groups of level 1s
	private const WPCOM_BLOGGER_PLANS       = [ self::BLOGGER_BUNDLE, self::BLOGGER_BUNDLE_2Y ];
	private const WPCOM_PERSONAL_PLANS      = [ self::PERSONAL_BUNDLE, self::PERSONAL_BUNDLE_MONTHLY, self::PERSONAL_BUNDLE_2Y ];
	private const WPCOM_PREMIUM_PLANS       = [ self::BUNDLE_PRO, self::VALUE_BUNDLE, self::VALUE_BUNDLE_MONTHLY, self::VALUE_BUNDLE_2Y ];
	private const WPCOM_PRO_PLANS           = [ self::PRO_PLAN ];
	private const WPCOM_BUSINESS_PLANS      = [ self::BUSINESS_BUNDLE, self::BUSINESS_BUNDLE_MONTHLY, self::BUSINESS_BUNDLE_2Y ];
	private const WPCOM_ECOMMERCE_PLANS     = [ self::ECOMMERCE_BUNDLE, self::ECOMMERCE_BUNDLE_MONTHLY, self::ECOMMERCE_BUNDLE_2Y ];
	private const WPCOM_MARKETPLACE_PLANS   = [
		self::YOAST_PREMIUM,
		self::WOOCOMMERCE_SUBSCRIPTIONS,
		self::WOOCOMMERCE_SUBSCRIPTIONS_MONTHLY,
		self::WOOCOMMERCE_BOOKINGS,
		self::WOOCOMMERCE_BOOKINGS_MONTHLY,
		self::WOOCOMMERCE_TABLE_RATE_SHIPPING,
		self::WOOCOMMERCE_TABLE_RATE_SHIPPING_MONTHLY,
		self::AUTOMATEWOO,
		self::AUTOMATEWOO_MONTHLY,
		self::WOOCOMMERCE_SHIPMENT_TRACKING,
		self::WOOCOMMERCE_SHIPMENT_TRACKING_MONTHLY,
		self::WOOCOMMERCE_XERO,
		self::WOOCOMMERCE_XERO_MONTHLY,
		self::WORDPRESS_SEO_PREMIUM,
		self::WORDPRESS_SEO_PREMIUM_MONTHLY,
		self::WOOCOMMERCE_POINTS_AND_REWARDS,
		self::WOOCOMMERCE_POINTS_AND_REWARDS_MONTHLY,
		self::WOOCOMMERCE_DEPOSITS,
		self::WOOCOMMERCE_DEPOSITS_MONTHLY,
		self::WOOCOMMERCE_ONE_PAGE_CHECKOUT,
		self::WOOCOMMERCE_ONE_PAGE_CHECKOUT_MONTHLY,
		self::WOOTHEMES_SENSEI,
		self::WOOTHEMES_SENSEI_MONTHLY,
	];
	private const GOOGLE_WORKSPACE_PRODUCTS = [ self::WP_GOOGLE_WORKSPACE_BUSINESS_STARTER_YEARLY ];
	private const GSUITE_PRODUCTS           = [ self::GAPPS, self::GAPPS_UNLIMITED ];
	private const WPCOM_TITAN_MAIL_PRODUCTS = [ self::WP_TITAN_MAIL_MONTHLY, self::WP_TITAN_MAIL_YEARLY ];

	// WPCOM "Level 3": Groups of level 2s
	private const WPCOM_BLOGGER_AND_HIGHER_PLANS  = [ self::WPCOM_BLOGGER_PLANS, self::WPCOM_PERSONAL_PLANS, self::WPCOM_PREMIUM_PLANS, self::WPCOM_PRO_PLANS, self::WPCOM_BUSINESS_PLANS, self::WPCOM_ECOMMERCE_PLANS ];
	private const WPCOM_PERSONAL_AND_HIGHER_PLANS = [ self::WPCOM_PERSONAL_PLANS, self::WPCOM_PREMIUM_PLANS, self::WPCOM_PRO_PLANS, self::WPCOM_BUSINESS_PLANS, self::WPCOM_ECOMMERCE_PLANS ];
	private const WPCOM_PREMIUM_AND_HIGHER_PLANS  = [ self::WPCOM_PREMIUM_PLANS, self::WPCOM_PRO_PLANS, self::WPCOM_BUSINESS_PLANS, self::WPCOM_ECOMMERCE_PLANS ];
	private const WPCOM_BUSINESS_AND_HIGHER_PLANS = [ self::WPCOM_BUSINESS_PLANS, self::WPCOM_ECOMMERCE_PLANS ];
	private const WPCOM_EMAIL_PRODUCTS            = [ self::GOOGLE_WORKSPACE_PRODUCTS, self::GSUITE_PRODUCTS, self::WPCOM_TITAN_MAIL_PRODUCTS ];

	// Jetpack "Level 2": Groups of level 1s:
	private const JETPACK_BUSINESS_PLANS = [ self::JETPACK_BUSINESS, self::JETPACK_BUSINESS_MONTHLY ];
	private const JETPACK_PREMIUM_PLANS  = [ self::JETPACK_PREMIUM, self::JETPACK_PREMIUM_MONTHLY ];
	private const JETPACK_PERSONAL_PLANS = [ self::JETPACK_PERSONAL, self::JETPACK_PERSONAL_MONTHLY ];
	private const JETPACK_COMPLETE_PLANS = [ self::JETPACK_COMPLETE, self::JETPACK_COMPLETE_MONTHLY ];

	private const JETPACK_SECURITY_DAILY_PLANS    = [ self::JETPACK_SECURITY_DAILY, self::JETPACK_SECURITY_DAILY_MONTHLY ];
	private const JETPACK_SECURITY_REALTIME_PLANS = [ self::JETPACK_SECURITY_REALTIME, self::JETPACK_SECURITY_REALTIME_MONTHLY ];
	private const JETPACK_SECURITY_T1_PLANS       = [ self::JETPACK_SECURITY_T1_MONTHLY, self::JETPACK_SECURITY_T1_YEARLY ];
	private const JETPACK_SECURITY_T2_PLANS       = [ self::JETPACK_SECURITY_T2_MONTHLY, self::JETPACK_SECURITY_T2_YEARLY ];

	private const JETPACK_BACKUP_DAILY_PLANS    = [ self::JETPACK_BACKUP_DAILY, self::JETPACK_BACKUP_DAILY_MONTHLY ];
	private const JETPACK_BACKUP_REALTIME_PLANS = [ self::JETPACK_BACKUP_REALTIME, self::JETPACK_BACKUP_REALTIME_MONTHLY ];
	private const JETPACK_BACKUP_T1_PLANS       = [ self::JETPACK_BACKUP_T1_MONTHLY, self::JETPACK_BACKUP_T1_YEARLY ];
	private const JETPACK_BACKUP_T2_PLANS       = [ self::JETPACK_BACKUP_T2_MONTHLY, self::JETPACK_BACKUP_T2_YEARLY ];

	// Jetpack "Level 3": Groups of level 2:
	private const JETPACK_PERSONAL_AND_HIGHER = [
		self::JETPACK_PERSONAL_PLANS,
		self::JETPACK_PREMIUM_PLANS,
		self::JETPACK_BUSINESS_PLANS,
		self::JETPACK_COMPLETE_PLANS,
		self::JETPACK_SECURITY_DAILY_PLANS,
		self::JETPACK_SECURITY_REALTIME_PLANS,
		self::JETPACK_SECURITY_T1_PLANS,
		self::JETPACK_SECURITY_T2_PLANS,
	];
	private const JETPACK_PREMIUM_AND_HIGHER  = [
		self::JETPACK_PREMIUM_PLANS,
		self::JETPACK_BUSINESS_PLANS,
		self::JETPACK_COMPLETE_PLANS,
		self::JETPACK_SECURITY_DAILY_PLANS,
		self::JETPACK_SECURITY_REALTIME_PLANS,
		self::JETPACK_SECURITY_T1_PLANS,
		self::JETPACK_SECURITY_T2_PLANS,
	];

	// Features automatically granted to all sites regardless of their purchases are mapped to these constants.
	private const WPCOM_ALL_SITES   = 'wpcom-all-sites';
	private const JETPACK_ALL_SITES = 'jetpack-all-sites';

	/*
	 * Public const for every mapped feature, sorted alphabetically.
	 */
	public const ADVANCED_SEO                  = 'advanced-seo';
	public const AKISMET                       = 'akismet';
	public const ATOMIC                        = 'atomic';
	public const BACKUPS                       = 'backups';
	public const CALENDLY                      = 'calendly';
	public const CLASSIC_SEARCH                = 'classic-search';
	public const CONCIERGE                     = 'concierge';
	public const CONCIERGE_BUSINESS            = 'concierge-business';
	public const CORE_AUDIO                    = 'core/audio';
	public const CORE_COVER                    = 'core/cover';
	public const CORE_VIDEO                    = 'core/video';
	public const CREDIT_VOUCHERS               = 'credit-vouchers';
	public const CUSTOM_DESIGN                 = 'custom-design';
	public const CUSTOM_DOMAIN                 = 'custom-domain';
	public const DONATIONS                     = 'donations';
	public const ECOMMERCE_MANAGED_PLUGINS     = 'ecommerce-managed-plugins';
	public const EMAIL_SUBSCRIPTION            = 'email-subscription';
	public const FREE_BLOG                     = 'free-blog';
	public const FULL_ACTIVITY_LOG             = 'full-activity-log';
	public const GOOGLE_ANALYTICS              = 'google-analytics';
	public const GOOGLE_MY_BUSINESS            = 'google-my-business';
	public const INSTALL_PLUGINS               = 'install-plugins';
	public const INSTALL_THEMES                = 'install-themes';
	public const LEGACY_UNLIMITED_SPACE_2019   = 'legacy-unlimited-space-2019';
	public const LIVE_SUPPORT                  = 'live_support';
	public const MANAGE_PLUGINS                = 'manage-plugins';
	public const NO_ADVERTS_NO_ADVERTS_PHP     = 'no-adverts/no-adverts.php';
	public const NO_WPCOM_BRANDING             = 'no-wpcom-branding';
	public const OPENTABLE                     = 'opentable';
	public const OPTIONS_PERMALINK             = 'options-permalink';
	public const PAYMENTS                      = 'payments';
	public const POLLDADDY                     = 'polldaddy';
	public const PREMIUM_CONTENT_CONTAINER     = 'premium-content/container';
	public const PREMIUM_THEMES                = 'premium-themes';
	public const PRIVATE_WHOIS                 = 'private_whois';
	public const REAL_TIME_BACKUPS             = 'real-time-backups';
	public const RECURRING_PAYMENTS            = 'recurring-payments';
	public const REPUBLICIZE                   = 'republicize';
	public const SEARCH                        = 'search';
	public const SECURITY_SETTINGS             = 'security-settings';
	public const SEND_A_MESSAGE                = 'send-a-message';
	public const SET_PRIMARY_CUSTOM_DOMAIN     = 'set-primary-custom-domain';
	public const SIMPLE_PAYMENTS               = 'simple-payments';
	public const SOCIAL_PREVIEWS               = 'social-previews';
	public const SPACE                         = 'space';
	public const SUPPORT                       = 'support';
	public const UPGRADED_UPLOAD_FILETYPES     = 'upgraded_upload_filetypes';
	public const UNLIMITED_THEMES              = 'unlimited_themes';
	public const UPLOAD_PLUGINS                = 'upload-plugins';
	public const UPLOAD_THEMES                 = 'upload-themes';
	public const UPLOAD_VIDEO_FILES            = 'upload-video-files';
	public const VAULTPRESS_AUTOMATED_RESTORES = 'vaultpress-automated-restores';
	public const VAULTPRESS_BACKUP_ARCHIVE     = 'vaultpress-backup-archive';
	public const VAULTPRESS_BACKUPS            = 'vaultpress-backups';
	public const VAULTPRESS_SECURITY_SCANNING  = 'vaultpress-security-scanning';
	public const VAULTPRESS_STORAGE_SPACE      = 'vaultpress-storage-space';
	public const VIDEO_HOSTING                 = 'video-hosting';
	public const VIDEOPRESS                    = 'videopress';
	public const WHATSAPP_BUTTON               = 'whatsapp-button';
	public const WOOP                          = 'woop';
	public const WORDADS                       = 'wordads';
	public const WORDADS_JETPACK               = 'wordads-jetpack';

	/*
	 * Private const array of features with sub-array of purchases that include that feature. Sorted alphabetically.
	 */
	private const FEATURES_MAP = array(
		/*
		 * ADVANCED_SEO - Called seo-tools in Jetpack.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Business or up plan.
		 * - Jetpack sites with any plan.
		 * - Not VIP sites.
		 */
		self::ADVANCED_SEO                  => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::JETPACK_ALL_SITES,
		),
		// AKISMET - @todo Jetpack free plans do not support Akismet.
		self::AKISMET                       => array(
			self::JETPACK_ALL_SITES,
		),
		self::ATOMIC                        => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::WPCOM_MARKETPLACE_PLANS,
		),
		// BACKUPS - Site has *any* kind of backups.
		self::BACKUPS                       => array(
			self::JETPACK_BACKUP_DAILY_PLANS,
			self::JETPACK_BACKUP_REALTIME_PLANS,
			self::JETPACK_BACKUP_T1_PLANS,
			self::JETPACK_BACKUP_T2_PLANS,
			self::JETPACK_PERSONAL_AND_HIGHER,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::WPCOM_PRO_PLANS,
		),
		self::CALENDLY                      => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_PREMIUM_PLANS,
			self::WP_P2_PLUS_MONTHLY,
		),
		self::CLASSIC_SEARCH                => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::WPCOM_PRO_PLANS,
			self::JETPACK_SEARCH,
			self::JETPACK_SEARCH_MONTHLY,
			self::JETPACK_COMPLETE_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::CONCIERGE                     => array(
			self::WPCOM_BUSINESS_PLANS,
			self::WPCOM_ECOMMERCE_PLANS,
		),
		self::CONCIERGE_BUSINESS            => array(
			self::WPCOM_BUSINESS_PLANS,
		),
		// CORE_AUDIO - core/audio requires a paid plan for uploading audio files.
		self::CORE_AUDIO                    => array(
			self::WP_P2_PLUS_MONTHLY,
			self::WPCOM_PERSONAL_AND_HIGHER_PLANS,
			self::JETPACK_PERSONAL_AND_HIGHER,
		),
		// CORE_COVER - core/cover requires a paid plan for uploading video files.
		self::CORE_COVER                    => array(
			self::WP_P2_PLUS_MONTHLY,
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_PREMIUM_PLANS,
		),
		// CORE_VIDEO - core/video requires a paid plan.
		self::CORE_VIDEO                    => array(
			self::WP_P2_PLUS_MONTHLY,
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_PREMIUM_PLANS,
		),
		self::CREDIT_VOUCHERS               => array(
			self::BUNDLE_PRO,
			self::BUNDLE_SUPER,
			self::BUNDLE_ENTERPRISE,
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::CUSTOM_DESIGN                 => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::CUSTOM_DOMAIN                 => array(
			self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
		),
		self::DONATIONS                     => array(
			self::WPCOM_PERSONAL_AND_HIGHER_PLANS,
			self::JETPACK_PERSONAL_AND_HIGHER,
		),
		// ECOMMERCE_MANAGED_PLUGINS - Can install the plugin bundle that comes with eCommerce plans.
		self::ECOMMERCE_MANAGED_PLUGINS     => array(
			self::WPCOM_ECOMMERCE_PLANS,
		),
		// EMAIL_SUBSCRIPTION - Represents having at least one product providing email
		self::EMAIL_SUBSCRIPTION            => array(
			self::WPCOM_EMAIL_PRODUCTS,
		),
		self::FREE_BLOG                     => array(
			self::WPCOM_ALL_SITES,
		),
		self::FULL_ACTIVITY_LOG             => array(
			self::JETPACK_BACKUP_DAILY_PLANS,
			self::JETPACK_BACKUP_REALTIME_PLANS,
			self::JETPACK_BACKUP_T1_PLANS,
			self::JETPACK_BACKUP_T2_PLANS,
			self::JETPACK_PERSONAL_AND_HIGHER,
			self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
			self::WPCOM_PRO_PLANS,
		),
		self::GOOGLE_ANALYTICS              => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PREMIUM_AND_HIGHER,
		),
		self::GOOGLE_MY_BUSINESS            => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_SECURITY_REALTIME_PLANS,
			self::JETPACK_COMPLETE_PLANS,
			self::JETPACK_SECURITY_T1_PLANS,
			self::JETPACK_SECURITY_T2_PLANS,
		),
		self::INSTALL_PLUGINS               => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::WPCOM_PRO_PLANS,
		),
		self::INSTALL_THEMES                => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::WPCOM_PRO_PLANS,
		),
		/*
		 * LEGACY_UNLIMITED_SPACE_2019 - Provides unlimited upload space if initially purchased
		 * before 2019-08-01. See mu-plugins/legacy-unlimited-space-plans.php
		 */
		self::LEGACY_UNLIMITED_SPACE_2019   => array(
			self::WPCOM_BUSINESS_PLANS,
			self::WPCOM_ECOMMERCE_PLANS,
		),
		self::LIVE_SUPPORT                  => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		// MANAGE_PLUGINS - Atomic only feature. Can upload, install, and activate any 3rd party plugin.
		self::MANAGE_PLUGINS                => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
		),
		self::NO_ADVERTS_NO_ADVERTS_PHP     => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		// NO_WPCOM_BRANDING - Enable the ability to hide the WP.com branding in the site footer.
		self::NO_WPCOM_BRANDING             => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
		),
		self::OPENTABLE                     => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_PREMIUM_PLANS,
		),
		// OPTIONS_PERMALINK - Atomic only feature. Enables Settings -> Permalinks menu item & options-permalink page.
		self::OPTIONS_PERMALINK             => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
		),
		self::PAYMENTS                      => array(
			self::WPCOM_PERSONAL_AND_HIGHER_PLANS,
		),
		self::POLLDADDY                     => array(
			self::JETPACK_BUSINESS_PLANS,
		),
		// PREMIUM_CONTENT_CONTAINER - premium-content requires a paid plan.
		self::PREMIUM_CONTENT_CONTAINER     => array(
			self::WPCOM_PERSONAL_AND_HIGHER_PLANS,
			self::WP_P2_PLUS_MONTHLY,
			self::JETPACK_PERSONAL_AND_HIGHER,
		),
		self::PREMIUM_THEMES                => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::PRIVATE_WHOIS                 => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::REAL_TIME_BACKUPS             => array(
			self::JETPACK_BACKUP_REALTIME_PLANS,
			self::JETPACK_BACKUP_T1_PLANS,
			self::JETPACK_BACKUP_T2_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_COMPLETE_PLANS,
			self::JETPACK_SECURITY_REALTIME_PLANS,
			self::JETPACK_SECURITY_T1_PLANS,
			self::JETPACK_SECURITY_T2_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::WPCOM_PRO_PLANS,
		),
		self::RECURRING_PAYMENTS            => array(
			self::WPCOM_PERSONAL_AND_HIGHER_PLANS,
		),
		/*
		 * REPUBLICIZE
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Jetpack sites with Premium or up plan.
		 */
		self::REPUBLICIZE                   => array(
			self::WP_P2_PLUS_MONTHLY,
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PREMIUM_AND_HIGHER,
		),
		self::SEARCH                        => array(
			self::WPCOM_SEARCH,
			self::WPCOM_SEARCH_MONTHLY,
			self::WP_P2_PLUS_MONTHLY,
		),
		/*
		 * SECURITY_SETTINGS - Initially added to determine whether to show /settings/security.
		 * More info: https://github.com/Automattic/wp-calypso/issues/51820
		 *
		 * Active for:
		 * - Simple and Atomic sites with Business or up plan.
		 * - Jetpack sites with any plan.
		 */
		self::SECURITY_SETTINGS             => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::JETPACK_ALL_SITES,
		),
		self::SEND_A_MESSAGE                => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_ALL_SITES,
		),
		/*
		 * SET_PRIMARY_CUSTOM_DOMAIN - Set custom domain as primary.
		 * It allows to set a custom domain of the site as primary.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Blogger plans
		 * - Personal plans
		 */
		self::SET_PRIMARY_CUSTOM_DOMAIN     => array(
			self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
			self::YOAST_PREMIUM,
		),
		self::SIMPLE_PAYMENTS               => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_COMPLETE_PLANS,
			self::JETPACK_SECURITY_DAILY_PLANS,
			self::JETPACK_SECURITY_REALTIME_PLANS,
		),
		self::SOCIAL_PREVIEWS               => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::JETPACK_ALL_SITES,
		),
		self::SPACE                         => array(
			self::WPCOM_ALL_SITES,
		),
		// SUPPORT - Everybody needs somebody
		self::SUPPORT                       => array(
			self::WPCOM_ALL_SITES,
			self::JETPACK_PERSONAL_AND_HIGHER,
		),
		self::UNLIMITED_THEMES              => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::UPGRADED_UPLOAD_FILETYPES     => array(
			self::SPACE_3GB,
			self::SPACE_10GB,
			self::SPACE_25GB,
			self::SPACE_50GB,
			self::SPACE_100GB,
			self::SPACE_200GB,
			self::SPACE_UNLIMITED,
			self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
			self::WP_P2_PLUS_MONTHLY,
		),
		self::UPLOAD_PLUGINS                => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::WPCOM_PRO_PLANS,
		),
		self::UPLOAD_THEMES                 => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::WPCOM_PRO_PLANS,
		),
		/*
		 * UPLOAD_VIDEO_FILES - This feature is linked to the ability to upload video files to the website.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Jetpack sites with any plan.
		 */
		self::UPLOAD_VIDEO_FILES            => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_ALL_SITES,
		),
		self::VAULTPRESS_AUTOMATED_RESTORES => array(
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::VAULTPRESS_BACKUP_ARCHIVE     => array(
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::VAULTPRESS_BACKUPS            => array(
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::VAULTPRESS_SECURITY_SCANNING  => array(
			self::JETPACK_BUSINESS_PLANS,
		),
		self::VAULTPRESS_STORAGE_SPACE      => array(
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		/*
		 * VIDEO_HOSTING - Host video effortlessly and deliver it at high speeds to your viewers.
		 * https://jetpack.com/features/design/video-hosting/
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Jetpack sites with Premium or up plan.
		 */
		self::VIDEO_HOSTING                 => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PREMIUM_AND_HIGHER,
		),
		self::VIDEOPRESS                    => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::WP_P2_PLUS_MONTHLY,
			self::JETPACK_PERSONAL_AND_HIGHER,
			self::WPCOM_VIDEOPRESS,
			self::WPCOM_VIDEOPRESS_PRO,
			self::JETPACK_VIDEOPRESS,
			self::JETPACK_VIDEOPRESS_MONTHLY,
		),
		self::WHATSAPP_BUTTON               => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_ALL_SITES,
		),
		/*
		 * WOOP - WooCommerce on all Plans is available to install.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Business or up plan.
		 * - Not Jetpack sites
		 */
		self::WOOP                          => array(
			self::WPCOM_PRO_PLANS,
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
		),
		self::WORDADS                       => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PREMIUM_AND_HIGHER,
		),
		/*
		 * WORDADS_JETPACK - `wordads-jetpack` is maintained as a legacy alias of `wordads` which was used to gate
		 * the feature in old versions of Jetpack.
		 * @see https://github.com/Automattic/jetpack/blob/c4f8fe120e1286e85f49e20e0f7fe22e44641449/projects/plugins/jetpack/class.jetpack-plan.php#L330.
		 */
		self::WORDADS_JETPACK               => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PREMIUM_AND_HIGHER,
		),
	);

	/**
	 * Checks whether the given feature is declared in our map.
	 *
	 * @param string $feature The featue to check.
	 *
	 * @return bool Whether the given feature exists.
	 */
	public static function feature_exists( $feature ) {
		return ! empty( self::FEATURES_MAP[ $feature ] );
	}

	/**
	 * Given a primitive type $needle, and an array $haystack, recursively
	 * search $haystack for an instance of $needle. If arrays are encountered,
	 * they will also be searched. Only strict comparisons are used.
	 *
	 * @param mixed $needle   - What to look for
	 * @param array $haystack - Array of items to check, may contain other arrays
	 *
	 * @return bool Is the needle in the haystack somewhere?
	 */
	public static function in_array_recursive( $needle, $haystack ) {
		foreach ( $haystack as $item ) {
			if ( is_array( $item ) ) {
				if ( self::in_array_recursive( $needle, $item ) ) {
					return true;
				}
			} elseif ( $item === $needle ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * Given an array of $purchases and a single feature name, consult the FEATURES_MAP to determine if the feature
	 * is included in one of the $purchases.
	 *
	 * Use the function wpcom_site_has_feature( $feature ) to determine if a site has access to a certain feature.
	 *
	 * @param string $feature A singular feature.
	 * @param array  $purchases A collection of purchases.
	 * @param bool   $is_wpcom_site Whether the site is a WP.com site. True for Simple/Atomic sites, false for self-hosted Jetpack sites.
	 *
	 * @return bool Is the feature included in one of the purchases.
	 */
	public static function has_feature( $feature, $purchases, $is_wpcom_site ) {
		if ( ! self::feature_exists( $feature ) ) {
			return false;
		}

		$eligible_purchases = self::FEATURES_MAP[ $feature ];

		// Automatically grant features that don't require any purchase.
		if (
			( $is_wpcom_site && in_array( self::WPCOM_ALL_SITES, $eligible_purchases ) ) ||
			( ! $is_wpcom_site && in_array( self::JETPACK_ALL_SITES, $eligible_purchases ) )
		) {
			return true;
		}

		foreach ( $purchases as $purchase ) {
			if ( self::in_array_recursive( $purchase, $eligible_purchases ) ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * Return a list of all possible feature slugs.
	 *
	 * @return array An array of strings like 'premium-themes', one for each possible feature slug.
	 */
	public static function get_feature_slugs() {
		return array_keys( self::FEATURES_MAP );
	}
}
