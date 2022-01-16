<?php
/**
 * Enqueue scripts.
 *
 * @package dcaste_wp_starter
 */

// Enqueue CSS styles in frontend.
function dcaste_wp_starter_styles() {
	wp_register_style( 'styles', get_template_directory_uri() . '/style.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'styles' );
}
add_action( 'wp_enqueue_scripts', 'dcaste_wp_starter_styles' );

// Add styles to login area.
add_action( 'login_enqueue_scripts', 'dcaste_wp_starter_styles', 10 );

// Enqueue CSS styles in dashboard.
function dcaste_wp_starter_add_editor_styles() {
	add_editor_style( get_template_directory_uri() . '/style.min.css' );
}

// Enqueue JS scripts (vendors and custom)
function dcaste_wp_starter_scripts() {
	wp_enqueue_script( 'dcaste_wp_starter-vendors', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'dcaste_wp_starter-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'dcaste_wp_starter_scripts' );
