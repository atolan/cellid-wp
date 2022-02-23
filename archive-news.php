<?php get_header(); ?>
  <main id="news">
  <section class="news">
    <h2 class="ttl inner">
      <?php _e('News', 'cellid');?>
    </h2>
    <div class="news-content inner">
      <?php
        if ( have_posts() ) :
          while ( have_posts() ) :  the_post(); 
      ?>
        <div class="news-item">
          <a href="<?php echo (get_field('link')) ? get_field('link') : the_permalink(); ?>" target="<?php echo (get_field('link')) ? '_blank' : '_self'; ?>" class="news-img">
            <?php 
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                echo '<img src="'.get_template_directory_uri().'/asset/img/news/placeholder.png" alt="Cellid">';
              }
            ?>
          </a>
          <a href="<?php echo (get_field('link')) ? get_field('link') : the_permalink(); ?>" target="<?php echo (get_field('link')) ? '_blank' : '_self'; ?>" class="news-part">
            <div class="news-part-ttl">
              <?php echo the_title();?>
            </div>
            <div class="news-part-date">
              <?php echo get_the_date();?>
            </div>
            <div class="news-part-txt">
              <?php echo get_field('lead');?>
            </div>
          </a>
        </div>
      <?php
          endwhile;
        endif;
          wp_reset_postdata();
      ?>
    </div>
  </section>
  </main>
<?php get_footer();?>