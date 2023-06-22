<?php
/**
 * Plugin Name: Owner REST Endpoint (salcode)
 * Plugin URI: https://github.com/salcode/owner-rest-endpoint
 * Description: Adds a REST API endpoint at the path "salcode/v1/owner" (e.g. https://example.com/wp-json/salcode/v1/owner).
 * Version: 1.0.0
 * Update URI: https://github.com/salcode/owner-rest-endpoint
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * License: apache-2.0
 * Text Domain: owner-rest-endpoint
 * Domain Path: /languages
 *
 * @package owner-rest-endpoint
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'rest_api_init', 'salcode_owner_rest');

function salcode_owner_rest() {
	register_rest_route(
		'salcode/v1',
		'/owner',
		[
			'callback' => function() {
				return [
					'name' => [
						'first' => 'Sal',
						'last' => 'Ferrarello'
					],
					'wcus' => [
						2015, 2016
					],
				];
			},
			'permission_callback' => '__return_true',
		]
	);
}
