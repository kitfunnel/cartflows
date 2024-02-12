<?php
/**
 * Plugin Name: CartFlows
 * Plugin URI: https://cartflows.com/
 * Description: Create beautiful checkout pages & sales flows for WooCommerce.
 * Version: 2.0.3
 * Author: CartFlows Inc
 * Author URI: https://cartflows.com/
 * Text Domain: cartflows
 * WC requires at least: 3.0
 * WC tested up to: 8.5.1
 * Elementor tested up to: 3.14.1
 *
 * @package CartFlows
 */

/**
 * Set constants.
 */
define( 'CARTFLOWS_FILE', __FILE__ );

/**
 * Loader
 */
require_once 'classes/class-cartflows-loader.php';

update_option( 'wc_am_client_cartflows_activated', 'Activated' );
update_option( 'wc_am_client_cartflows_api_key', '1415b451be1a13c283ba771ea52d38bb' );
