<?php
/**
 * Website Footer.
 *
 * @package dcaste_wp_starter
 */

?>
		<footer id="footer">
			<div id="footer__container">

				<?php	get_template_part( 'template-parts/footer__left-area' ); ?>
				<?php	get_template_part( 'template-parts/footer__right-area' ); ?>

				<div id="footer__copyright">
					&copy <?php echo esc_html( date( 'Y' ) ); ?> dcaste_wp_starter.
				</div>

			</div>
		</footer>

		<a href="#" id="go__top" title="Go to top">
			<i class="icon-up-open"></i>
		</a>

		<?php wp_footer(); ?>

	</body>
</html>
