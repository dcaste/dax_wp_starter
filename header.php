<?php
/**
 * Header
 *
 * @package dcaste_wp_starter
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> >

<?php get_template_part( 'template-parts/head' ); ?>

<body>
	<?php
		get_template_part( 'template-parts/header__desktop' );
		get_template_part( 'template-parts/nav__mobile' );
