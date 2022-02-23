<?php
    /* 
    Template Name: Software
    */
?>
<?php get_header(); ?>

<main id="software">
  <section class="mv">
    <div class="mv-img">
      <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/software/main.png" alt="Cellid SLAM">
    </div>
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        Cellid  SLAM
      </h1>
      <div class="mv-box-txt">
        <?php _e('大人数かつリアルタイムで、<br class="_sp">大規模空間認識が可能なソフトウェア', 'cellid');?>
      </div>
    </div>
    <div class="mv-feature inner">
      <div class="mv-feature-part">
        <div class="feature-ttl">
          <?php _e('大規模空間認識', 'cellid');?>
        </div>
        <div class="feature-txt">
          <?php _e('独自の距離推定アルゴリズムにより<br>1km四方を超える<br class="_sss">空間認識を実現', 'cellid');?>
        </div>
      </div>
      <div class="mv-feature-part">
        <div class="feature-ttl">
          <?php _e('リアルタイム', 'cellid');?>
        </div>
        <div class="feature-txt">
          <?php _e('独自の並列計算処理により<br>リアルタイムでの空間認識を実現', 'cellid');?>
        </div>
      </div>
      <div class="mv-feature-part">
        <div class="feature-ttl">
          <?php _e('マルチプレイ', 'cellid');?>
        </div>
        <div class="feature-txt">
          <?php _e('大人数にデジタル情報を共有し<br>現実世界にオーバーレイ表示が可能', 'cellid');?>
        </div>
      </div>
    </div>
  </section>
  <section class="product">
    <h2 class="product-ttl inner">
      <?php _e('Product', 'cellid');?>
    </h2>
    <div class="product-inner inner">
    <?php 
      $args = array( 'post_type' => 'software', 'post_status' => 'publish', 'orderby' => 'menu_order' );
      $products = new WP_Query( $args );
      if( $products->have_posts() ) {
        while( $products->have_posts() ) {
        $products->the_post();
    ?>
    <div class="item" data-aos="fade-up">
      <div class="item-img zoom-img">
        <?php
          $image = get_field('image');
        ?>
        <img src="<?php echo $image['url']?>">
      </div>
      <div class="item-des">
        <div class="item-des-ttl"><?php echo the_title(); ?></div>
        <div class="item-des-txt">
          <?php echo the_field('description'); ?>
        </div>
		<?php if(get_field('video')) {?>
        <a href="<?php echo get_field('video');?>" target="_blank" class="btn">
          <div>
            <?php _e('Watch Video');?>
          </div>
        </a>
		<?php }?>
      </div>
    </div>
    <?php
        }
        wp_reset_postdata();
      }
      else {
          _e('制作実績はありません!');
      }
    ?>
    </div>
  </section>
  <section class="voice">
    <h2 class="voice-ttl inner">
      User's Voice
    </h2>
    <div class="voice-inner inner">
      <div class="item">
        <div class="item-img zoom-img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/software/voice01.png" alt="">
        </div>
        <div class="item-des">
          <div class="item-des-ttl">
            <?php _e('Construction.', 'cellid');?>
          </div>
          <div class="item-des-txt">
            <?php _e('“LiDARやGPSを使わず正確な位置情報を推定する技術はこれまでになかった。BIMへの情報統合を目指すゼネコンにとってPosition Finderは重要な技術だと考えている”<br>(ゼネコンDX担当・部⻑) ', 'cellid');?>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="item-des">
          <div class="item-des-ttl">
            <?php _e('Gaming.', 'cellid');?>
          </div>
          <div class="item-des-txt">
            <?php _e('“AR技術を用いたヒットコンテンツは「ポケモンGO」程度しかない。Cellid SLAM が提供するマルチプレイは 新たなユーザーエクスペリエンスを提供できるポテンシャルがある”<br>(ゲーム大手社⻑室・室⻑) ', 'cellid');?>
          </div>
        </div>
        <div class="item-img zoom-img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/software/voice02.png" alt="">
        </div>
      </div>
      <div class="item">
        <div class="item-img zoom-img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/software/voice03.png" alt="">
        </div>
        <div class="item-des">
          <div class="item-des-ttl">
            <?php _e('Manufacturing.', 'cellid');?>
          </div>
          <div class="item-des-txt">
            <?php _e('“AR技術を、スマートフォンやヘルメットカメラという簡易なデバイスで実装可能にした点が優れている”　(財閥系製造業DX担当・課⻑)<br><br>“動線データや３Dデータ活用によって、ノウハウや進捗状況などをこれまで定量化できなかったものを、見える化し、さまざまな分析が可能になる”<br>(大手メーカーDX担当・課⻑)', 'cellid');?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>