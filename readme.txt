=== Redirect 404 To Homepage ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: 404, errors, redirect, 301, homepage
Requires at least: 4.4
Tested up to: 5.0
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: NTFTHP

Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.

== Description ==

Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.

* [**Join our FREE Facebook group for support**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/404-to-homepage-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/404-to-homepage)
* [Plugin GitHub](https://github.com/littlebizzy/404-to-homepage)

#### Current Features ####

404 To Homepage is a simple WordPress plugin for redirecting all 404 "Not Found" errors to the homepage. The reason for doing this is to avoid user confusion (or lost leads), and to avoid abuse causes by bots that ping your site with non-existent URLs which can negatively effect search engine indexing. Additionally, it can totally eliminate the warnings created in Google GSC (Webmasters) in regard to 404 errors that begin piling up over time, which quite often are not even the fault of your website.

It should be noted, however, that this method is not recommended for all websites. For example, large blogs or magazines that rely heavily on search engine traffic (such as a newspaper) should probably not use this plugin. This is because in many cases, 404 errors should be analyzed on a regular basis and then 301 redirected to the appropriate page. Rather, this plugin is best suited for small businesses or websites with a limited amount of content, and limited staff, who are not publishing massive amounts of content. In such cases, we suggest monitoring 404 errors for perhaps a few months, redirecting the ones that are legitimate, and then consider activating this plugin after that point.

Unlike other 404 redirect plugins, 404 To Homepage "removes" any pre-existing HTTP headers, and executes ONLY a 301 redirect header pointed at the site's homepage. In other words, it does not allow any "previous" headers to be sent in order to avoid confusing browsers or Google bots. (NOTE: while any previous headers sent by WordPress/PHP engine are ignored, it's possible for your server i.e. Apache or Nginx to override things with header rules of their own... please check to ensure no conflicts.)

This is a version that uses the early WP hook 'pre_handle_404' to avoid unnecessary code execution (posts types creation and taxonomies). But this hook is available only from WP 4.5.0, so the plugin declares also the 'wp' standard hook just in case for older versions.

Before to do the redirection to the homepage, there is a procedure that removes any existing previous header, so only 301 header will be sent in response to the HTTP request. You can see the headers in chrome from Network tab and checking preserve log. For Firefox you can use the Live HTTP headers addon, for example.

#### Compatibility ####

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and usability reasons, we highly recommend avoiding WordPress Multisite for the vast majority of projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

#### Defined Constants ####

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);

#### Technical Details ####

* Prefix: NTFTHP
* Parent Plugin: [**SEO Genius**](https://www.littlebizzy.com/plugins/seo-genius)
* Disable Nag Notices: [Yes](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices#Disable_Nag_Notices)
* Settings Page: No
* PHP Namespaces: No
* Object-Oriented Code: No
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * WP Options Table: Yes
  * Other Tables: No
  * Creates New Tables: No
  * Creates New WP Cron Jobs: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: [Yes](https://github.com/littlebizzy/autoloader)
* Multisite Support: No
* Uninstalls Data: Yes

#### Special Thanks ####

[Alex Georgiou](https://www.alexgeorgiou.gr), [Automattic](https://automattic.com), [Brad Touesnard](https://bradt.ca), [Daniel Auener](http://www.danielauener.com), [Delicious Brains](https://deliciousbrains.com), [Greg Rickaby](https://gregrickaby.com), [Matt Mullenweg](https://ma.tt), [Mika Epstein](https://halfelf.org), [Mike Garrett](https://mikengarrett.com), [Samuel Wood](http://ottopress.com), [Scott Reilly](http://coffee2code.com), [Jan Dembowski](https://profiles.wordpress.org/jdembowski), [Jeff Starr](https://perishablepress.com), [Jeff Chandler](https://jeffc.me), [Jeff Matson](https://jeffmatson.net), [Jeremy Wagner](https://jeremywagner.me), [John James Jacoby](https://jjj.blog), [Leland Fiegel](https://leland.me), [Luke Cavanagh](https://github.com/lukecav), [Mike Jolley](https://mikejolley.com), [Pau Iglesias](https://pauiglesias.com), [Paul Irish](https://www.paulirish.com), [Rahul Bansal](https://profiles.wordpress.org/rahul286), [Roots](https://roots.io), [rtCamp](https://rtcamp.com), [Ryan Hellyer](https://geek.hellyer.kiwi), [WP Chat](https://wpchat.com), [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep these conditions in mind, and refrain from slandering, threatening, or harassing our team members in order to get a feature added, or to otherwise get "free" support. The only place you should be contacting us is in our free [**Facebook group**](https://www.facebook.com/groups/littlebizzy/) which has been setup for this purpose, or via GitHub if you are an experienced developer. Thank you!

#### Our Philosophy ####

> "Decisions, not options." -- WordPress.org

> "Everything should be made as simple as possible, but not simpler." -- Albert Einstein, et al

> "Write programs that do one thing and do it well... write programs to work together." -- Doug McIlroy

> "The innovation that this industry talks about so much is bullshit. Anybody can innovate... 99% of it is 'Get the work done.' The real work is in the details." -- Linus Torvalds

#### Search Keywords ####

404, 404 error, 404 errors, 404 errors redirect, 404 redirection, 404 to home, 404 to homepage, all 404 redirect to homepage, not found, not found errors, not found error management, not found error redirect, redirect 404, redirect 404 error, redirect 404 error page to homepage, redirect 404 errors, redirect 404s, redirect 404s to homepage

== Installation ==

1. Upload to `/wp-content/plugins/404-to-homepage-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test the plugin is working:

After plugin activation, purge all caches. Then, try loading a non-existent page (URL) of your site and it should be immediately 301 redirected to the homepage automatically. You can also use HTTP header testing tools to see this happen technically.

== Frequently Asked Questions ==

= Does this plugin alter my 404.php template? =

No, it automatically adds a 404 header using WordPress hooks/filters. While you can use the `404.php` template file to redirect to the homepage, it is not as efficient as this plugin due to mixed HTTP headers and the fact that WordPress hooks/filters are loaded prior to any template files. You can even delete your `404.php` template file if you wish.

= After disabling this plugin, 404 pages are still redirecting? =

This is usually caused by your browser cache. Simply clear your browser cache (temp files) and try again.

= How can I change this plugin's settings? =

This plugin does not have a settings page and is designed for speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.1.0 =
* tested with WP 5.0
* updated plugin meta

= 1.0.12 =
* updated recommended plugins

= 1.0.11 =
* updated plugin meta

= 1.0.10 =
* added warning for Multisite installations
* updated recommended plugins

= 1.0.9 =
* better support for `DISABLE_NAG_NOTICES`

= 1.0.8 =
* tested with WP 4.9
* partial support for `DISABLE_NAG_NOTICES`
* updated recommended plugins
* updated plugin meta

= 1.0.7 =
* optimized plugin code
* added rating request notice
* updated recommended plugins

= 1.0.6 =
* added filter to "skip" `WP Admin`, `WP Cron`, and `XML-RPC` context requests
* updated recommended plugins

= 1.0.5 =
* updated recommended plugins

= 1.0.4 =
* optimized plugin code

= 1.0.3 =
* added recommended plugins notice

= 1.0.2 =
* tested with WP 4.8
* updated plugin meta

= 1.0.1 =
* updated plugin meta

= 1.0.0 =
* initial release
