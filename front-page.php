<?php

/**
 * Página de inicio
 */

get_header();

?>

<div class="home-hero">
  <div class="main-container home-hero-inner">
    <div class="home-hero-info">
      <h1>Matrículas Abiertas</h1>
      <p>Quidam officiis similique sea ei, vel tollit indoctum efficiendi ei, at nihil tantas platonem eos. Mazim nemore singulis an ius, nullam ornatus nam ei.</p>
      <a href="#0" class="primary-button yellow-background">
        Más información
        <?php get_template_part('template-parts/icons/arrow-right-circle'); ?>
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
</div>

<h1 class="centered max-600 vertical-spacing">
  <?php echo bloginfo('description'); ?>
</h1>

<?php
get_footer();
