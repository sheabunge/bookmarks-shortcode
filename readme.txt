=== Bookmarks Shortcode ===
Contributors: bungeshea
Tags: bookmarks, links, blogroll, shortcode, wp_list_bookmarks
Requires at least: 2.5
Tested up to: 3.4.2
Stable tag: 2.0
License: GPLv3 or later
Donate link: http://bungeshea.com/donate/

Creates shortcodes that will generate an unordered list of your WordPress links (bookmarks).

== Description ==

Creates three shortcodes ([bookmarks], [links] and [blogroll]) that will generate an unordered list of your WordPress links.
Preforms the same function as `wp_list_bookmarks()`.

You can any of the shortcodes within a post, page, media, text widget, etc.
This makes it much more flexible then using the default Links page template that may be included in your theme as you can add other content surrounding the list, also when you change themes there is no need to edit the page.

You can customize the output of the list by using the same arguments that are accepted by the [wp_list_bookmarks()](http://codex.wordpress.org/Function_Reference/wp_list_bookmarks) function.
Example: `[bookmarks show_images=0 show_ratings=1 show_name=1 ]`

[Visit the plugin's website](http://bungeshea.com/plugins/bookmarks-shortcode/).

== Installation ==

1. Upload `bookmarks-shortcode.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the __(Plugins > Installed Plugins)__ menu in WordPress
1. Use the [bookmarks], [links] or [blogroll] shortcodes in any of your posts, pages or widgets.

== Frequently Asked Questions == 

= My theme includes a links page template. Why do I need this plugin? =
This plugin is more flexible then the Links page template. You can use any of the three shortcodes within a post, page, text widget, media, etc. You can also add other content surrounding the list, also when you change themes there is no need to edit the page.

= Can I use the shortcodes in text widgets? =
Yes. Since version 2.0 you can use all shortcodes in text widgets.

== Changelog ==

= 2.0 =
* Added `[blogroll]` and `[links]` shortcodes
* Fixed a bug with the page content always being after the bookmarks
* Shortcodes can now be used in text widgets
* Checks if shortcode exists before registering shortcode
* Accepts the same arguments as the [wp_list_bookmarks()](http://codex.wordpress.org/Function_Reference/wp_list_bookmarks) function.

= 1.0 =
* Stable version release