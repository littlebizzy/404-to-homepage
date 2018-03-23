<?php
/*
Plugin Name: 404 To Homepage
Plugin URI: https://www.littlebizzy.com/plugins/404-to-homepage
Description: Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.
Version: 1.0.10
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: NTFTHP
*/

// Admin Notices module
require_once dirname(__FILE__).'/admin-notices.php';
NTFTHP_Admin_Notices::instance(__FILE__);

/**
 * Admin Notices Multisite check
 * Uncomment //return to disable this plugin on Multisite installs
 */
require_once dirname(__FILE__).'/admin-notices-ms.php';
if (false !== \LittleBizzy\FourZeroFourToHomepage\Admin_Notices_MS::instance(__FILE__)) {
	//return;
}

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
define('NTFTHP_FILE', __FILE__);
define('NTFTHP_PATH', dirname(NTFTHP_FILE));
define('NTFTHP_VERSION', '1.0.10');


/* 404 hooks */

/**
 * Front-end function check
 */
function ntfthp_is_frontend() {
	return is_admin()? false : !((defined('DOING_CRON') && DOING_CRON) || (defined('XMLRPC_REQUEST') && XMLRPC_REQUEST));
}

/**
 * Early method to detect 404 context
 * Minimum WP version: 4.5.0
 */
add_filter('pre_handle_404', 'ntfthp_pre_handle_404', 0, 2);
function ntfthp_pre_handle_404($preempt, $wp_query) {
	if ($wp_query->is_404() && ntfthp_is_frontend()) {
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
	if (is_404() && ntfthp_is_frontend()) {
		require_once(NTFTHP_PATH.'/404-redirect.php');
		NTFTHP_Redirect::go();
	}
}
