<?php
/**
 * Footer principal.
 *
 * @package dcaste_wp_starter
 */

?>
		<footer id="footer">

			<div id="footer-info" class="alignwide">

				<div id="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" loading="lazy">
					</a>
				</div>

			<div id="footer-copyright" class="alignwide">
				&copy <?php echo esc_html( date( 'Y' ) ); ?> dcaste_wp_starter. Todos los derechos reservados.
			</div>

		</footer>

		<a href="#top-bar" id="go-to-top" class="boton-green" title="Ir hacia arriba">
			<i class="icon-up"></i>
		</a>

		<?php	get_template_part( 'template-parts/secciones/header-mobile' ); ?>

		<?php wp_footer(); ?>

	</body>
</html>
