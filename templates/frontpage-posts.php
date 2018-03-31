<br>
<br>
<hr class="bg-red">
<div class="nieuwsberichten container-padding">
  <div class="row">
    <div class="col-md-2">
      <div class="post-header">NIEUWS</div>
    </div>
    <?php
      $args = array( 'posts_per_page' => 2, 'category_name' => 'News' );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>
      <div class="col-md-3">
        <?php get_template_part('templates/content'); ?>
      </div>
    <?php endforeach;
      wp_reset_postdata();
    ?>
  <div class="col-xs-12 col-md-3 nieuwsberichtenplaatje"> 
    <img class="img-responsive block" src="<?= get_template_directory_uri() . '/dist/images/paard.png' ?>" alt="Gemstone with a carving of two horses by a trough, Roman period. Foto van de Provincie Zuid-Holland">
  </div>
  </div>
</div>

<br>
<br>
<hr class="bg-greygreen">
<div class="datablogs container-padding">
  <div class="row">
    <div class="col-md-2">
      <div class="post-header">DATABLOGS</div>
    </div>
    <?php
      $args = array( 'posts_per_page' => 2, 'category_name' => 'Datablog' );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>
      <div class="col-md-3">
        <?php get_template_part('templates/content'); ?>
      </div>
    <?php endforeach;
      wp_reset_postdata();
    ?>
    <div class="col-xs-12 col-md-3 nieuwsberichtenplaatje"> 
    <img class="img-responsive block" src="<?= get_template_directory_uri() . '/dist/images/roman_figure.png' ?>" alt="Gemstone with a carving of a winged figure, Roman period. Foto van de Provincie Zuid-Holland">
  </div>
  </div>
</div>
