<?php
/**
 * Template Name: Datablogs Page
 */
?>
<hr class="bg-greygreen">
<div class="archive">
  <div class="row">
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
  </div>
</div>
