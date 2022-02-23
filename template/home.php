<?php
    /* 
    Template Name: Home
    */
?>
<?php get_header(); ?>
<META HTTP-EQUIV='PRAGMA' CONTENT='NO-CACHE'>
<META HTTP-EQUIV='CACHE-CONTROL' CONTENT='NO-CACHE'>
<main id="home">
  <section class="mv main">
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        The innovator of<br>
        <span>AR</span> technologies
      </h1>
      <div class="mv-box-txt">
        <?php _e('Cellidのハードとソフトで<br class="_sp">ARグラスの普及を推進する', 'cellid'); ?>
      </div>
      <a href="https://youtu.be/uusRVZdfmH8" target="_blank" class="btn">
        <div>
          <?php _e('Watch Video', 'cellid'); ?>
        </div>
      </a>
    </div>
  </section>
  <section class="mv section01">
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        Display Module
      </h1>
      <div class="mv-box-txt">
        <?php _e('広視野角と小型化を実現した、<br class="_sp">ARグラス向けディスプレイモジュール', 'cellid'); ?>
      </div>
      <a href="<?php echo home_url('displaymodule')?>" class="btn">
        <div>
          <?php _e('Read more', 'cellid');?>  
        </div>
      </a>
    </div>
  </section>
  <section class="mv section02">
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        Cellid SLAM
      </h1>
      <div class="mv-box-txt">
        <?php _e('大人数かつリアルタイムで、<br class="_sp">大規模空間認識が可能なソフトウェア', 'cellid');?>
      </div>
      <a href="<?php echo home_url('cellidslam')?>" class="btn">
        <div>
          <?php _e('Read more', 'cellid');?>
        </div>
      </a>
    </div>
  </section>
  <section class="mv section03">
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        Company
      </h1>
      <div class="mv-box-txt">
        <?php _e('ヒトとデジタルの境界をなくし、<br class="_sp">制限や制約のない世界へ。', 'cellid');?>
      </div>
      <a href="<?php echo home_url('company')?>" class="btn">
        <div>
          <?php _e('Read more', 'cellid');?>
        </div>
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>