<?php
/**
 * Plugin Name:         WPG Disable Rest API
 * Plugin URI:          https://github.com/wp-globalis-tools/wpg-security
 * Description:         Disable Rest API
 * Author:              Pierre Dargham, Globalis Media Systems
 * Author URI:          https://www.globalis-ms.com
 *
 * Version:             0.1.0
 * Requires at least:   4.0.0
 * Tested up to:        4.7.2
 */

namespace Globalis\Security\DisableRestAPI;

remove_action('init',                     'rest_api_init');
remove_action('parse_request',            'rest_api_loaded');
remove_action('auth_cookie_malformed',    'rest_cookie_collect_status');
remove_action('auth_cookie_expired',      'rest_cookie_collect_status');
remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_hash',     'rest_cookie_collect_status');
remove_action('auth_cookie_valid',        'rest_cookie_collect_status');
remove_action('xmlrpc_rsd_apis',          'rest_output_rsd');
remove_action('wp_head',                  'rest_output_link_wp_head');
remove_action('template_redirect',        'rest_output_link_header', 11);

add_filter('rest_enabled',       '__return_false');
add_filter('rest_jsonp_enabled', '__return_false');
