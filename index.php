<?php get_header(); ?>
<main>
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); 
  ?>

  <?php
      endwhile; // ending while loop
    endif; // ending condition 
      wp_reset_postdata();
  ?>
</main>
      
<?php get_footer();?>