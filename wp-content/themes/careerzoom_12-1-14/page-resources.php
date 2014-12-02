<?php get_header(); ?>
<div class="blog-page">
  <div class="twitter-feed">
    <a class="twitter-timeline" href="https://twitter.com/CareerZooming" data-widget-id="535522479725223936">Tweets by @CareerZooming</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
  <div class="blog-posts">
    <?php query_posts('posts_per_page=3'); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
