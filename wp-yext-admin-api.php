<?php
/**
 * WP Yext API (http://developer.yext.com/docs/)
 *
 * @package WP-Yext-API
 */
 
 /*
 * Plugin Name: WP Yext Admin API
 * Plugin URI: https://github.com/wp-api-libraries/wp-yext-api
 * Description: Perform API requests to Yext Admin in WordPress.
 * Author: WP API Libraries
 * Version: 1.0.0
 * Author URI: https://wp-api-libraries.com
 * GitHub Plugin URI: https://github.com/wp-api-libraries/wp-yext-api
 * GitHub Branch: master
 */
 
 
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! class_exists( 'YextAdminAPI' ) ) {

	/**
	 * YextAdminAPI Class.
	 */
	class YextAdminAPI {

		/**
		 * API Key.
		 *
		 * @var string
		 */
		static private $api_key;
		
		/**
		 * Account ID.
		 *
		 * @var string
		 */
		static private $account_id;
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://api.yext.com';
		
		
		/**
		 * __construct function.
		 *
		 * @access public
		 * @param mixed $api_key API Key.
		 * @return void
		 */
		public function __construct( $api_key, $account_id ) {
			static::$api_key = $api_key;
		}

		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {
			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );
			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'wp-zendesk-helpcenter-api' ), $code ) );
			}
			$body = wp_remote_retrieve_body( $response );
			return json_decode( $body );
		}
		
		/* ADMINISTRATION. */
		
		public function get_available_services() {
			// https://api.yext.com/v2/accounts/{accountId}/availableservices
		}
		
		public function create_new_location_request() {
			
		}
		
		public function create_existing_location_request() {
			
		}
		
		public function get_all_add_requests() {
			
		}
		
		public function get_add_request_status() {
			
		}
		
		public function get_account_services() {
			
		}
		
		public function get_all_accounts() {
			
		}
		
		public function get_account_details() {
			
		}
		
		public function cancel_service() {
			// https://api.yext.com/v2/accounts/{accountId}/cancelservices
		}

	}
}
