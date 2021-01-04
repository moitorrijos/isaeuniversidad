<?php 

  $sedes_args = array(
    'post_type' => 'sede',
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
      <div class="card">
        <figure class="card">
          <img src="<?php echo $foto['url'] ?>" alt="<?php echo $foto['alt'] ?>">
        </figure>
        <h3><?php echo $ciudad; ?></h3>
        <p class="small"><?php echo $provincia; ?></p>
      </div>
    <?php endwhile; ?>
  </div>

<?php endif; ?>