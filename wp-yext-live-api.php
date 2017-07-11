<?php
/**
 * WP Yext Live API (http://developer.yext.com/docs/)
 *
 * @package WP-Yext-API
 */
 
 /*
 * Plugin Name: WP Yext Live API
 * Plugin URI: https://github.com/wp-api-libraries/wp-yext-api
 * Description: Perform API requests to Yext Live in WordPress.
 * Author: WP API Libraries
 * Version: 1.0.0
 * Author URI: https://wp-api-libraries.com
 * GitHub Plugin URI: https://github.com/wp-api-libraries/wp-yext-api
 * GitHub Branch: master
 */
 
 
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! class_exists( 'YextLiveAPI' ) ) {

	/**
	 * YextLiveAPI Class.
	 */
	class YextLiveAPI {

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
		
		/* LIVE API. */
		
		public function get_menu( $list_id ) {
			
		}
		
		public function get_bios() {
			// https://liveapi.yext.com/v2/accounts/{accountId}/bios/{listId}
		}
		
		public function get_products() {
			
		}
		
		public function get_events() {
			
		}
		
		public function get_language_profile() {
			// https://liveapi.yext.com/v2/accounts/{accountId}/locations/{locationId}/profiles/{languageCode}
		}
		
		public function get_all_location_languages() {
			
		}
		
		public function get_location() {
			
		}
		
		public function get_locations() {
			
		}
		
		public function get_locations_geosearch() {
			
		}
	}
}
