<?php

namespace Globalis\Security\DisableXMLRPC;

add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');
