<?php

  $oa_args = array(
    'post_type'   => 'ofertaacadmica',
    'order'       => 'ASC'
  );

  $oa_query = new WP_Query($oa_args);

  if ( $oa_query->have_posts() ) :

    while ( $oa_query->have_posts()) :

      $oa_query->the_post();

      $current_post = ((int)$oa_query->current_post + 1);

?>

  <div class="home-ofertaacademica">

      <div
        class="main-container home-grid vertical-padding <?php echo 'oferta-' . $current_post; ?>"
      >

        <?php if ( $oa_query->current_post % 2 === 0 ) : ?>

          <div
            class="text-info"
            data-aos="fade-up"
          >

            <h2><?php the_title(); ?></h2>

            <?php the_field('descripcion'); ?>

            <a href="#0" class="primary-button blue-background">
              Ver Ofertas
              <?php get_arrow_circle_right( '#ffffff' ); ?>
            </a>
            
          </div>

          <div
            class="image-info"
            data-aos="fade-left"
            data-aos-delay="100"
          >
          
            <?php the_post_thumbnail(); ?>
          
          </div>

        <?php else : ?>

          <div
            class="image-info"
            data-aos="fade-right"
            data-aos-delay="100"
          >
        
            <?php the_post_thumbnail(); ?>
          
          </div>

          <div
            class="text-info"
            data-aos="fade-up"
          >

            <h2><?php the_title(); ?></h2>

            <p class="medium-bottom-spacing">
              <?php the_field('descripcion'); ?>
            </p>

            <a href="#0" class="primary-button blue-background">
              Ver Ofertas
              <?php get_arrow_circle_right( '#ffffff' ); ?>
            </a>

          </div>

        <?php endif; ?>

      </div>

  </div>

<?php endwhile; endif; ?>