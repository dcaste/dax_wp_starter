<?php
/**
 * Barra de búsqueda.
 *
 * @package dcaste_wp_starter
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<span class="screen-reader-text"><?php echo 'Buscar'; ?></span>
	<input class="search-field" type="search" value="<?php echo get_search_query(); ?>" name="s"
	title="<?php echo esc_attr_x( 'Buscar por:', 'label' ); ?>" />

	<button type="submit" class="search-submit">
		<i class="icon-search"></i>
	</button>

</form>
