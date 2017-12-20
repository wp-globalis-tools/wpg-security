<?php
/**
 * Plugin Name:         WPG Disable REST API
 * Plugin URI:          https://github.com/wp-globalis-tools/wpg-security
 * Description:         Disable REST API if unused
 * Author:              Pierre Dargham, Globalis Media Systems
 * Author URI:          https://www.globalis-ms.com/
 * License:             GPL2
 *
 * Version:             0.2.0
 * Requires at least:   4.0.0
 * Tested up to:        4.7.8
 */

namespace Globalis\WP\DisableRESTAPI;

if (!defined('WPG_ENABLE_REST_API') || true !== WPG_ENABLE_REST_API) {
    remove_action('init', 'rest_api_init');
    remove_action('parse_request', 'rest_api_loaded');
    remove_action('auth_cookie_malformed', 'rest_cookie_collect_status');
    remove_action('auth_cookie_expired', 'rest_cookie_collect_status');
    remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
    remove_action('auth_cookie_bad_hash', 'rest_cookie_collect_status');
    remove_action('auth_cookie_valid', 'rest_cookie_collect_status');
    remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('template_redirect', 'rest_output_link_header', 11);
    add_filter('rest_enabled', '__return_false');
    add_filter('rest_jsonp_enabled', '__return_false');
}
