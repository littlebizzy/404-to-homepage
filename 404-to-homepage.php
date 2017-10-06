<?php
/*
Plugin Name: 404 To Homepage
Plugin URI: https://www.littlebizzy.com/plugins/404-to-homepage
Description: Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.
Version: 1.0.3
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/


/* Initialization */

// Avoid script calls via plugin URL
if (!function_exists('add_action'))
	die;

// This plugin constants
define('NTFTHP_FILE', __FILE__);
define('NTFTHP_PATH', dirname(NTFTHP_FILE));
define('NTFTHP_VERSION', '1.0.3');


/* 404 hooks */

/**
 * Early method to detect 404 context
 * Minimum WP version: 4.5.0
 */
add_filter('pre_handle_404', 'ntfthp_pre_handle_404', 0, 2);
function ntfthp_pre_handle_404($preempt, $wp_query) {
	if ($wp_query->is_404()) {
		require_once(NTFTHP_PATH.'/404-redirect.php');
		NTFTHP_Redirect::go();
	}
	return $preempt;
}

/**
 * Detect 404 on 'wp' hook
 * For any WP version
 */
add_action('wp', 'ntfthp_wp');
function ntfthp_wp() {
	if (is_404()) {
		require_once(NTFTHP_PATH.'/404-redirect.php');
		NTFTHP_Redirect::go();
	}
}


/* Plugin suggestions */

// Admin loader
if (is_admin()) {//update_option('ntfhp_dismissed_on', '', true);
	$timestamp = (int) get_option('ntfhp_dismissed_on');
	if (empty($timestamp) || (time() - $timestamp) > (90 * 86400)) {
		require_once(NTFTHP_PATH.'/admin-suggestions.php');
		NTFTHP_Admin_Suggestions::instance();
	}
}