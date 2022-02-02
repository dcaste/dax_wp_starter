<?php
/**
 * Hader mobile navigation menu.
 *
 * @package dcaste_wp_starter
 */

?>

<nav id="header__mobile__nav">
	<?php
	// Prints Mobile menu.
	$args = array(
		'menu'            			=> '',
		'menu_class'      			=> '',
		'menu_id'         			=> 'menu-mobile',
		'container'       			=> '',
		'container_class' 			=> '',
		'container_id'    			=> '',
		'container_aria_label' 	=> '',
		'fallback-cb'     			=> '',
		'before'          			=> '',
		'after'           			=> '',
		'link_before'     			=> '',
		'link_after'      			=> '',
		'echo'            			=> true,
		'depth'           			=> 0,
		'walker'          			=> '',
		'theme_location'  			=> 'mobile',
		'items_wrap'      			=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'items_spacing'					=> '',
	);
	wp_nav_menu( $args );
	?>
	<?php dynamic_sidebar( 'header__social-icons' ); ?>
	<?php get_search_form(); ?>
</nav>
