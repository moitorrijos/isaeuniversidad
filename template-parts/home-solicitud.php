<div class="seccion-solicitud large-vertical-padding">

  <div class="main-container inner-2-grid-wide">

    <div class="info-text">
      <h3>Solicitud de información</h3>
      <p>Ponte en contacto con nosotros y obtén información sobre la oferta académica de tu interés.</p>
      <h3>Contacto</h3>
      <p>
        Campus Central:<br>
        (+507) 278-1432 / 278-1444<br>
        info@isaeuniversidad.ac.pa
      </p>
    </div>

    <div class="formulario-solicitud">

      <form class="solicitud">
      
        <input type="text" name="tu-nombre" id="tu-nombre" placeholder="Nombre">
        <input type="text" name="tu-apellido" id="tu-apellido" placeholder="Apellido">
        <input type="text" name="tu-correo" id="tu-correo" placeholder="Correo Electrónico">
        <input type="text" name="tu-telefono" id="tu-telefono" placeholder="Teléfono">

        <select name="oferta-academica" id="oferta-academica">
          <?php
            $oa_query = new WP_Query( array(
              'post_type'   => 'ofertaacadmica',
              'order'       => 'ASC'
            ) );
            if ( $oa_query->have_posts() ) :
              while ( $oa_query->have_posts()) :
                $oa_query->the_post();
          ?>
            <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
          <?php endwhile; endif;?>
        </select>

        <select name="sedes" id="sedes">
        <?php
            $sedes_query = new WP_Query( array(
              'post_type'   => 'sede',
              'order'       => 'ASC'
            ) );
            if ( $sedes_query->have_posts() ) :
              while ( $sedes_query->have_posts()) :
                $sedes_query->the_post();
          ?>
            <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
          <?php endwhile; endif;?>
        </select>
        
        <button type="submit" class="primary-button secondary-blue-background">
          Enviar
          <?php get_arrow_circle_right( '#ffffff' ); ?>
        </button>
      
      </form>

    </div>

  </div>

</div>