<?php
/**
 * Header
 *
 * @package dcaste_wp_starter
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> >

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/img/favicon-32x32.png">
	<?php wp_head(); ?>
</head>

<body>

	<div id="header-desktop">
		<?php
			get_template_part( 'template-parts/secciones/header-top-bar' );
			get_template_part( 'template-parts/secciones/header-desktop' );
		?>
	</div>

	<nav id="nav-mobile">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img class="mobile-logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-dcaste_wp_starter.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</a>
		<a id="mobile-toggle" href="#mobile-menu" class="boton-white">
			<i class="icon-menu"></i>
		</a>
	</nav>
