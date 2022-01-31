<?php
/**
 * The main template file
 *
 * @package dcaste_wp_starter
 */

get_header();
?>
<main id="main">

	<?php
	if ( have_posts() ) :
	?>

	<div id="archive__container">

		<header id="archive__header">
				<?php the_archive_title( '<h1>', '</h1>' ); ?>
		</header>

		<?php
		while ( have_posts() ) :
			the_post();
		?>

			<article class="archive__article">
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
		get_template_part( 'template-parts/content__none' );
	endif;
	?>

</main>

<?php
get_footer();
