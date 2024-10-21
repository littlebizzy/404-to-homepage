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
    // skip WP Admin, WP Cron, XML-RPC, REST API, AJAX, and WP-CLI requests
    if ( is_admin() || defined( 'DOING_CRON' ) || defined( 'XMLRPC_REQUEST' ) || defined( 'REST_REQUEST' ) || defined( 'DOING_AJAX' ) || defined( 'WP_CLI' ) ) {
        return;
    }

    if ( headers_sent() ) {
        return;  // cannot redirect if headers are already sent
    }
    clear_headers();  // attempt to clear headers
    wp_safe_redirect( home_url(), 301 );  // perform 301 redirect to homepage
    exit;
}

// function to clear all existing headers
function clear_headers() {
    // get headers from headers_list()
    foreach ( headers_list() as $header ) {
        // skip malformed headers
        if ( strpos( $header, ':' ) === false ) {
            continue;
        }

        // split header into field and value
        list( $header_field, ) = explode( ':', $header, 2 );

        // remove the header after trimming
        header_remove( trim( $header_field ) );
    }
}

// hook into template_redirect to trigger the 404 redirection
add_action( 'template_redirect', function() {
    if ( is_404() ) {
        redirect_404_to_homepage();
    }
} );

// Ref: ChatGPT
