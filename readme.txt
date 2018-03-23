=== Redirect 404 To Homepage ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: 404, errors, redirect, 301, homepage
Requires at least: 4.4
Tested up to: 4.9
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.0.10
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: NTFTHP

Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.

== Description ==

Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.

* [**Join our free Facebook group for support**](https://www.facebook.com/groups/littlebizzy/)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/404-to-homepage)
* [Plugin GitHub](https://github.com/littlebizzy/404-to-homepage)
* [SlickStack](https://slickstack.io)
* [WP Lite Boilerplate](https://wplite.org)
* [Starter Theme](https://starter.littlebizzy.com)

#### The Long Version ####

404 To Homepage is a simple WordPress plugin for redirecting all 404 "Not Found" errors to the homepage. The reason for doing this is to avoid user confusion (or lost leads), and to avoid abuse causes by bots that ping your site with non-existent URLs which can negatively effect search engine indexing. Additionally, it can totally eliminate the warnings created in Google GSC (Webmasters) in regard to 404 errors that begin piling up over time, which quite often are not even the fault of your website.

It should be noted, however, that this method is not recommended for all websites. For example, large blogs or magazines that rely heavily on search engine traffic (such as a newspaper) should probably not use this plugin. This is because in many cases, 404 errors should be analyzed on a regular basis and then 301 redirected to the appropriate page. Rather, this plugin is best suited for small businesses or websites with a limited amount of content, and limited staff, who are not publishing massive amounts of content. In such cases, we suggest monitoring 404 errors for perhaps a few months, redirecting the ones that are legitimate, and then consider activating this plugin after that point.

Unlike other 404 redirect plugins, 404 To Homepage "removes" any pre-existing HTTP headers, and executes ONLY a 301 redirect header pointed at the site's homepage. In other words, it does not allow any "previous" headers to be sent in order to avoid confusing browsers or Google bots. (NOTE: while any previous headers sent by WordPress/PHP engine are ignored, it's possible for your server i.e. Apache or Nginx to override things with header rules of their own... please check to ensure no conflicts.)

This is a version that uses the early WP hook 'pre_handle_404' to avoid unnecessary code execution (posts types creation and taxonomies). But this hook is available only from WP 4.5.0, so the plugin declares also the 'wp' standard hook just in case for older versions.

Before to do the redirection to the homepage, there is a procedure that removes any existing previous header, so only 301 header will be sent in response to the HTTP request. You can see the headers in chrome from Network tab and checking preserve log. For Firefox you can use the Live HTTP headers addon, for example.

#### Plugin Features ####

* Settings Page: No
* Premium Version Available: Yes ([SEO Genius](https://www.littlebizzy.com/plugins/seo-genius))
* Includes Media (Images, Icons, Etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * Options: Yes
  * Creates New Tables: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: Yes (Use With [Autoloader](https://github.com/littlebizzy/autoloader))
* Multisite Support: No
* Uninstalls Data: Yes

#### WP Admin Notices ####

This plugin generates multiple [Admin Notices](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices) in the WP Admin dashboard. The first is a notice that fires during plugin activation which recommends several related free plugins that we believe will enhance this plugin's features; this notice will re-appear approximately once every 6 months as our code and recommendations evolve. The second is a notice that fires a few days after plugin activation which asks for a 5-star rating of this plugin on its WordPress.org profile page. This notice will re-appear approximately once every 9 months. These notices can be dismissed by clicking the **(x)** symbol in the upper right of the notice box. These notices may annoy or confuse certain users, but are appreciated by the majority of our userbase, who understand that these notices support our free contributions to the WordPress community while providing valuable (free) recommendations for optimizing their website.

If you feel that these notices are too annoying, than we encourage you to consider one or more of our upcoming premium plugins that combine several free plugin features into a single control panel, or even consider developing your own plugins for WordPress, if supporting free plugin authors is too frustrating for you. A final alternative would be to place the defined constant mentioned below inside of your `wp-config.php` file to manually hide this plugin's nag notices:

    define('DISABLE_NAG_NOTICES', true);

Note: This defined constant will only affect the notices mentioned above, and will not affect any other notices generated by this plugin or other plugins, such as one-time notices that communicate with admin-level users.

#### Code Inspiration ####

This plugin was partially inspired either in "code or concept" by the open-source software and discussions mentioned below:

* [All 404 Redirect to Homepage](https://wordpress.org/plugins/all-404-redirect-to-homepage/)
* [404 Redirection](https://wordpress.org/plugins/404-redirection/)
* [Redirect 404 Error Page to Homepage](https://wordpress.org/plugins/redirect-404-error-page-to-homepage/)

#### Recommended Plugins ####

We invite you to check out a few other related free plugins that our team has also produced that you may find especially useful:


* [404 To Homepage](https://wordpress.org/plugins/404-to-homepage-littlebizzy/)
* [CloudFlare](https://wordpress.org/plugins/cf-littlebizzy/)
* [Delete Expired Transients](https://wordpress.org/plugins/delete-expired-transients-littlebizzy/)
* [Disable Admin-AJAX](https://wordpress.org/plugins/disable-admin-ajax-littlebizzy/)
* [Disable Author Pages](https://wordpress.org/plugins/disable-author-pages-littlebizzy/)
* [Disable Cart Fragments](https://wordpress.org/plugins/disable-cart-fragments-littlebizzy/)
* [Disable Embeds](https://wordpress.org/plugins/disable-embeds-littlebizzy/)
* [Disable Emojis](https://wordpress.org/plugins/disable-emojis-littlebizzy/)
* [Disable Empty Trash](https://wordpress.org/plugins/disable-empty-trash-littlebizzy/)
* [Disable Image Compression](https://wordpress.org/plugins/disable-image-compression-littlebizzy/)
* [Disable jQuery Migrate](https://wordpress.org/plugins/disable-jq-migrate-littlebizzy/)
* [Disable Search](https://wordpress.org/plugins/disable-search-littlebizzy/)
* [Disable WooCommerce Status](https://wordpress.org/plugins/disable-wc-status-littlebizzy/)
* [Disable WooCommerce Styles](https://wordpress.org/plugins/disable-wc-styles-littlebizzy/)
* [Disable XML-RPC](https://wordpress.org/plugins/disable-xml-rpc-littlebizzy/)
* [Download Media](https://wordpress.org/plugins/download-media-littlebizzy/)
* [Download Plugin](https://wordpress.org/plugins/download-plugin-littlebizzy/)
* [Download Theme](https://wordpress.org/plugins/download-theme-littlebizzy/)
* [Duplicate Post](https://wordpress.org/plugins/duplicate-post-littlebizzy/)
* [Export Database](https://wordpress.org/plugins/export-database-littlebizzy/)
* [Force HTTPS](https://wordpress.org/plugins/force-https-littlebizzy/)
* [Force Strong Hashing](https://wordpress.org/plugins/force-strong-hashing-littlebizzy/)
* [Google Analytics](https://wordpress.org/plugins/ga-littlebizzy/)
* [Header Cleanup](https://wordpress.org/plugins/header-cleanup-littlebizzy/)
* [Index Autoload](https://wordpress.org/plugins/index-autoload-littlebizzy/)
* [Maintenance Mode](https://wordpress.org/plugins/maintenance-mode-littlebizzy/)
* [Profile Change Alerts](https://wordpress.org/plugins/profile-change-alerts-littlebizzy/)
* [Remove Category Base](https://wordpress.org/plugins/remove-category-base-littlebizzy/)
* [Remove Query Strings](https://wordpress.org/plugins/remove-query-strings-littlebizzy/)
* [Server Status](https://wordpress.org/plugins/server-status-littlebizzy/)
* [StatCounter](https://wordpress.org/plugins/sc-littlebizzy/)
* [View Defined Constants](https://wordpress.org/plugins/view-defined-constants-littlebizzy/)
* [Virtual Robots.txt](https://wordpress.org/plugins/virtual-robotstxt-littlebizzy/)

#### Premium Plugins ####

We invite you to check out a few premium plugins that our team has also produced that you may find especially useful:

* [Speed Demon](https://www.littlebizzy.com/plugins/speed-demon)
* [SEO Genius](https://www.littlebizzy.com/plugins/seo-genius)
* [Great Migration](https://www.littlebizzy.com/plugins/great-migration)
* [Security Guard](https://www.littlebizzy.com/plugins/security-guard)
* [Genghis Khan](https://www.littlebizzy.com/plugins/genghis-khan)

#### Special Thanks ####

We thank the following groups for their generous contributions to the WordPress community which have particularly benefited us in developing our own free plugins and paid services:

* [Automattic](https://automattic.com)
* [Brad Touesnard](https://bradt.ca)
* [Daniel Auener](http://www.danielauener.com)
* [Delicious Brains](https://deliciousbrains.com)
* [Greg Rickaby](https://gregrickaby.com)
* [Matt Mullenweg](https://ma.tt)
* [Mika Epstein](https://halfelf.org)
* [Mike Garrett](https://mikengarrett.com)
* [Samuel Wood](http://ottopress.com)
* [Scott Reilly](http://coffee2code.com)
* [Jan Dembowski](https://profiles.wordpress.org/jdembowski)
* [Jeff Starr](https://perishablepress.com)
* [Jeff Chandler](https://jeffc.me)
* [Jeff Matson](https://jeffmatson.net)
* [John James Jacoby](https://jjj.blog)
* [Leland Fiegel](https://leland.me)
* [Rahul Bansal](https://profiles.wordpress.org/rahul286)
* [Roots](https://roots.io)
* [rtCamp](https://rtcamp.com)
* [Ryan Hellyer](https://geek.hellyer.kiwi)
* [WP Chat](https://wpchat.com)
* [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep the above mentioned goals in mind, thanks!

== Installation ==

1. Upload to `/wp-content/plugins/404-to-homepage-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test the plugin is working by loading a non-existent page URI on your website

== FAQ ==

= Does this plugin alter my 404.php template? =

No, it automatically adds a 404 header using WordPress hooks/filters. While you can use the `404.php` template file to redirect to the homepage, it is not as efficient as this plugin due to mixed HTTP headers and the fact that WordPress hooks/filters are loaded prior to any template files. You can even delete your `404.php` template file if you wish.

= After disabling this plugin, 404 pages are still redirecting? =

This is usually caused by your browser cache. Simply clear your browser cache (temp files) and try again.

= How can I change this plugin's settings? =

This plugin does not have a settings page and is designed for speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.0.10 =
* added warning for Multisite installations
* updated recommended plugins

= 1.0.9 =
* better support for `define('DISABLE_NAG_NOTICES', true);`

= 1.0.8 =
* tested with WP 4.9
* updated plugin meta
* updated recommended plugins
* partial support for `define('DISABLE_NAG_NOTICES', true);`

= 1.0.7 =
* optimized plugin code
* updated recommended plugins
* added rating request

= 1.0.6 =
* added filter to "skip" WP Admin, WP Cron, and XML-RPC requests
* updated recommended plugins

= 1.0.5 =
* updated recommended plugins

= 1.0.4 =
* minor code tweaks

= 1.0.3 =
* added recommended plugin notices

= 1.0.2 =
* updated plugin meta
* tested with WP 4.8

= 1.0.1 =
* updated plugin meta

= 1.0.0 =
* initial release
