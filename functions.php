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
require get_template_directory() . '/cpt/actividades.php';
require get_template_directory() . '/cpt/eventos.php';
require get_template_directory() . '/cpt/ofertasacademicas.php';
require get_template_directory() . '/cpt/sedes.php';
require get_template_directory() . '/cpt/unidadesacademicas.php';
require get_template_directory() . '/cpt/vidauniversitaria.php';

/**
 * Add Taxonomies
 */
// require get_template_directory() . '/taxonomies/ofertaacademica.php';
// require get_template_directory() . '/taxonomies/vidauniversitaria.php';

function create_semicircle($bg_color = '#FFCA07', $stroke_color = NULL, $styles = array()) {
	?>
		<svg
			class="semicircle"
			width="300"
			height="150"
			<?php if ( $styles ) : ?>
				style="<?php foreach ( $styles as $style => $value) {
					echo $style . ' :' . $value . ';';
				} ?>"
			<?php endif; ?>
		>
			<circle
				cx="150"
				cy="150"
				r="150"
				<?php if ($bg_color) : ?>
					fill="<?php echo $bg_color; ?>"
				<?php endif; ?>
				<?php if ($stroke_color) : ?>
					stroke="<?php echo $stroke_color; ?>"
				<?php endif; ?>
				stroke-width="2" 
			/>
		</svg>
	<?php
}

function create_circle($bg_color = '#FFCA07', $stroke_color = NULL, $styles = array()) {
	?>
		<svg
			class="circle"
			width="300"
			height="300"
			<?php if ( $styles ) : ?>
				style="<?php foreach ( $styles as $style => $value) {
					echo $style . ' :' . $value . ';';
				} ?>"
			<?php endif; ?>
		>
			<circle
				cx="150" cy="150" r="150" stroke-width="2" 
				<?php if ($bg_color) : ?>
					fill="<?php echo $bg_color; ?>"
				<?php endif; ?>
				<?php if ($stroke_color) : ?>
					stroke="<?php echo $stroke_color; ?>"
				<?php endif; ?>
			/>
		</svg>
	<?php
}