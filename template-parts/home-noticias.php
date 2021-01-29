<?php

$noticias = new WP_Query( array(
  'posts_per_page' => '3',
  'category_name' => 'destacada'
) );

if ( $noticias->have_posts() ) :

?>

  <div class="home-noticias medium-vertical-padding large-bottom-padding">

    <h2 class="centered large-bottom-spacing">Últimas Noticias</h2>

    <div class="main-container grid-3 slim-cards">

      <?php
      
        while ( $noticias->have_posts() ) :

          $noticias->the_post();
      
      ?>
    
          <div
            class="slim-card"
            data-aos="fade-up"
            data-aos-delay="<?php echo ((int)$noticias->current_post * 300); ?>"
          >
          
            <figure>

              <?php if ( has_post_thumbnail() ) : ?>
                
                <?php the_post_thumbnail(); ?>

              <?php else : ?>

                <img src="<?php echo IMAGEPATH; ?>/default-image.jpg" alt="ISAE Universidad" />

              <?php endif; ?>
            
            </figure>

            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="slim-card-info">
            
                <p class="the-date"><?php the_date(); ?></p>

                <h4><?php the_title(); ?></h4>

                <p class="the-author"><?php the_author(); ?></p>
            
            </a>
          
          </div>

      <?php endwhile; ?>

    </div>

  </div>

<?php endif; ?>