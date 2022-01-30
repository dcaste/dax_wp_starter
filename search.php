<?php
/**
 * Search results page.
 *
 * @package dcaste_wp_starter
 */

get_header();
?>

	<main id="main">

		<?php if ( have_posts() ) : ?>

			<div id="search__container">

				<header id="search__header">
					<h1>
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search result for: %s' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header>

				<?php
				while ( have_posts() ) :
					the_post();
				?>

					<article class="search__article">
						<?php get_template_part( 'template-parts/posts__loop' ); ?>
					</article>

				<?php
					endwhile; // End While there are posts.
					the_posts_pagination();
				?>

			</div>

		<?php
		// If there are no posts.
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

	</main>

<?php
get_footer();
