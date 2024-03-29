<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package isaeuniversidad
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">

	<header id="masthead" class="site-header">

		<div class="top-header">

			<!-- <div class="white-spacing"></div> -->

			<p>

				<?php get_template_part('template-parts/icons/placeholder'); ?>

				Ciudad de Panamá, Panamá

			</p>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'top-menu',
						'menu_id'        => 'top-menu',
						'container'			 => false,
						'depth'					 => 0
					)
				);
			?>

		</div>

		<div class="branding-navigation">

			<div class="site-branding">

				<?php the_custom_logo(); ?>

			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'isaeuniversidad' ); ?></button>

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'			 => false,
							'depth'					 => 0
						)
					);
				?>

			</nav><!-- #site-navigation -->

		</div>

	</header><!-- #masthead -->
