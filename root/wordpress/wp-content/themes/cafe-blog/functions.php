<?php
/**
 * Cafe Blog functions and definitions
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 720; /* pixels */
}

/**
 * REQUIRES
 */
require_once get_parent_theme_file_path( '/includes/common.php' );
require_once get_parent_theme_file_path( '/includes/customizer.php' );

/**
 * ACTIONS
 */
add_action( 'after_setup_theme', 'freebiescafe_setup' );
add_action( 'wp_enqueue_scripts', 'freebiescafe_scripts' );
add_action( 'widgets_init', 'freebiescafe_widgets_init' );
add_action( 'wp_head', 'freebiescafe_pingback_header' );
add_action( 'customize_register', 'freebiescafe_customize_register' );
add_action( 'customize_preview_init', 'freebiescafe_customize_preview_js' );

/**
 * FILTERS
 */
add_filter( 'the_content', 'freebiescafe_add_signature' );
add_filter( 'excerpt_length', 'freebiescafe_alter_excerpt_length' );
add_filter( 'get_the_excerpt', 'freebiescafe_alter_the_excerpt' );
add_filter( 'excerpt_more', 'freebiescafe_alter_excerpt_more' );