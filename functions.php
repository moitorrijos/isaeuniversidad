<?php
/**
 * isaeuniversidad functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package isaeuniversidad
 */

require get_template_directory() . '/inc/define_constants.php';

/**
 * Theme setup
 */
require get_template_directory() . '/inc/isaeuniversidad_setup.php';

/**
 * Content Width Constant
 */
require get_template_directory() . '/inc/content_width.php';

/**
 * Register widget area
 */
require get_template_directory() . '/inc/register-widget-area.php';

/**
 * Register Styles and Scripts
 */
require get_template_directory() . '/inc/register-styles-scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add CPTs
 */
// require get_template_directory() . '/cpt/actividades.php';
require get_template_directory() . '/cpt/eventos.php';
require get_template_directory() . '/cpt/ofertasacademicas.php';
require get_template_directory() . '/cpt/sedes.php';
require get_template_directory() . '/cpt/unidadesacademicas.php';
require get_template_directory() . '/cpt/vidauniversitaria.php';

/**
 * SVG Graphics and Icons
 */

require get_template_directory() . '/inc/icons.php';
require get_template_directory() . '/inc/circles.php';

// Add search icon to main menu
function add_search_icon( $items, $args ) {
	if( $args->theme_location == 'menu-1' ) {
		$search_link = '<li class="search">
			<a href="#search">
				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7877 12.9249L20 18.0957L18.0226 20.0574L12.7826 14.859C11.4688 15.7515 9.88198 16.274 8.17338 16.274C3.66668 16.274 0 12.6374 0 8.16571C0 3.69487 3.66668 0.057373 8.17338 0.057373C12.6809 0.057373 16.3476 3.69487 16.3476 8.16571C16.3476 9.94237 15.768 11.5874 14.7877 12.9249ZM8.17438 2.43488C4.98903 2.43488 2.39757 5.00571 2.39757 8.16571C2.39757 11.3257 4.98819 13.8965 8.17438 13.8965C11.3597 13.8965 13.9512 11.3257 13.9512 8.16571C13.9512 5.00571 11.3597 2.43488 8.17438 2.43488Z" fill="#1E1F22"/>
				</svg>
			</a>
		</li>';
		$items = $items . $search_link;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'add_search_icon', 10, 2 );

add_action('rest_api_init', 'register_rest_images' );

function register_rest_images() {
	register_rest_field( 
		'post',
		'featured_image_src',
		array(
			'get_callback'    => 'get_rest_featured_image'
		)
	);
}

function get_rest_featured_image( $object ) {
	if( $object['featured_media'] ){
			$img = wp_get_attachment_image_src( $object['featured_media'], 'large' );
			return $img[0];
	}
	return false;
}

function moi_footer_admin () {
	$wordpress = '<a href="//es.wordpress.org">WordPress</a>';
	$moitorrijos = '<a href="//moitorrijos.com">Juan Moisés Torrijos</a>';
  echo 'Creado utilizando ' . $wordpress . ' por ' . $moitorrijos . '.';
}
add_filter('admin_footer_text', 'moi_footer_admin');