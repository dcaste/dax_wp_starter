<?php
/**
 * Posts loop.
 * Loop used in Archive and Search results pages.
 *
 * @package dcaste_wp_starter
 */

?>

<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php the_post_thumbnail('thumbnail'); ?>
	</a>
<?php endif; ?>

<header>

	<h2 class="article__title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>

	<p class="article__meta">
		<?php
		the_date();
		if ( has_tag() ) {
			echo ' | ';
			the_tags();
		}
		?>
	</p>

</header>

<p class="article__excerpt">
	<?php
	if ( has_excerpt() ) {
		the_excerpt();
	} else {
		echo esc_html( wp_trim_words( get_the_content(), 20, '...' ) );
	}
	?>
</p>
