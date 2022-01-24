<?php
/**
 * Sidebar de wisdgets.
 *
 * @package dcaste_wp_starter
 */

if ( ! is_active_sidebar( 'sidebar_blog' ) ) {
	return;
}
?>

<aside class="sidebar-blog">
	<?php dynamic_sidebar( 'sidebar_blog' ); ?>
</aside>
