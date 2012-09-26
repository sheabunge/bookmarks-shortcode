<?php

/**
 * Plugin Name: Bookmarks Shortcode
 * Plugin URI: http://wordpress.org/extend/plugins/bookmarks-shortcode/
 * Description: Creates [bookmarks], [links] and [blogroll] shortcodes that will generate an unordered list of your WordPress links. Preforms the same function as wp_list_bookmarks().
 * Version: 2.0
 * Author: Shea Bunge
 * Author URI: http://bungeshea.com/plugins/bookmarks-shortcode/
 * License: GPLv3 or later
 */

if ( ! function_exists( 'shortcode_exists' ) ) :
/**
* Check if a shortcode is registered in WordPress.
*
* Examples: shortcode_exists( 'caption' ) - will return true.
* shortcode_exists( 'blah' ) - will return false.
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

function bookmarks_shortcode( $atts ) {
	ob_start();
	wp_list_bookmarks( $atts );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

if( ! shortcode_exists( 'bookmarks' ) )
	add_shortcode( 'bookmarks', 'bookmarks_shortcode' );

if( ! shortcode_exists( 'blogroll' ) )
	add_shortcode( 'blogroll', 'bookmarks_shortcode' );
	
if( ! shortcode_exists( 'links' ) )
	add_shortcode( 'links', 'bookmarks_shortcode' );

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

endif; // function exists check

?>