<?php
/**
 * Default page.
 *
 * @package dcaste_wp_starter
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
?>

<main id="main">
	<header class="entry-header">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>
	<?php the_content(); ?>
</main>

<?php
endwhile;
endif;
get_footer();
