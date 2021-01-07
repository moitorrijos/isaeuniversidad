<div class="home-hero">
  <div class="main-container home-hero-inner">
    <div class="home-hero-info">
      <h1>Matrículas Abiertas</h1>
      <p>
        La U de las oportunidades. Matricúlate hoy mismo.
        Estudia en cualquiera de nuestras 8 sedes.
        <em class="highlight">#estudianeISAE</em>
      </p>
      <a href="#0" class="primary-button yellow-background">
        Más información
        <?php get_arrow_circle_right( '#04256C' ); ?>
      </a>
    </div>
    <div class="home-hero-image">
      <img
        class="rounded-corners"
        src="<?php echo IMAGEPATH; ?>/sede-principal.jpg"
        alt="Sede Principal ISAE"
      >
    </div>
  </div>
  <div class="circles">
    <?php create_semicircle(); ?>
    <?php create_circle('transparent', '#FFEA9C'); ?>
    <?php create_semicircle('#84D0FF', 'transparent', array('top' => '40%', 'left' => '34%')); ?>
    <?php create_circle('transparent', '#84D0FF', array('top' => '50%', 'left' => '34%')); ?>
  </div>
</div> <!-- home-hero -->