<?php while (have_posts()) : the_post(); ?>
  <hr class="bg-yellow no-top-margin">
  <div class="page-content">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  </div>
<?php endwhile; ?>
