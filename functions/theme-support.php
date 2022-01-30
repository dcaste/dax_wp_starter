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
					'name'  => 'Grey Light',
					'slug'  => 'grey-light',
					'color' => '#eff4ff',
				),
				array(
					'name'  => 'Grey',
					'slug'  => 'grey',
					'color' => '#999',
				),
				array(
					'name'  => 'Grey Dark',
					'slug'  => 'grey-dark',
					'color' => '#333',
				),
				array(
					'name'  => 'Black',
					'slug'  => 'black',
					'color' => '#000',
				),
				array(
					'name'  => 'Main Light',
					'slug'  => 'main-light',
					'color' => '#cde6ff',
				),
				array(
					'name'  => 'Main',
					'slug'  => 'main',
					'color' => '#0066cc',
				),
				array(
					'name'  => 'Main Dark',
					'slug'  => 'main-dark',
					'color' => '#00478d',
				),
				array(
					'name'  => 'Secondary Light',
					'slug'  => 'secondary-light',
					'color' => '#75e9e9',
				),
				array(
					'name'  => 'Secondary',
					'slug'  => 'secondary',
					'color' => '#009999',
				),
				array(
					'name'  => 'Secondary Dark',
					'slug'  => 'secondary-dark',
					'color' => '#006666',
				),
				array(
					'name'  => 'Terciary Light',
					'slug'  => 'terciary-light',
					'color' => '#e97575',
				),
				array(
					'name'  => 'Terciary',
					'slug'  => 'terciary',
					'color' => '#990000',
				),
				array(
					'name'  => 'Terciary Dark',
					'slug'  => 'terciary-dark',
					'color' => '#5e0101',
				),
			)
		);

		// Add styles.css as editor style https://codex.wordpress.org/Editor_Style.
		add_theme_support( 'editor-styles' );
		add_editor_style( '/css/styles.min.css' );
	}
endif;
add_action( 'after_setup_theme', 'dcaste_wp_starter_theme_support' );
