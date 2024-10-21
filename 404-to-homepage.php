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
    wp_safe_redirect( home_url(), 301 );
    exit;
}

// function to remove any existing headers
function clear_headers() {
    // Get headers (headers_list() always returns an array)
    $headers = headers_list();

    // Early return if no headers exist
    if ( empty( $headers ) ) {
        return;
    }

    // Check once if the header_remove function exists
    $can_remove_header = function_exists( 'header_remove' );

    foreach ( $headers as $header ) {
        // Ensure the header contains ':' to split it correctly
        if ( strpos( $header, ':' ) !== false ) {
            // Manually trim the header field (name part of the header)
            $parts = explode( ':', $header, 2 );
            $header_field = trim( $parts[0] );

            // Remove or reset the header based on availability of header_remove function
            if ( $can_remove_header ) {
                header_remove( $header_field );
            } else {
                header( $header_field . ':' );
            }
        }
    }
}

// hook into template_redirect to trigger the 404 redirection
add_action( 'template_redirect', function() {
    if ( is_404() ) {
        redirect_404_to_homepage();
    }
} );

// Ref: ChatGPT
