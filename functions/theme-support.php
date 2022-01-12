<?php
/**
 * Theme support.
 *
 * @package dcaste_wp_starter
 */

if ( ! function_exists( 'dcaste_wp_starter_theme_support' ) ) :

	/**
	 * Add several theme support functions.
	 *
	 */
	function dcaste_wp_starter_theme_support() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Support for Gutenberg styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );

		// Color palette. Add as many as you want.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => 'White',
					'slug'  => 'white',
					'color' => '#FFF',
				),
				array(
					'name'  => 'Light Blue',
					'slug'  => 'blue-light',
					'color' => '#e9f4ff',
				),
				array(
					'name'  => 'Light Gray',
					'slug'  => 'gray-light',
					'color' => '#eff4ff',
				),
				array(
					'name'  => 'Grey',
					'slug'  => 'grey',
					'color' => '#999',
				),
				array(
					'name'  => 'Dark Grey',
					'slug'  => 'grey-dark',
					'color' => '#333',
				),
				array(
					'name'  => 'Black',
					'slug'  => 'black',
					'color' => '#000',
				),
				array(
					'name'  => 'Blue',
					'slug'  => 'blue',
					'color' => '#0066cc',
				),
				array(
					'name'  => 'Green',
					'slug'  => 'green',
					'color' => '#009999',
				),
			)
		);

		// Add styles.css as editor style https://codex.wordpress.org/Editor_Style.
		add_theme_support( 'editor-styles' );
		add_editor_style( '/css/styles.min.css' );
	}
endif;
add_action( 'after_setup_theme', 'dcaste_wp_starter_theme_support' );
