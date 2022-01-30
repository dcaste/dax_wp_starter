<?php
/**
 * Sidebar de wisdgets.
 *
 * @package dcaste_wp_starter
 */

if ( ! is_active_sidebar( 'primary' ) || ! is_active_sidebar( 'secondary' )) {
	return;
}
?>

<aside id="blog__sidebar">
	<?php dynamic_sidebar( 'primary' ); ?>
	<?php dynamic_sidebar( 'secondary' ); ?>
</aside>
