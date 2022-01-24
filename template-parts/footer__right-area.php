<?php
/**
 * Footer Right Area.
 *
 * @package dcaste_wp_starter
 */

?>

<div id="footer__right-area">

	<?php if ( is_active_sidebar( 'footer__main-area' ) ) : ?>
		<?php dynamic_sidebar( 'footer__main-area' ); ?>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer__secondary-area' ) ) : ?>
		<?php dynamic_sidebar( 'footer__secondary-area' ); ?>
	<?php endif; ?>

	<?php	get_template_part( 'template-parts/footer__nav' ); ?>

</div>
