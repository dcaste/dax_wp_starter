<?php
/**
 * Single post.
 *
 * @package dcaste_wp_starter
 */

get_header();
?>

	<main id="main">

		<?php
		while ( have_posts() ) :
			the_post();
		?>

			<div id="blog__container">

				<article id="blog__content">

					<header id="article__header">

						<?php the_title( '<h1>', '</h1>' ); ?>

						<p id="article__meta">
							<?php
							the_date();
							if ( has_tag() ) {
								echo ' | ';
								the_tags();
							}
							?>
						</p>

					</header>

					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>

					<?php the_content(); ?>

					<?php the_post_navigation(); ?>

				</article>

				<?php get_sidebar(); ?>

			</div>

		<?php
		endwhile; // Ends while there are posts.
		?>

	</main>

<?php
get_footer();
