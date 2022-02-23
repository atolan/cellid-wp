<?php get_header(); ?>
  <main id="software">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 
    ?>
    <section class="mv single">
      <div class="overlay"></div>
      <div class="mv-box">
        <h1 class="mv-box-ttl">
          <?php echo the_title(); ?>
        </h1>
        <div class="mv-box-txt">
          <?php echo the_post_thumbnail_caption();?>
        </div>
      </div>
    </section>
    <section class="detail">
      <div class="detail-inner inner">
        <h2 class="detail-ttl">
          <?php echo the_field('detail_ttl'); ?>
        </h2>
        <div class="detail-txt">
          <?php echo the_field('detail'); ?>
        </div>
        <div class="detail-img zoom-img">
          <?php $image = get_field('image'); ?>
          <img src="<?php echo $image['url']?>">
        </div>
        <div class="detail-property">
          <div class="property">
            <div class="property-ttl">
              <?php echo the_field('property_name1'); ?>
            </div>
            <div class="property-txt">
              <?php echo the_field('property1'); ?>
            </div>
          </div>
          <div class="property">
            <div class="property-ttl">
              <?php echo the_field('property_name2'); ?>
            </div>
            <div class="property-txt">
              <?php echo the_field('property2'); ?>
            </div>
          </div>
          <div class="property">
            <div class="property-ttl">
              <?php echo the_field('property_name3'); ?>
            </div>
            <div class="property-txt">
              <?php echo the_field('property3'); ?>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <?php
        endwhile;
      endif;
        wp_reset_postdata();
    ?>
    <section class="foot">
      <div class="foot-inner inner">
        <hr>
        <div class="foot-content">
          <div class="part">
            <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/software/footer01.png" alt="">
            <div class="part-box">
              <div class="part-ttl">
                Cellid Waveguide 60
              </div>
              <div class="part-txt">
                <?php _e('視野角60度から始まる、<br class="_xls">新しいAR世界への入口', 'cellid');?>
              </div>
              <a href="" class="read-more"><?php _e('続気を読む', 'cellid');?> ></a>
            </div>
          </div>
          <div class="part">
            <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/software/footer02.png" alt="">
            <div class="part-box">
              <div class="part-ttl">
                <?php _e('ビジョン', 'cellid');?>
              </div>
              <div class="part-txt">
                ---------
              </div>
              <a href="" class="read-more"><?php _e('続気を読む', 'cellid');?> ></a>
            </div>
          </div>
          <div class="part">
            <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/software/footer02.png" alt="">
            <div class="part-box">
              <div class="part-ttl">
                <?php _e('会社', 'cellid');?>
              </div>
              <div class="part-txt">
                <?php _e('ヒトとデジタルの境界をなくし、<br class="_xls">制限や制約のない世界へ。', 'cellid');?>
              </div>
              <a href="" class="read-more"><?php _e('続気を読む', 'cellid');?> ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>