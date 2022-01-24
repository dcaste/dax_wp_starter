<?php
/**
 * Footer Left Area.
 *
 * @package dcaste_wp_starter
 */

?>

<div id="footer__left-area">

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" loading="lazy">
	</a>

	<a href="mailto:my@email.com">
		<div class="header__top-bar__item"><i class="icon-mail-alt"></i> my@email.com</div>
	</a>
	<a href="tel:+01 1800-123-123">
		<div class="header__top-bar__item"><i class="icon-phone"></i> 1800-123-123</div>
	</a>
	<address class="header__top-bar__item"><i class="icon-location"></i> Address example</address>

	<?php if ( is_active_sidebar( 'footer__social-icons' ) ) : ?>
		<div class="footer__top-bar__item">
			<?php dynamic_sidebar( 'footer__social-icons' ); ?>
		</div>
	<?php endif; ?>

</div>
