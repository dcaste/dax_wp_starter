<?php
/**
 * WordPress Head.
 *
 * @package dcaste_wp_starter
 */

?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/img/favicon-32x32.png">
	<?php wp_head(); ?>
</head>
