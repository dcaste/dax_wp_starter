<?php
/**
 * Header for Desktop.
 * Logo and Navigation Menu.
 *
 * @package dcaste_wp_starter
 */

?>
<div id="header__desktop">

	<?php get_template_part( 'template-parts/header__top-bar' ); ?>

	<header id="header__nav__wrapper">
		<div id="header__nav__container">

			<?php get_template_part( 'template-parts/header__logo' ); ?>
			<?php get_template_part( 'template-parts/header__nav' ); ?>

		</div>
	</header>
</div>
