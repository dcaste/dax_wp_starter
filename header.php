<?php
/**
 * Website main header
 *
 * @package dcaste_wp_starter
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> >

<?php get_template_part( 'template-parts/head' ); ?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<?php
		get_template_part( 'template-parts/header__desktop' );
		get_template_part( 'template-parts/header__mobile' );
