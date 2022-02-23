<?php
    /* 
    Template Name: Hardware
    */
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/asset/css/swiper-bundle.min.css">
<script src="<?php echo get_stylesheet_directory_uri()?>/asset/js/swiper-bundle.min.js"></script>
<main class="" id="hardware">
  <section class="mv">
    <!-- <div class="mv-img">
      <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/software/sec01.png" alt="Display Module">
    </div> -->
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        Display Module
      </h1>
      <div class="mv-box-txt">
        <?php _e('広視野角と小型化を実現した、<br class="_sp">ARグラス向けディスプレイモジュール ', 'cellid');?>
      </div>
    </div>
    <div class="mv-feature inner">
      <div class="mv-feature-part">
        <div class="feature-ttl">
          60°+
        </div>
        <div class="feature-txt">
          FoV
        </div>
      </div>
      <div class="mv-feature-part">
        <div class="feature-ttl">
          <span>&lt;</span>1.6mm
        </div>
        <div class="feature-txt">
          Thickness
        </div>
      </div>
      <div class="mv-feature-part">
        <div class="feature-ttl">
          <span>&lt;</span>1.0cc
        </div>
        <div class="feature-txt">
          Projector Size
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
        $args = array( 'post_type' => 'hardware', 'post_status' => 'publish', 'orderby' => 'menu_order' );
        $products = new WP_Query( $args );
        if( $products->have_posts() ) {
          while( $products->have_posts() ) {
          $products->the_post();
      ?>
        <div class="item" data-aos="fade-up" data-aos-delay="100">
          <div class="item-des">
            <div class="item-des-ttl"><?php echo the_title(); ?></div>
            <div class="item-des-txt">
              <?php echo the_field('description'); ?>
            </div>
          </div>
          <div class="item-img zoom-img zoom-img">
            <?php $image = get_field('image'); ?>
            <img src="<?php echo $image['url'];?>" alt="Display Module">
          </div>
        </div>
      <?php
          }
          wp_reset_postdata();
        }
        else {
            echo '制作実績はありません!';
        }
      ?>
      
    </div>
  </section>
  <section class="overview">
    <div class="swiper-container">
      <div class="swiper-wrapper">
      <?php 
        $args = array( 'post_type' => 'product', 'post_status' => 'publish', 'order_by' => 'menu_order' );
        $products = new WP_Query( $args );
        if( $products->have_posts() ) {
          while( $products->have_posts() ) {
          $products->the_post();
      ?>
        <div class="swiper-slide">
          <div class="part inner">
            <div class="part-ttl">
              <span>
                <?php if(get_field('detail_ttl')) {
                    echo get_field('detail_ttl');
                  } else {
                    echo the_title();
                  }
                ?>
              </span>
              Overview
            </div>
            <div class="part-box">
              <div class="part-box-info">
                <div class="info">
                  <div class="info-ttl">
                    <?php if(get_field('property_name1')) echo get_field('property_name1');?>
                  </div>
                  <div class="info-txt">
                    <?php if(get_field('property_name1')) echo get_field('property1');?>
                  </div>
                </div>
                <div class="info">
                  <div class="info-ttl">
                    <?php if(get_field('property_name1')) echo get_field('property_name2');?>
                  </div>
                  <div class="info-txt">
                    <?php if(get_field('property_name1')) echo get_field('property2');?>
                  </div>
                </div>
                <div class="info">
                  <div class="info-ttl">
                    <?php if(get_field('property_name1')) echo get_field('property_name3');?>
                  </div>
                  <div class="info-txt">
                    <?php if(get_field('property_name1')) echo get_field('property3');?>
                  </div>
                </div>
                <div class="info">
                  <div class="info-ttl">
                    <?php if(get_field('property_name1')) echo get_field('property_name4');?>
                  </div>
                  <div class="info-txt">
                    <?php if(get_field('property_name1')) echo get_field('property4');?>
                  </div>
                </div>
                <?php if(get_field('specification')) {
                  $file = get_field('specification');
                ?>
                  <a href="<?php echo $file['url']; ?>" target="_blank" class="btn"><div><?php _e('More Detail', 'cellid');?></div></a>
                <?php } else {?>
                  <div class="btn"><div><?php _e('Coming soon ', 'cellid');?></div></div>
                <?php }?>
              </div>
              <div class="part-box-img zoom-img">
                <?php $image = get_field('image'); ?>
                <img src="<?php echo $image['url'];?>" alt="Position Finder">
              </div>
            </div>
          </div>
        </div>
      <?php
          }
          wp_reset_postdata();
        }
        else {
            echo '制作実績はありません!';
        }
      ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next">
        &gt;
      </div>
      <div class="swiper-button-prev">
        &lt;
      </div>
    </div>
  </section>
  <section class="ramd">
    <h2 class="ramd-ttl inner">
      R&amp;D
    </h2>
    <p class="ramd-txt inner">
      <?php //_e('現実世界と融合し、ストレスのないUXをユーザーに提供するには、人間視野の広範囲をカバーするディスプレイシステムと、快適なUXを提供する空間認識ソフトウェアが重要な要素となります。Cellid はこれらUXを実現するために、人工知能とナノテクノロジーに力を入れ、研究・開発をしております。 ', 'cellid');?>
    </p>
    <div class="ramd-inner inner">
      <div class="item" data-aos="fade-up">
        <div class="item-img zoom-img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/hardware/ramd01.png" alt="">
        </div>
        <div class="item-des">
          <div class="item-des-ttl">
            <?php _e('Parallel computing', 'cellid');?>
          </div>
          <div class="item-des-txt">
            <?php _e('高精度な光学設計や、高速な空間認識ソフトウェアの開発には大規模な計算リソースが必要となります。CEOの白神はCERN(欧州原子核研究機構)の素粒子研究で得た、並列コンピューティングの知識を応用し、独自開発の高速シミュレーターを開発しました。 ', 'cellid');?>
          </div>
        </div>
      </div>
      <div class="item" data-aos="fade-up" data-aos-delay="100">
        <div class="item-img zoom-img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/hardware/ramd05.jpeg" alt="">
        </div>
        <div class="item-des">
          <div class="item-des-ttl">
            <?php _e('Optical Simulation', 'cellid');?>
          </div>
          <div class="item-des-txt">
            <?php _e('30年超の経験に基づくエキスパートたちの職人的なデザイン・ノウハウと共に、独自に開発した光学設計ツールを活用することで、既存のツールでは不可能であったナノフォトニクスのシミュレーションの高速化に成功し、世界最大級の優れたスペックを実現しました。', 'cellid');?>
          </div>
        </div>
      </div>
      <div class="item" data-aos="fade-up" data-aos-delay="200">
        <div class="item-img zoom-img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/hardware/ramd03.png" alt="">
        </div>
        <div class="item-des">
          <div class="item-des-ttl">
            <?php _e('Material', 'cellid');?>
          </div>
          <div class="item-des-txt">
            <?php _e('FoV60°+を達成するWaveguide、Micro Projectorの製作には特殊な素材の調達が必要となります。Cellidは国内・海外問わず光学分野で世界をリードする素材メーカーと良好な関係を構築し、お客様の要望に応じたデザインを可能にしております。 ', 'cellid');?>
          </div>
        </div>
      </div>
      <div class="item" data-aos="fade-up" data-aos-delay="300">
        <div class="item-img zoom-img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/hardware/ramd04.png" alt="">
        </div>
        <div class="item-des">
          <div class="item-des-ttl">
            <?php _e('Manufacturing', 'cellid');?>
          </div>
          <div class="item-des-txt">
            <?php _e('CellidのWaveguide設計は大量生産を念頭に置いて設計されており、低コストでの製造が可能な量産プロセスを設計しております。超微細加工に関する製造ノウハウとネットワークと共に、優秀なエンジニアリングチームがこれらを可能にしています。 ', 'cellid');?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script>
  var swiper1 = new Swiper(".swiper-container", {
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides: true,
    grabCursor: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    autoplay: {
      delay: <?php echo get_field('slide_delay_time') ? get_field('slide_delay_time') : 6000 ?>,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      200: {
      slidesPerView: 1
      },
      700: {
      slidesPerView: 1
      }
    }
  }); 
</script>
<?php get_footer(); ?>
