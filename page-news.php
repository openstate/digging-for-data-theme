<?php
/**
 * Template Name: News Page
 */
?>
<hr class="bg-red no-top-margin">
<div class="row bg-red">
  <div class="col-md-offset-2 col-md-6">
    <h1>NIEUWS</h1>
    <br>
    <?php
      $args = array( 'posts_per_page' => 100, 'category_name' => 'News' );
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
</div>
