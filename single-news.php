<?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/asset/css/single.css">
  <main class="single">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 
    ?>
      <div class="ttl">
        <?php the_title()?>
      </div>
      <p class="date"><?php the_date()?></p>
      <div class="img">
        <?php if(has_post_thumbnail()) {
          echo the_post_thumbnail();
        } else {?>
          <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/news/placeholder.png" alt="display module">
        <?php }?>
      </div>
      <div class="txt">
        <?php the_content()?>
      </div>
    <?php
        endwhile;
      endif;
        wp_reset_postdata();
    ?>
  </main>
<?php get_footer();?>