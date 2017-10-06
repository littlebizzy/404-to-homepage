=== Redirect 404 To Homepage ===
Contributors: littlebizzy
Tags: 404, not found, error, errors, missing, 301, redirect, redirection, page, homepage, home, htaccess
Requires at least: 4.4
Tested up to: 4.8
Stable tag: 1.0.3
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.


== Description ==

### Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.

404 To Homepage is a simple WordPress plugin for redirecting all 404 "Not Found" errors to the homepage. The reason for doing this is to avoid user confusion (or lost leads), and to avoid abuse causes by bots that ping your site with non-existent URLs which can negatively effect search engine indexing. Additionally, it can totally eliminate the warnings created in Google GSC (Webmasters) in regard to 404 errors that begin piling up over time, which quite often are not even the fault of your website.

It should be noted, however, that this method is not recommended for all websites. For example, large blogs or magazines that rely heavily on search engine traffic (such as a newspaper) should probably not use this plugin. This is because in many cases, 404 errors should be analyzed on a regular basis and then 301 redirected to the appropriate page. Rather, this plugin is best suited for small businesses or websites with a limited amount of content, and limited staff, who are not publishing massive amounts of content. In such cases, we suggest monitoring 404 errors for perhaps a few months, redirecting the ones that are legitimate, and then consider activating this plugin after that point.

Unlike other 404 redirect plugins, 404 To Homepage "removes" any pre-existing HTTP headers, and executes ONLY a 301 redirect header pointed at the site's homepage. In other words, it does not allow any "previous" headers to be sent in order to avoid confusing browsers or Google bots. (NOTE: while any previous headers sent by WordPress/PHP engine are ignored, it's possible for your server i.e. Apache or Nginx to override things with header rules of their own... please check to ensure no conflicts.)

#### Compatibility

* __OS:__ Linux
* __SERVER:__ Apache, Nginx
* __PHP:__ 5.5+
* __DATABASE:__ MySQL

#### Plugin Features

* __SETTINGS:__ None
* __MUST-USE:__ Supported
* __MULTI-SITE:__ Support unknown
* __TRANSIENTS:__ None
* __WP_OPTIONS:__ None
* __LOCALIZATION:__ None
* __UNINSTALL:__ Removes plugin files only (no stored data exists)

#### Future Goals

* Localization (translation support)
* HTTP header experimentation
* More features (based on user suggestions)
* Code maintenance/improvements

#### Code Inspiration

* [All 404 Redirect to Homepage](https://wordpress.org/plugins/all-404-redirect-to-homepage/)
* [404 Redirection](https://wordpress.org/plugins/404-redirection/)
* [Redirect 404 Error Page to Homepage](https://wordpress.org/plugins/redirect-404-error-page-to-homepage/)

#### Extra Notes

This is a version that uses the early WP hook 'pre_handle_404' to avoid unnecessary code execution (posts types creation and taxonomies). But this hook is available only from WP 4.5.0, so the plugin declares also the 'wp' standard hook just in case for older versions.

Before to do the redirection to the homepage, there is a procedure that removes any existing previous header, so only 301 header will be sent in response to the HTTP request. You can see the headers in chrome from Network tab and checking preserve log. For Firefox you can use the Live HTTP headers addon, for example.

*We released this plugin in response to our managed hosting clients asking for better access to their server environment, and our primary goal will likely remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you consider all of the above mentioned goals before leaving reviews of this plugin, thanks!*


== Installation ==

1. Upload the plugin files to `/wp-content/plugins/404-to-homepage-littlebizzy`
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Test the plugin is working correctly by loading a non-existent URL of your website


== Frequently Asked Questions ==

= Does this plugin alter my 404.php template? =

No, it automatically adds a 404 header using WordPress filters/hooks.

= How can I change this plugin's settings? =

This plugin does not have a settings page and is designed for speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.


== Changelog ==

= 1.0.3 =
* recommended plugins

= 1.0.2 =
* updated plugin meta
* tested with WordPress 4.8

= 1.0.1 =
* updated plugin meta

= 1.0 =
* Initial release