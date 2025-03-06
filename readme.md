# 404 To Homepage

Redirects 404 errors to homepage

## Changelog

### 2.1.0
- optimized request skipping logic with `$skip_patterns` array
- refactored `clear_headers()` for efficiency
- added `/favicon.ico`, `/sitemap.xml`, `/wp-sitemap.xml` to exclusions
- added `Tested up to` plugin header
- added `Update URI` plugin header
- added `Text Domain` plugin header
- minor performance and code structure improvements

### 2.0.1
- added `Requires PHP` plugin header

### 2.0.0
- completely refactored code into single file with WordPress coding standards and no PHP classes
- support for Git Updater
- disables WordPress.org updates
- greatly expanded and improved "exclusion" rules for WP Admin, WP Cron, XML-RPC, REST API, Admin AJAX, WP-CLI, and non-frontend URL patterns
- skips trying to redirect if headers already sent to avoid conflicts (rare)
- `clear_headers` function refactored and improved (attempts to clear any existing headers before 301 redirecting)
- supports PHP 7.0 to PHP 8.3
- supports Multisite

### 1.1.0
- tested with WP 5.0
- updated plugin meta

### 1.0.12
- updated recommended plugins

### 1.0.11
- updated plugin meta

### 1.0.10
- added warning for Multisite installations
- updated recommended plugins

### 1.0.9
- better support for `DISABLE_NAG_NOTICES`

### 1.0.8
- tested with WP 4.9
- partial support for `DISABLE_NAG_NOTICES`
- updated recommended plugins
- updated plugin meta

### 1.0.7
- optimized plugin code
- added rating request notice
- updated recommended plugins

### 1.0.6
- added filter to "skip" `WP Admin`, `WP Cron`, and `XML-RPC` context requests
- updated recommended plugins

### 1.0.5
- updated recommended plugins

### 1.0.4
- optimized plugin code

### 1.0.3
- added recommended plugins notice

### 1.0.2
- tested with WP 4.8
- updated plugin meta

### 1.0.1
- updated plugin meta

### 1.0.0
- initial release
