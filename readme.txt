=== Bookmarks Shortcode ===
Contributors: bungeshea
Tags: bookmarks, links, blogroll, shortcode, wp_list_bookmarks
Requires at least: 2.5
Tested up to: 5.6
Requires PHP: 5.2
Stable tag: 2.3.1
License: MIT
License URI: https://opensource.org/licenses/MIT
Donate link: https://sheabunge.com/donate

Creates shortcodes that will generate an unordered list of your WordPress links (bookmarks).

== Description ==

Creates three shortcodes – [bookmarks], [links] and [blogroll] – that will generate an unordered list of your WordPress links.
Preforms the same function as `wp_list_bookmarks()`.

You can any of the shortcodes within a post, page, media, text widget, etc.
This makes it much more flexible then using the default Links page template that may be included in your theme as you can add other content surrounding the list, also when you change themes there is no need to edit the page.

You can customize the output of the list by using the same arguments that are accepted by the [wp_list_bookmarks()](https://developer.wordpress.org/reference/functions/wp_list_bookmarks/) function.
Example: `[bookmarks show_images=0 show_ratings=1 show_name=1 ]`

[Contribute at GitHub](https://github.com/sheabunge/bookmarks-shortcode)

== Installation ==

1. Upload `bookmarks-shortcode.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the __(Plugins > Installed Plugins)__ menu in WordPress
1. Use the [bookmarks], [links] or [blogroll] shortcodes in any of your posts, pages or widgets.

== Frequently Asked Questions ==

= My theme includes a links page template. Why do I need this plugin? =
This plugin is more flexible then the Links page template. You can use any of the three shortcodes within a post, page, text widget, media, etc. You can also add other content surrounding the list, also when you change themes there is no need to edit the page.

= Can I use the shortcodes in text widgets? =
If you wish to use these shortcodes in the sidebar text widgets, add this code to a site-specific plugin or as a [code snippet](https://wordpress.org/plugins/code-snippets):

    add_filter( 'widget_text', 'shortcode_unautop' );
    add_filter( 'widget_text', 'do_shortcode' );

Keep in mind that doing this will allow you to use **all** shortcodes in text widgets, not only the ones added by this plugin

== Changelog ==

= 2.3.1 =
* Fixed regression if strings are passed as shortcode attributes

= 2.3 =
* Remove argument parsing from shortcode callback

= 2.2 =
* Instead of using output buffering, set wp_list_bookmarks's echo parameter
* Provide default arguments for the wp_list_bookmarks() function

= 2.1 =
* Improved code structure
* Removed 'allow shortcodes in text widgets' functionality. To add this back, see the FAQ
* Switched to MIT license

= 2.0 =
* Added `[blogroll]` and `[links]` shortcodes
* Fixed a bug with the page content always being after the bookmarks
* Shortcodes can now be used in text widgets
* Checks if shortcode exists before registering shortcode
* Accepts the same arguments as the [wp_list_bookmarks()](https://codex.wordpress.org/Function_Reference/wp_list_bookmarks) function.

= 1.0 =
* Stable version release

== Update Notice ==

= 2.2 =
Improved default bookmarks markup
