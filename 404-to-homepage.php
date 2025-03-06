<?php
/*
Plugin Name: 404 To Homepage
Plugin URI: https://www.littlebizzy.com/plugins/404-to-homepage
Description: Redirects 404 errors to homepage
Version: 2.0.2
Requires PHP: 7.0
Tested up to: 6.7
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Update URI: false
GitHub Plugin URI: littlebizzy/404-to-homepage
Primary Branch: master
Text Domain: 404-to-homepage
*/

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// override wordpress.org with git updater
add_filter( 'gu_override_dot_org', function( $overrides ) {
    $overrides[] = '404-to-homepage/404-to-homepage.php';
    return $overrides;
}, 999 );

// function to handle 404 redirection
function redirect_404_to_homepage() {
    // skip for wp-cli, cron, admin, ajax, xmlrpc, or rest requests
    if ( defined( 'WP_CLI' ) || defined( 'DOING_CRON' ) || is_admin() || defined( 'DOING_AJAX' ) || defined( 'XMLRPC_REQUEST' ) || defined( 'REST_REQUEST' ) ) {
        return;
    }

    // get the current request uri
    $uri = $_SERVER['REQUEST_URI'];

    // skip specific url patterns
    $skip_patterns = array(
        '/wp-admin/',
        '/wp-includes/',
        '/wp-content/',
        '/wp-json/',
        '/.well-known/',
        '/robots.txt',
        '/ads.txt',
        '/security.txt',
        '/humans.txt',
        '/favicon.ico',
        '/sitemap.xml',
        '/wp-sitemap.xml',
        '?s='
    );

    foreach ( $skip_patterns as $pattern ) {
        if ( strpos( $uri, $pattern ) !== false ) {
            return;
        }
    }

    // skip wildcard for wp-*.php files
    $basename = basename( $uri );
    if ( pathinfo( $basename, PATHINFO_EXTENSION ) === 'php' && strpos( $basename, 'wp-' ) === 0 ) {
        return;
    }

    if ( headers_sent() ) {
        return;
    }

    clear_headers();
    wp_safe_redirect( home_url(), 301 );
    exit;
}

// function to clear all existing headers
function clear_headers() {
    foreach ( headers_list() as $header ) {
        $header_name = strtok( $header, ':' );
        header_remove( $header_name );
    }
}

// hook into template_redirect to trigger the 404 redirection
add_action( 'template_redirect', function() {
    if ( is_404() ) {
        redirect_404_to_homepage();
    }
} );

// Ref: ChatGPT
