<?php

/*
 * Plugin Name: Bookmarks Shortcode
 * Plugin URI: http://bungeshea.com/plugins/bookmarks-shortcode/
 * Description: Creates [bookmarks], [links] and [blogroll] shortcodes that will generate an unordered list of your WordPress links. Preforms the same function as wp_list_bookmarks().
 * Author: Shea Bunge
 * Author URI: http://bungeshea.com
 * License: MIT
 * License URI: http://opensource.org/licenses/mit
 * Version: 2.0
 */

/**
 * @package   Bookmarks Shortcode
 * @version   2.0
 * @author    Shea Bunge <info@bungeshea.com>
 * @copyright Copyright (c) 2011 - 2013, Shea Bunge
 * @link      http://bungeshea.com/plugins/bookmarks-shortcode
 * @license   http://opensource.org/licenses/MIT
 */

/**
 * Returns a formatted list of WordPress bookmarks.
 * These are the ones that you manage through the
 * 'Links' admin menu.
 *
 * @since  1.0
 * @uses   wp_list_bookmarks() To print a formatted list of bookmarks
 * @param  array $atts Attributes to be passed to the wp_list_bookmarks() function
 * @return string The formatted list of bookmarks
 */
function bookmarks_shortcode( $atts ) {
	ob_start();
	wp_list_bookmarks( $atts );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Register the shortcodes if they don't already exist
 *
 * @uses $shortcode_tags To check if a shortcode has been already registered
 */
function register_bookmarks_shortcode() {
	global $shortcode_tags;

	$shortcodes = array(
		'bookmarks',
		'blogroll',
		'links',
	);

	foreach ( $shortcodes as $shortcode ) {

		if ( ! array_key_exists( $shortcode, $shortcode_tags ) ) {
			add_shortcode( $shortcode, 'bookmarks_shortcode' );
		}
	}

}
add_action( 'init', 'register_bookmarks_shortcode' );

