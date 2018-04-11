<?php
/**
 * Template Name: Datablogs Page
 */
?>
<hr class="bg-greygreen no-top-margin">
<div class="row bg-greygreen">
  <div class="col-md-offset-2 col-md-6">
    <h1>DATABLOGS</h1>
    <?php
      $args = array( 'posts_per_page' => 100, 'category_name' => 'Datablog' );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>
      <hr class="small-hr">
      <?php get_template_part('templates/content', 'post'); ?>
    <?php endforeach;
      wp_reset_postdata();
    ?>
    <hr class="small-hr">
    <br>
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
