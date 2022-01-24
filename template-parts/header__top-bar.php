<?php
/**
 * Top Bar.
 *
 * @package dcaste_wp_starter
 */

?>

<header id="header__top-bar">
	<div id="header__top-bar__container">
		<a href="mailto:my@email.com">
			<div class="header__top-bar__item"><i class="icon-mail-alt"></i> my@email.com</div>
		</a>
		<a href="tel:+01 1800-123-123">
			<div class="header__top-bar__item"><i class="icon-phone"></i> 1800-123-123</div>
		</a>
		<address class="header__top-bar__item"><i class="icon-location"></i> Address example</address>
		<div class="header__top-bar__item">
			<?php get_template_part( 'template-parts/social-media' ) ?>
		</div>
	</div>
</header>
