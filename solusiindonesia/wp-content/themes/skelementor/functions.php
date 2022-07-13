<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! isset( $content_width ) ) $content_width = 1280;

function skelementor_init() {

    add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'custom-logo', array(
		'width' => 260,
		'height' => 100,
		'flex-height' => true,
		'flex-width' => true,
	) );
	add_theme_support( 'custom-header' );
	add_theme_support( 'woocommerce' );
	add_post_type_support( 'page', 'excerpt' );
	
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'skelementor' ) )
	);

	load_theme_textdomain( 'skelementor', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'skelementor_init' );

function skelementor_comment_reply() {
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_action( 'comment_form_before', 'skelementor_comment_reply' );

function skelementor_scripts_styles() {
	wp_enqueue_style( 'skelementor-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'skelementor_scripts_styles' );

function skelementor_register_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_all_core_location();
};
add_action( 'elementor/theme/register_locations', 'skelementor_register_elementor_locations' );

