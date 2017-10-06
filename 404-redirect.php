<?php

/**
 * 404 To Homepage - Redirect class
 *
 * @package 404 To Homepage
 * @subpackage 404 To Homepage Redirect
 */
class NTFTHP_Redirect {



	/**
	 * Do the redirect in a header-clean way
	 */
	public static function go() {

		// Remove existing headers
		self::remove_headers();

		// Permanent redirect
		wp_redirect(home_url(), 301);

		// End
		die;
	}



	/**
	 * Remove any existing header
	 */
	private static function remove_headers() {

		// Check headers list
		$headers = @headers_list();
		if (!empty($headers) && is_array($headers)) {

			// Check header_remove function (PHP 5 >= 5.3.0, PHP 7)
			$by_function = function_exists('header_remove');

			// Enum and clean
			foreach ($headers as $header) {
				list($k, $v) = array_map('trim', explode(':', $header, 2));
				$by_function? @header_remove($k) : @header($k.':');
			}
		}
	}



}