<?php
/**
 * Navigation Menu for mobile.
 *
 * @package dcaste_wp_starter
 */

?>
<nav id="nav-mobile">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img class="mobile-logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</a>
		<a id="mobile-toggle" href="#mobile-menu" class="boton-white">
			<i class="icon-menu"></i>
		</a>
	</nav>
