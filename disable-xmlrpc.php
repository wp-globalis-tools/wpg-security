<?php
/**
 * Plugin Name:         WPG Disable XMLRPC
 * Plugin URI:          https://github.com/wp-globalis-tools/wpg-security
 * Description:         Disable XMLRPC if unused
 * Author:              Pierre Dargham, Globalis Media Systems
 * Author URI:          https://www.globalis-ms.com/
 * License:             GPL2
 *
 * Version:             0.2.0
 * Requires at least:   4.0.0
 * Tested up to:        4.7.8
 */

namespace Globalis\WP\DisableXMLRPC;

if (!defined('WPG_ENABLE_XMLRPC') || true !== WPG_ENABLE_XMLRPC) {
    remove_action('wp_head', 'rsd_link');
    add_filter('xmlrpc_enabled', '__return_false');
}
