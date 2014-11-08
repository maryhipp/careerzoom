<?php get_header(); ?>

<div class="blog-page">
  <?php query_posts('posts_per_page=3'); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
