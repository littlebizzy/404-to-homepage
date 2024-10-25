<?php
/*
Plugin Name: 404 To Homepage
Plugin URI: https://www.littlebizzy.com/plugins/404-to-homepage
Description: Redirects 404 errors to homepage
Version: 2.0.1
Requires PHP: 7.0
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
    // skip WP Admin, WP Cron, XML-RPC, REST API, AJAX, WP-CLI, and specific URL patterns
    if ( is_admin() || defined( 'DOING_CRON' ) || defined( 'XMLRPC_REQUEST' ) || defined( 'REST_REQUEST' ) || defined( 'DOING_AJAX' ) || defined( 'WP_CLI' ) || 
         strpos( $_SERVER['REQUEST_URI'], '/wp-admin/' ) !== false || 
         strpos( $_SERVER['REQUEST_URI'], '/wp-includes/' ) !== false || 
         strpos( $_SERVER['REQUEST_URI'], '/wp-content/' ) !== false || 
         strpos( $_SERVER['REQUEST_URI'], '/wp-json/' ) !== false || 
         strpos( $_SERVER['REQUEST_URI'], '/.well-known/' ) !== false || 
         ( strpos( basename( $_SERVER['REQUEST_URI'] ), 'wp-' ) === 0 && substr( $_SERVER['REQUEST_URI'], -4 ) === '.php' ) ||  // wildcard for wp-*.php files
         strpos( $_SERVER['REQUEST_URI'], '/robots.txt' ) !== false || 
         strpos( $_SERVER['REQUEST_URI'], '/ads.txt' ) !== false ||  
         strpos( $_SERVER['REQUEST_URI'], '/security.txt' ) !== false || 
         strpos( $_SERVER['REQUEST_URI'], '/humans.txt' ) !== false || 
         strpos( $_SERVER['REQUEST_URI'], '?s=' ) !== false ) {  // search results
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
