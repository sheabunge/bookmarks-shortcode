<?php

/*
 * Plugin Name: Bookmarks Shortcode
 * Plugin URI:  https://github.com/sheabunge/bookmarks-shortcode
 * Description: Creates [bookmarks], [links] and [blogroll] shortcodes that will generate an unordered list of your WordPress links. Preforms the same function as wp_list_bookmarks().
 * Author:      Shea Bunge
 * Author URI:  https://sheabunge.com
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 * Version:     2.3.1
 */

/**
 * Creates shortcodes that will generate an unordered list of your WordPress links (bookmarks).
 *
 * @version   2.3.1
 * @author    Shea Bunge
 * @copyright Copyright (c) 2011 - 2020, Shea Bunge
 * @link      https://github.com/sheabunge/bookmarks-shortcode
 * @license   https://opensource.org/licenses/MIT
 */

/**
 * Returns a formatted list of WordPress bookmarks.
 * These are the ones that are managed through the 'Links' admin menu.
 *
 * @param array $atts Attributes to be passed to the wp_list_bookmarks() function
 *
 * @return string The formatted list of bookmarks
 * @since 1.0
 *
 * @uses  wp_list_bookmarks() to print a formatted list of bookmarks
 */
function bookmarks_shortcode( $atts = array() ) {

	$atts = wp_parse_args( $atts );
	$atts['echo'] = false;

	return wp_list_bookmarks( $atts );
}

/**
 * Register the shortcodes if they don't already exist
 *
 * @since 2.1
 *
 * @uses  $shortcode_tags to check if a shortcode has been already registered
 * @uses  add_shortcode() to register the shortcode with WordPress
 * @uses  add_action() Hooked to the 'init' action
 */
function register_bookmarks_shortcode() {
	/** @var array $shortcode_tags */
	global $shortcode_tags;

	$shortcodes = array( 'bookmarks', 'blogroll', 'links' );

	foreach ( $shortcodes as $shortcode ) {

		/* Check if the shortcode is already registered */
		if ( ! isset( $shortcode_tags[ $shortcode ] ) ) {
			add_shortcode( $shortcode, 'bookmarks_shortcode' );
		}
	}

}

add_action( 'init', 'register_bookmarks_shortcode' );
