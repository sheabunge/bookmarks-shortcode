<?php

/**
 * Plugin Name: Bookmarks Shortcode
 * Plugin URI: http://bungeshea.com/plugins/bookmarks-shortcode/
 * Description: Creates [bookmarks], [links] and [blogroll] shortcodes that will generate an unordered list of your WordPress links. Preforms the same function as wp_list_bookmarks().
 * Author: Shea Bunge
 * Author URI: http://bungeshea.com
 * License: MIT
 * License URI: http://opensource.org/licenses/mit
 * Version: 2.0
 */

if ( ! function_exists( 'shortcode_exists' ) ) :

	/**
	* Check if a shortcode is registered in WordPress.
	*
	* Examples: shortcode_exists( 'caption' ) - will return true.
	* shortcode_exists( 'blah' ) - will return false.
	*
	* @param bool|string $shortcode The name of the shortcode to check
	* @return bool Whether the shortcode exists or not
	*/
	function shortcode_exists( $shortcode = false ) {
		global $shortcode_tags;

		if ( ! $shortcode )
			return false;

		if ( array_key_exists( $shortcode, $shortcode_tags ) )
			return true;

		return false;
	}

endif; // function exists check


if( ! function_exists( 'bookmarks_shortcode' ) ) :

	/**
	 * Returns the list of WordPress
	 * bookmarks.
	 *
	 * @uses wp_list_bookmarks() To print a formatted list of bookmarks
	 * @param array $atts Attributes to be passed to the wp_list_bookmarks() function
	 * @return string The formatted list of bookmarks
	 */
	function bookmarks_shortcode( $atts ) {
		ob_start();
		wp_list_bookmarks( $atts );
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	/* Register the [bookmarks] shortcode if it doesn't already exist */

	if( ! shortcode_exists( 'bookmarks' ) )
		add_shortcode( 'bookmarks', 'bookmarks_shortcode' );

	/* Register the [blogroll] shortcode if it doesn't already exist */

	if( ! shortcode_exists( 'blogroll' ) )
		add_shortcode( 'blogroll', 'bookmarks_shortcode' );

	/* Register the [links] shortcode if it doesn't already exist */

	if( ! shortcode_exists( 'links' ) )
		add_shortcode( 'links', 'bookmarks_shortcode' );

	/* Allow shortcodes to be used in sidebar text widgets */

	add_filter( 'widget_text', 'shortcode_unautop' );
	add_filter( 'widget_text', 'do_shortcode' );

endif; // function exists check
