<?php while (have_posts()) : the_post(); ?>
  <br>
  <hr style="background-color: white; height: 18px; margin: 0;">
  <div class="page-content">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  </div>
<?php endwhile; ?>
