<?php
namespace MunwisTheme\Security;

/**
 * Hardening Class
 * 
 * Enhances WordPress security by removing unnecessary headers and disabling vulnerable features.
 */
class Hardening {

	/**
	 * Constructor
	 */
	public function __construct() {
		// Remove WordPress version generator
		remove_action( 'wp_head', 'wp_generator' );
		add_filter( 'the_generator', '__return_empty_string' );

		// Remove Windows Live Writer manifest link
		remove_action( 'wp_head', 'wlwmanifest_link' );

		// Remove RSD link
		remove_action( 'wp_head', 'rsd_link' );

		// Disable XML-RPC completely
		add_filter( 'xmlrpc_enabled', '__return_false' );
		
		// Remove X-Pingback header
		add_filter( 'wp_headers', [ $this, 'remove_pingback_header' ] );

		// Disable WP REST API for non-authenticated users (Optional, but good for enterprise if not using headless)
		// add_filter( 'rest_authentication_errors', [ $this, 'restrict_rest_api' ] );
	}

	/**
	 * Remove X-Pingback header
	 *
	 * @param array $headers The HTTP headers.
	 * @return array
	 */
	public function remove_pingback_header( $headers ) {
		unset( $headers['X-Pingback'] );
		return $headers;
	}

	/**
	 * Restrict REST API to logged in users only
	 *
	 * @param mixed $result Error or null.
	 * @return \WP_Error|null|bool
	 */
	public function restrict_rest_api( $result ) {
		if ( ! empty( $result ) ) {
			return $result;
		}
		if ( ! is_user_logged_in() ) {
			return new \WP_Error(
				'rest_not_logged_in',
				__( 'You are not currently logged in.', 'munwis-theme' ),
				[ 'status' => 401 ]
			);
		}
		return $result;
	}
}
