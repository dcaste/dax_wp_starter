<?php
/**
 * Register Navigation Menus.
 *
 * @package dcaste_wp_starter
 */

if ( ! function_exists( 'dcaste_wp_starter_menus' ) ) :
	/**
	 * Register menu positions.
	 * If you need more, just add them to the array.
	 */
	function dcaste_wp_starter_menus() {
		$locations = array(
			'main'   => 'Main Menu',
			'footer' => 'Footer Menu',
		);
		register_nav_menus( $locations );
	}
	add_action( 'init', 'dcaste_wp_starter_menus' );
endif;
