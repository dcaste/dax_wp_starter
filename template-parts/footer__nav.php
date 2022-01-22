<?php
/**
 * Footer navigation menu.
 *
 * @package dcaste_wp_starter
 */

?>

<nav id="footer__nav">
	<?php
	// Prints Main menu.
	$menu_defaults = array(
		'theme_location'  => 'main',
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => '',
		'echo'            => true,
		'fallback-cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => '',
	);
	wp_nav_menu( $menu_defaults );
	?>
</nav>
