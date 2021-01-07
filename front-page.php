<?php

/**
 * Página de inicio
 */

get_header();

?>

<?php get_template_part( 'template-parts/home', 'hero' ); ?>

<h1
  class="centered max-600 vertical-spacing"
  data-aos="fade-up"
  data-aos-offset="50"
  data-aos-duration="1000"
  data-aos-easing="ease-in-out"
>

  <?php echo bloginfo( 'description' ); ?>

</h1>

<?php

get_template_part( 'template-parts/home', 'sedes' );

get_template_part( 'template-parts/home', 'ofertaacademica' );

get_template_part( 'template-parts/home', 'noticias');

get_template_part( 'template-parts/home', 'actividades');

get_footer();
