<?php
/**
 * Archive page.
 *
 * @package dcaste_wp_starter
 */

get_header();
?>

<main id="main">

	<header class="entry-header">
			<?php the_archive_title( '<h1>', '</h1>' ); ?>
	</header>

	<div id="blog-container" class="alignwide">

		<?php
		if ( have_posts() ) :
		?>

			<!-- Inicia columna izquierda de contenido. -->
			<div class="blog-articulos">

				<?php
				while ( have_posts() ) :
					the_post();
				?>

					<article class="blog__articulo">

						<?php if ( has_post_thumbnail() ) : ?>
							<a class="blog__foto" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail( 'large' ); ?>
							</a>
						<?php endif; ?>

						<h2 class="blog__titulo">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>

						<p class="blog__meta">
							<?php
							the_time('F j, Y');
							if ( has_tag() ) {
								echo ' | ';
								the_tags();
							}
							?>
						</p>

						<p class="blog__excerpt">
							<?php
							if ( has_excerpt() ) {
								the_excerpt();
							} else {
								echo esc_html( wp_trim_words( get_the_content(), 20, '...' ) );
							}
							?>
						</p>

				</article>

					<?php
						endwhile;
						pagination();
					?>

				</div>

			<?php

			else :

				get_template_part( 'template-parts/content', 'none' );

			?>

				</div>
				<!-- Finaliza columna izquierda de contenido. -->

			<?php endif; ?>

		<?php get_sidebar(); ?>

	</div><!-- Blog container. -->

</main><!-- #main -->

<?php
get_footer();
