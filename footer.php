<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package isaeuniversidad
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="main-container inner-4-grid">
				<div class="footer-info">
					<div class="footer-logo">
						<?php get_template_part('template-parts/icons/logo-footer'); ?>
					</div>
					<p>
						<?php echo bloginfo('description'); ?>. Matricúla ya. #estudianeISAE. 
					</p>
					<h4 class="no-vertical-margin">Campus Central:</h4>
					<p class="no-vertical-margin">
						(+507) 278-1432 / 278-1444
					</p>
					<p class="no-vertical-margin">
						info@isaeuniversidad.ac.pa
					</p>
					<div class="social-icons">
						<?php
							$social_icons = array('facebook', 'instagram', 'twitter');
							foreach ( $social_icons as $icon ) :
						?>
							<img src="<?php echo IMAGEPATH . '/' . $icon . '.svg'; ?>" alt="<?php echo $icon; ?>">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
		<div class="copyright">
			<p>
				&copy; Copyright <?php echo date('Y'); ?>.
				Universidad ISAE, todos los derechos reservados.
			</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
