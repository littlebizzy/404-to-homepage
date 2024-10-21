<?php
/*
Plugin Name: 404 To Homepage
Plugin URI: https://www.littlebizzy.com/plugins/404-to-homepage
Description: Redirects 404 errors to homepage
Version: 2.0.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
GitHub Plugin URI: littlebizzy/404-to-homepage
Primary Branch: master
*/

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// disable wordpress.org updates for this plugin
add_filter( 'gu_override_dot_org', function( $overrides ) {
    $overrides[] = '404-to-homepage/404-to-homepage.php';
    return $overrides;
}, 999 );

// function to handle 404 redirection
function redirect_404_to_homepage() {
    clear_headers();
    wp_redirect(home_url(), 301);
    exit;
}

// function to remove any existing headers
function clear_headers() {
    $headers = @headers_list();
    if (!empty($headers) && is_array($headers)) {
        $has_header_remove = function_exists('header_remove');
        foreach ($headers as $header) {
            list($key, $value) = array_map('trim', explode(':', $header, 2));
            $has_header_remove ? @header_remove($key) : @header($key . ':');
        }
    }
}

// hook into template_redirect to trigger the 404 redirection
add_action('template_redirect', function() {
    if (is_404()) {
        redirect_404_to_homepage();
    }
});

// Ref: ChatGPT
