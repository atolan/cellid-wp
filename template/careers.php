<?php
    /* 
    Template Name: Career
    */
?>
<?php get_header(); ?>
<main class="" id="career">
  <section class="mv">
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        <?php _e('OPEN POSITIONS', 'cellid');?>
      </h1>
    </div>
  </section>
  <section class="team">
    <div class="subttl inner">
      <?php _e('JOB TITLE', 'cellid');?>
    </div>
    <div class="advisor-content inner">
      <?php
        $post_args = array( 'post_type' => 'job', 'orderby' => 'menu_order' );
        $loop = new WP_Query( $post_args );
        if ( $loop -> have_posts() ) :
          while ( $loop-> have_posts() ) :  $loop->the_post(); 
      ?>
        <div class="team-advisor">
          <a href="<?php echo the_permalink();?>" class="advisor-photo" style="display: block;">
            <?php
              $image = get_field('image');
              if($image['url']) {
            ?>
              <img src="<?php echo $image['url']?>" alt="Cellid">
            <?php } else {?>
              <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/company/default.png" alt="Cellid">
            <?php }?>
          </a>
          <a href="<?php echo the_permalink();?>" class="advisor-info" style="display: block;">
            <div class="advisor-info-name">
              <?php echo the_title();?>
            </div>
            <div class="advisor-info-en">
              <?php echo get_field('job_type');?>
            </div>
            <div class="advisor-info-role">
              <?php echo get_field('location');?>
            </div>
            <div class="advisor-info-content">
              <?php echo the_content();?>
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

<?php get_footer(); ?>