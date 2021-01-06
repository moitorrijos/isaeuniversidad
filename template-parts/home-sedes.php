<?php 

  $sedes_args = array(
    'post_type' => 'sede',
    'posts_per_page' => '3',
    'order'     =>  'ASC'
  );
  
  $sedes_query = new WP_Query( $sedes_args );
  
  if ( $sedes_query->have_posts() ) :

?>

  <div class="grid-3-carousel main-container medium-bottom-spacing">
    <?php
      while ( $sedes_query->have_posts() ) :
        $sedes_query->the_post();
        $foto = get_field('foto');
        $provincia = get_field('provincia');
        $ciudad = get_field('ciudad');
    ?>
      <a class="card" href="<?php echo get_permalink(); ?>">
        <figure>
          <img src="<?php echo $foto['url'] ?>" alt="<?php echo $foto['alt'] ?>">
        </figure>
        <h3 class="margin-bottom-1"><?php echo $ciudad; ?></h3>
        <p class="small no-vertical-margin"><?php echo $provincia; ?></p>
      </a>
    <?php endwhile; ?>
  </div>

<?php endif; ?>