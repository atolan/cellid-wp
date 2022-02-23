<?php get_header(); ?>

<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
      echo the_content();
    endwhile;
  endif;
    wp_reset_postdata();
?>

<?php get_footer();?>