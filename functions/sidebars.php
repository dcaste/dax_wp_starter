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

		register_sidebar(
			array(
					'id'            => 'footer__main-area',
					'name'          => 'Footer Main Widget Area',
					'description'   => 'Main Area for widgets in Footer.',
					'before_widget' => '<div id="footer__main-area">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
					'id'            => 'footer__secondary-area',
					'name'          => 'Footer Secondary Widget Area',
					'description'   => 'Secondary Area for widgets in Footer.',
					'before_widget' => '<div id="footer__secondary-area">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
					'id'            => 'header__social-icons',
					'name'          => 'Header Social Icons',
					'description'   => 'Area for adding social icons in Header.',
					'before_widget' => '<div id="header__social-icons">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
					'id'            => 'footer__social-icons',
					'name'          => 'Footer Social Icons',
					'description'   => 'Area for adding social icons in Footer.',
					'before_widget' => '<div id="footer__social-icons">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
			)
		);
	}
}
