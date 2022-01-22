<?php
/**
 * Footer Logo.
 *
 * @package dcaste_wp_starter
 */

?>

<div id="footer__logo">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" loading="lazy">
	</a>
</div>
