<?php
/**
 * Plugin Name:         WPG Disable xmlrpc
 * Plugin URI:          https://github.com/wp-globalis-tools/wpg-security
 * Description:         Disable xmlrpc
 * Author:              Pierre Dargham, Globalis Media Systems
 * Author URI:          https://www.globalis-ms.com
 *
 * Version:             0.1.0
 * Requires at least:   4.0.0
 * Tested up to:        4.7.2
 */

namespace Globalis\Security\DisableXMLRPC;

add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');
