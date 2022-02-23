<?php
    /* 
    Template Name: Thanks
    */
?>
<?php get_header(); ?>
<main id="thanks">
  <section class="mv">
    <div class="mv-img">
      <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/company/mv.svg" alt="">
    </div>
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        <?php _e('メッセージが正常に<br class="_sms">送信されました。', 'cellid');?>
      </h1>
      <a href="<?php echo home_url();?>" class="btn">
        <div>
          <?php _e('HOMEへ', 'cellid');?>
        </div>
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>