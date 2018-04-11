<div class="row bg-yellow">
  <div class="col-md-6 col-md-offset-2">
    <?php the_content(); ?>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </div>
  <div class="visible-lg col-lg-3 nieuwsberichtenplaatje">
    <br>
    <br>
    <img class="img-responsive" src="<?= get_template_directory_uri() . '/dist/images/welkomplaatje.png' ?>" alt="Gemstone with a carving of two horses by a trough, Roman period. Foto van de Provincie Zuid-Holland">
    <br>
    <br>
    <br>
    <br>
    <br>
    <img class="img-responsive block" src="<?= get_template_directory_uri() . '/dist/images/paard.png' ?>" alt="Gemstone with a carving of two horses by a trough, Roman period. Foto van de Provincie Zuid-Holland">
    <br>
    <br>
    <br>
    <br>
    <br>
    <img class="img-responsive block" src="<?= get_template_directory_uri() . '/dist/images/roman_figure.png' ?>" alt="Gemstone with a carving of a winged figure, Roman period. Foto van de Provincie Zuid-Holland">
  </div>
</div>
