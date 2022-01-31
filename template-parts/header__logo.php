<?php
/**
 * Header Logo.
 *
 * @package dcaste_wp_starter
 */

?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	<?php if ( is_home() || is_front_page() ) {?><h1><?php } ?>

		<img id="header__logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">

	<?php if ( is_home() || is_front_page() ) {?></h1><?php } ?>
</a>
