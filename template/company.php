<?php
    /* 
    Template Name: Company
    */
?>
<?php get_header(); ?>
<script type="application/ld+json">{ "@context": "https://schema.org", "@type": "Organization", "name": "Cellid", "hasMap": "https://goo.gl/maps/BEpDPuU7vTfKE1we6" }</script>
<main class="" id="company">
  <section class="mv">
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        <?php _e('ヒトとデジタルの<br class="_sss">境界をなくし、<br>制限や制約のない世界へ。', 'cellid');?>
      </h1>
    </div>
  </section>
  <section class="news">
    <h2 class="ttl inner">
      <?php _e('News', 'cellid');?>
    </h2>
    <div class="news-content inner">
      <?php
        $post_args = array( 'post_type' => 'news', 'orderby' => 'menu_order', 'posts_per_page' => 4);
        $loop = new WP_Query( $post_args );
        if ( $loop -> have_posts() ) :
          while ( $loop-> have_posts() ) :  $loop->the_post(); 
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
    <a href="<?php echo home_url('news')?>" class="news-archive">
      <?php _e('Archive', 'cellid');?>
    </a>
  </section>
  <section class="team">
    <h2 class="ttl inner">
      <?php _e('Team', 'cellid');?>
    </h2>
    <div class="team-content inner">
      <?php
        $post_args = array( 'post_type' => 'staff', 'orderby' => 'menu_order' );
        $loop = new WP_Query( $post_args );
        if ( $loop -> have_posts() ) :
          while ( $loop-> have_posts() ) :  $loop->the_post(); 
      ?>
        <div class="team-member">
          <div class="team-member-img">
		  	
            <?php
			  if(get_field('photo')) {
			  	$photo = get_field('photo');
			?>
              <?php echo get_field('linkedin') ? ("<a href='".get_field('linkedin')."' target='_blank'>") : ""; ?><img src="<?php echo $photo['url'] ?>" alt="Pallarel Computing"><?php echo get_field('linkedin') ? ("</a>") : ""; ?>
			<?php } else {?>
				<?php echo get_field('linkedin') ? ("<a href='".get_field('linkedin')."' target='_blank'>") : ""; ?><img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/company/default.png" alt="Pallarel Computing"><?php echo get_field('linkedin') ? ("</a>") : ""; ?>
			<?php }?>
          </div>
          <p class="team-member-name"><?php echo get_field('name_jp')?><br><?php echo get_field('name_en')?></p>
          <p class="team-member-role"><?php echo get_field('role')?></p>
        </div>
      <?php
          endwhile;
        endif;
          wp_reset_postdata();
      ?>
    </div>
    <div class="subttl inner">
      <?php _e('Advisers', 'cellid');?>
    </div>
    <div class="advisor-content inner">
      <?php
        $post_args = array( 'post_type' => 'advisor', 'orderby' => 'menu_order',  'category_name' => 'advisor' );
        $loop = new WP_Query( $post_args );
        if ( $loop -> have_posts() ) :
          while ( $loop-> have_posts() ) :  $loop->the_post(); 
      ?>
        <div class="team-advisor">
          <div class="advisor-photo">
            <?php
              $image = get_field('image');
              if($image['url']) {
            ?>
                    <img src="<?php echo $image['url']?>" alt="Cellid">
            <?php } else {?>
              <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/company/default.png" alt="Cellid">
            <?php }?>
          </div>
          <div class="advisor-info">
            <div class="advisor-info-name">
              <?php echo get_field('organization');?>
            </div>
            <div class="advisor-info-en">
              <?php echo get_field('name_en');?>
            </div>
            <div class="advisor-info-role">
              <?php echo get_field('name');?>
            </div>
            <div class="advisor-info-content">
              <?php echo the_content();?>
            </div>
          </div>
        </div>
      <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
    </div>
	  <div class="subttl inner">
      <?php _e('Legal Advisers', 'cellid');?>
    </div>
    <div class="advisor-content inner">
      <?php
        $post_args = array( 'post_type' => 'advisor', 'orderby' => 'menu_order', 'category_name' => 'legal' );
        $loop = new WP_Query( $post_args );
        if ( $loop -> have_posts() ) :
          while ( $loop-> have_posts() ) :  $loop->the_post(); 
      ?>
        <div class="team-advisor">
          <div class="advisor-photo">
            <?php
              $image = get_field('image');
              if($image['url']) {
            ?>
                    <img src="<?php echo $image['url']?>" alt="Waveguide">
            <?php } else {?>
              <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/company/default.png" alt="Cellid">
            <?php }?>
          </div>
          <div class="advisor-info">
            <div class="advisor-info-name">
              <?php echo get_field('organization');?>
            </div>
            <div class="advisor-info-en">
              <?php echo get_field('name_en');?>
            </div>
            <div class="advisor-info-role">
              <?php echo get_field('name');?>
            </div>
            <div class="advisor-info-content">
              <?php echo the_content();?>
            </div>
          </div>
        </div>
      <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
    </div>
  </section>
  <section class="map">
    <h2 class="ttl inner">
      <?php _e('Company', 'cellid');?>
    </h2>
    <div class="map-content inner">
      <div class="name"><?php _e('Cellid株式会社', 'cellid');?></div>
      <div class="address"><?php _e('〒106-0032 東京都港区六本木7-18-18 <br class="_sp">住友不動産六本木通ビル2F', 'cellid');?></div>
      <div class="company-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.610872488249!2d139.7261770504738!3d35.66195773853973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b79de9e71e5%3A0x5f877593196f20d1!2z5L2P5Y-L5LiN5YuV55Sj5YWt5pys5pyo6YCa44OT44Or!5e0!3m2!1sja!2sjp!4v1500894500598" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>