<?php
/**
 * Register Sidebar areas.
 *
 * @package dcaste_wp_starter
 */

if ( ! function_exists( 'dcaste_wp_starter_sidebars' ) ) {

add_action( 'widgets_init', 'dcaste_wp_starter_sidebars' );
function dcaste_wp_starter_sidebars() {

    // Register the 'primary' sidebar. Repeat register_sidebar() code for additional sidebars.
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => 'Primary Sidebar',
            'description'   => 'A short description of the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

		register_sidebar(
			array(
					'id'            => 'secondary',
					'name'          => 'Secondary Sidebar',
					'description'   => 'A short description of the sidebar.',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
			)
		);
	}
}
