<?php get_header(); ?>
<div class="blog-page">
  <div class="twitter-feed"><?php get_sidebar(); ?></div>
  <div class="blog-posts">
    <?php query_posts('posts_per_page=3'); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
