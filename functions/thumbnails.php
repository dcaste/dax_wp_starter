<?php
/**
 * Configure thumbnails and image related functions.
 *
 * @package dcaste_wp_starter
 */

 if ( ! function_exists( 'dcaste_wp_starter_thumbnails' ) ) :

	//Register thumbnail sizes.
	function dcaste_wp_starter_thumbnails() {
		add_image_size( 'mobile', 320, 240, true );
		add_image_size( 'tablet-v', 1024, 768, true );
		add_image_size( 'tablet-h', 768, 1024, true );

		/**
		 * Register the sizes in Wordpress backend.
		 *
		 * @param  array $sizes Sizes.
		 */
		function dcaste_wp_starter_custom_sizes( $sizes ) {
			return array_merge(
				$sizes, array(
					'mobile' => ( 'Mobile' ),
					'tablet-h' => ( 'Tablet Horizontal' ),
					'tablet-v' => ( 'Tablet Vertical' ),
				)
			);
		}
		add_filter( 'image_size_names_choose', 'dcaste_wp_starter_custom_sizes' );

	} // End Register Thumbnails.
	add_action( 'after_setup_theme', 'dcaste_wp_starter_thumbnails' );

endif; // End if thumbnails function exists.

/**
 * Change dashboard icon.
 */
function wpb_custom_logo() { ?>
<style type="text/css">
.wp-admin #wpadminbar #wp-admin-bar-site-name > .ab-item::before{
background-image: url("<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/favicon-32x32.png") !important;
background-position: center center;
background-size: contain;
color:rgba(0, 0, 0, 0);
background-repeat: no-repeat;
width: 32px;
height: 20px;
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
<?php
}
add_action( 'wp_before_admin_bar_render', 'wpb_custom_logo' );
