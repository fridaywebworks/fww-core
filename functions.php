<?php
/**
 * FWW Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FWW
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_FWW_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'fww-theme-css', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-theme-style'), CHILD_THEME_FWW_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );