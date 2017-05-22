<?php
/**
 * Class WPCOMSH_Log
 * This is an interface for logging arbitrary data to wpcom logstash cluster.
 * This auto-initializes and provides a hook to log data:
 * ```
 * do_action(  'wpcomsh_log', "test" );
 * ```
 * You can see logs in Kibana, log2logstash index, `feature:automated-transfer`
 */
class WPCOMSH_Log {
	static protected $log_endpoint = 'https://public-api.wordpress.com/rest/v1.1/automated-transfers/log';
	private static $instance;
	private $log_queue = array();
	private $has_shutdown_hook = false;
	private $siteurl;

	/**
	 * This instantiates the logging system. Because constructor is private, it can be only set up with `init` or `unsafe_direct_log`.
	 * `init` respects `at_options_logging_on` option. This essentially turns logging on/off so that we don't flood
	 * endpoint with too many requests.
	 * This is to be hooked into wp `init` hook.
	 */
	public static function init() {
		if ( ! get_option( 'at_options_logging_on' ) ) {
			return;
		}

		if ( self::$instance ) {
			return;
		}

		self::$instance = new self();
		self::$instance->add_hooks();
	}

	/**
	 * This method bypasses `at_options_logging_on` check.
	 * It is intended to be used when we are sure we want to send logs to logstash and
	 * we are sure that we don't fire it off frequently. Good example of when we want to use this
	 * is during the site setup process
	 * @param $message
	 */
	public static function unsafe_direct_log( $message ) {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}
		self::$instance->log( $message );
	}


	private function __construct() {
		$this->siteurl = get_site_url();
	}
	private function add_hooks() {
		add_action( 'wpcomsh_log', array( $this, 'log' ), 1 );
	}

	public function log( $message ) {
		$this->log_queue[] = array( "message" => $message );
		if ( ! $this->has_shutdown_hook ) {
			register_shutdown_function( array( $this, 'send_to_api' ) );
			$this->has_shutdown_hook = true;
		}
	}

	public function send_to_api() {
		if ( count( $this->log_queue ) > 0 ) {
			$payload = array(
				'siteurl' => $this->siteurl,
				'messages' =>$this->log_queue
			);

			wp_remote_post( self::$log_endpoint, array( 'body' => array( 'error' => json_encode( $payload ) ) ) );
		}
	}
}
add_action( 'init', array( 'WPCOMSH_Log', 'init' ) );
