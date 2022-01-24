<?php
/**
 * Footer principal.
 *
 * @package dcaste_wp_starter
 */

?>
		<footer id="footer">
			<div id="footer__container">

				<?php	get_template_part( 'template-parts/footer__logo' ); ?>

				<?php if ( is_active_sidebar( 'footer__social-icons' ) ) : ?>
					<div class="footer__top-bar__item">
						<?php dynamic_sidebar( 'footer__social-icons' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer__main-area' ) ) : ?>
					<?php dynamic_sidebar( 'footer__main-area' ); ?>
				<?php endif; ?>

				<?php	get_template_part( 'template-parts/footer__nav' ); ?>

				<div id="footer__copyright">
					&copy <?php echo esc_html( date( 'Y' ) ); ?> dcaste_wp_starter.
				</div>

			</div>
		</footer>

		<a href="#" id="go__top" title="Go to top">
			<i class="icon-up-open"></i>
		</a>

		<?php	get_template_part( 'template-parts/nav__mobile' ); ?>

		<?php wp_footer(); ?>

	</body>
</html>
