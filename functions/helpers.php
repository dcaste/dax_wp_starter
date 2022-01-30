<?php
/**
 * Helper functions
 *
 * @package dcaste_wp_starter
 */

// Text to show in Dashboard footer.
 function custom_admin_footer() {
 	echo ('Developed by Dax Castellón Meyrat - daxcastellon.dev');
 }
 add_filter( 'admin_footer_text', 'custom_admin_footer' );

 /**
  * Shortens the lenght of the Excerpt.
  *
  * @param int $length Lenght of the Excerpt
  * @return int Desired Lenght. Change it to the amount desired.
  */
 function wpdocs_custom_excerpt_length( $length ) {
 	return 20;
 }
 add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
