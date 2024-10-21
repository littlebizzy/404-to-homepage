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
Text Domain: 404-to-homepage
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

// class to handle redirection with header cleaning
class NTFTHP_Redirect {

    // function to handle redirection
    public static function go() {
        self::remove_headers();
        wp_redirect(home_url(), 301);
        die;
    }

    // function to remove any existing headers
    private static function remove_headers() {
        $headers = @headers_list();
        if (!empty($headers) && is_array($headers)) {
            $by_function = function_exists('header_remove');
            foreach ($headers as $header) {
                list($k, $v) = array_map('trim', explode(':', $header, 2));
                $by_function ? @header_remove($k) : @header($k . ':');
            }
        }
    }
}

// hook into template_redirect to trigger the 404 redirection
add_action('template_redirect', function() {
    if (is_404()) {
        NTFTHP_Redirect::go();
    }
});

// Ref: ChatGPT
