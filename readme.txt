=== Redirect 404 To Homepage ===

Contributors: littlebizzy
Tags: 404, homepage, errors, redirect, 301
Requires at least: 4.4
Tested up to: 4.8
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.0.7
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: NTFTHP

Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.

== Description ==

Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.

* [Plugin Homepage](https://www.littlebizzy.com/plugins/404-to-homepage)
* [Plugin GitHub](https://github.com/littlebizzy/404-to-homepage)
* [SlickStack.io](https://slickstack.io)

#### The Long Version ####

404 To Homepage is a simple WordPress plugin for redirecting all 404 "Not Found" errors to the homepage. The reason for doing this is to avoid user confusion (or lost leads), and to avoid abuse causes by bots that ping your site with non-existent URLs which can negatively effect search engine indexing. Additionally, it can totally eliminate the warnings created in Google GSC (Webmasters) in regard to 404 errors that begin piling up over time, which quite often are not even the fault of your website.

It should be noted, however, that this method is not recommended for all websites. For example, large blogs or magazines that rely heavily on search engine traffic (such as a newspaper) should probably not use this plugin. This is because in many cases, 404 errors should be analyzed on a regular basis and then 301 redirected to the appropriate page. Rather, this plugin is best suited for small businesses or websites with a limited amount of content, and limited staff, who are not publishing massive amounts of content. In such cases, we suggest monitoring 404 errors for perhaps a few months, redirecting the ones that are legitimate, and then consider activating this plugin after that point.

Unlike other 404 redirect plugins, 404 To Homepage "removes" any pre-existing HTTP headers, and executes ONLY a 301 redirect header pointed at the site's homepage. In other words, it does not allow any "previous" headers to be sent in order to avoid confusing browsers or Google bots. (NOTE: while any previous headers sent by WordPress/PHP engine are ignored, it's possible for your server i.e. Apache or Nginx to override things with header rules of their own... please check to ensure no conflicts.)

This is a version that uses the early WP hook 'pre_handle_404' to avoid unnecessary code execution (posts types creation and taxonomies). But this hook is available only from WP 4.5.0, so the plugin declares also the 'wp' standard hook just in case for older versions.

Before to do the redirection to the homepage, there is a procedure that removes any existing previous header, so only 301 header will be sent in response to the HTTP request. You can see the headers in chrome from Network tab and checking preserve log. For Firefox you can use the Live HTTP headers addon, for example.

#### Compatibility ####

This plugin has been designed for use on LEMP (Nginx) web servers with PHP 7.0 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and security reasons, we highly recommend against using WordPress Multisite for the vast majority of projects.

#### Plugin Features ####

* Settings Page: No
* Premium Version Available: No
* Includes Media (Images, Icons, Etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * Options: Yes
  * Creates New Tables: No
* Database Queries: Backend Only
* Must-Use Support: Yes (Use With [Autoloader](https://github.com/littlebizzy/autoloader))
* Multisite Support: No
* Uninstalls Data: Yes

#### WP Admin Notices ####

This plugin generates multiple [Admin Notices](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices) in the WP Admin dashboard. The first is a notice that fires during plugin activation which recommends several related free plugins that we believe will enhance this plugin's features; this notice will re-appear approximately once every 5 months as our code and recommendations evolve. The second is a notice that fires a few days after plugin activation which asks for a 5-star rating of this plugin on its WordPress.org profile page. This notice will re-appear approximately once every 8 months. These notices can be dismissed by clicking the **(x)** symbol in the upper right of the notice box. These notices may confuse certain users, but are appreciated by the majority of our userbase, who understand that these notices support our free contributions to the WordPress community. If you feel that these notices are too "annoying" than we encourage you to consider one or more of our upcoming premium plugins that combine several free plugin features into a single control panel. Another alternative would be to develop your own plugins for WordPress, if you feel that supporting free plugin authors is not something that interests you.

#### Code Inspiration ####

This plugin was partially inspired either in "code or concept" by the open-source software and discussions mentioned below:

* [All 404 Redirect to Homepage](https://wordpress.org/plugins/all-404-redirect-to-homepage/)
* [404 Redirection](https://wordpress.org/plugins/404-redirection/)
* [Redirect 404 Error Page to Homepage](https://wordpress.org/plugins/redirect-404-error-page-to-homepage/)

#### Recommended Plugins ####

We invite you to check out a few other related free plugins that our team has also produced that you may find especially useful:

* [Force HTTPS](https://wordpress.org/plugins/force-https-littlebizzy/)
* [Remove Query Strings](https://wordpress.org/plugins/remove-query-strings-littlebizzy/)
* [Remove Category Base](https://wordpress.org/plugins/remove-category-base-littlebizzy/)
* [Server Status](https://wordpress.org/plugins/server-status-littlebizzy/)
* [Disable Embeds](https://wordpress.org/plugins/disable-embeds-littlebizzy/)
* [Disable Emojis](https://wordpress.org/plugins/disable-emojis-littlebizzy/)
* [Disable XML-RPC](https://wordpress.org/plugins/disable-xml-rpc-littlebizzy/)
* [Disable Author Pages](https://wordpress.org/plugins/disable-author-pages-littlebizzy/)
* [Disable Search](https://wordpress.org/plugins/disable-search-littlebizzy/)
* [Virtual Robots.txt](https://wordpress.org/plugins/virtual-robotstxt-littlebizzy/)

#### Special Thanks ####

We thank the following groups for their generous contributions to the WordPress community which have particularly benefited us in developing our own free plugins and paid services:

* [Automattic](https://automattic.com)
* [Delicious Brains](https://deliciousbrains.com)
* [Roots](https://roots.io)
* [rtCamp](https://rtcamp.com)
* [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep the above mentioned goals in mind, thanks!

== Installation ==

1. Upload to `/wp-content/plugins/404-to-homepage-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test the plugin is working by loading a non-existent page URI on your website

== FAQ ==

= Does this plugin alter my 404.php template? =

No, it automatically adds a 404 header using WordPress filters/hooks.

= After disabling this plugin, 404 pages are still redirecting? =

This is usually caused by your browser cache. Simply clear your browser cache (temp files) and try again.

= How can I change this plugin's settings? =

This plugin does not have a settings page and is designed for speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.0.7 =
* optimize plugin code
* updated recommended plugins
* added rating request

= 1.0.6 =
* added filter to "skip" WP Admin, cron, and XML-RPC requests
* updated recommended plugins

= 1.0.5 =
* updated recommended plugins

= 1.0.4 =
* minor code tweaks

= 1.0.3 =
* added recommended plugin notices

= 1.0.2 =
* updated plugin meta
* tested with WordPress 4.8

= 1.0.1 =
* updated plugin meta

= 1.0.0 =
* initial release
