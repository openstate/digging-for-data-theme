<?php while (have_posts()) : the_post(); ?>
  <hr class="bg-yellow no-top-margin">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
