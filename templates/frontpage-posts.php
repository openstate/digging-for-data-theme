<br>
<br>
<hr class="bg-red">
<div class="row nieuwsberichten">
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
  <?php if (count($myposts) == 0): ?>
  <div class="col-xs-12 col-md-offset-6 col-md-3 nieuwsberichtenplaatje">
  <?php elseif (count($myposts) == 1): ?>
  <div class="col-xs-12 col-md-offset-3 col-md-3 nieuwsberichtenplaatje">
  <?php else: ?>
  <div class="col-xs-12 col-md-3 nieuwsberichtenplaatje">
  <?php endif; ?>
    <img class="img-responsive block" src="<?= get_template_directory_uri() . '/dist/images/paard.png' ?>" alt="Gemstone with a carving of two horses by a trough, Roman period. Foto van de Provincie Zuid-Holland">
  </div>
</div>

<br>
<br>
<hr class="bg-greygreen">
<div class="row datablogs">
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
  <?php if (count($myposts) == 0): ?>
  <div class="col-xs-12 col-md-offset-6 col-md-3 nieuwsberichtenplaatje">
  <?php elseif (count($myposts) == 1): ?>
  <div class="col-xs-12 col-md-offset-3 col-md-3 nieuwsberichtenplaatje">
  <?php else: ?>
  <div class="col-xs-12 col-md-3 nieuwsberichtenplaatje">
  <?php endif; ?>
  <img class="img-responsive block" src="<?= get_template_directory_uri() . '/dist/images/roman_figure.png' ?>" alt="Gemstone with a carving of a winged figure, Roman period. Foto van de Provincie Zuid-Holland">
  </div>
</div>
