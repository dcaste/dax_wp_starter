<?php
/**
 * Header Logo.
 *
 * @package dcaste_wp_starter
 */

?>

<?php if ( is_front_page() && is_home() ) {?><h1><?php } ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img class="logo-header" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
	</a>
<?php if ( is_front_page() && is_home() ) {?></h1><?php } ?>
