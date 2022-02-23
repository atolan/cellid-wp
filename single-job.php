<?php get_header(); ?>
  <script src="<?php echo get_stylesheet_directory_uri();?>/asset/js/validation.js"></script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/asset/css/single.css">
  <main id="career">
    <section class="job inner">
      <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post(); 
      ?>
        <h2 class="job-ttl">
          <?php echo the_title();?>
        </h2>
        <div class="job-date">
          <?php echo the_date();?>
        </div>
        <div class="job-content">
          <?php if(get_field('job_description')) {?> 
            <div class="part">
              <h4 class="part-ttl">
                <?php echo _e('職務内容', 'cellid');?>
              </h4>
              <div class="part-txt">
                <?php echo get_field('job_description'); ?>
              </div>
            </div>
          <?php }?>
          <?php if(get_field('Prerequisite')) {?> 
            <div class="part">
              <h4 class="part-ttl">
                <?php echo _e('必須条件', 'cellid');?>
              </h4>
              <div class="part-txt">
                <?php echo get_field('Prerequisite'); ?>
              </div>
            </div>
          <?php }?>
          <?php if(get_field('preferential_conditions')) {?> 
            <div class="part">
              <h4 class="part-ttl">
                <?php echo _e('優遇条件', 'cellid');?>
              </h4>
              <div class="part-txt">
                <?php echo get_field('preferential_conditions'); ?>
              </div>
            </div>
          <?php }?>
          <?php if(get_field('value_in_your_career')) {?> 
            <div class="part">
              <h4 class="part-ttl">
                <?php echo _e('あなたのキャリアにもたらす価値', 'cellid');?>
              </h4>
              <div class="part-txt">
                <?php echo get_field('value_in_your_career'); ?>
              </div>
            </div>
          <?php }?>
          <?php if(get_field('work_location')) {?> 
            <div class="part">
              <h4 class="part-ttl">
                <?php echo _e('勤務地', 'cellid');?>
              </h4>
              <div class="part-txt">
                <?php echo get_field('work_location'); ?>
              </div>
            </div>
          <?php }?>
          <?php if(get_field('others')) {?> 
            <div class="part">
              <h4 class="part-ttl">
                <?php echo _e('その他', 'cellid');?>
              </h4>
              <div class="part-txt">
                <?php echo get_field('others'); ?>
              </div>
            </div>
          <?php }?>
        </div>
      <?php
          endwhile;
        endif;
          wp_reset_postdata();
      ?>
    </section>
    <section class="form" id="scrollPosition">
      <div class="inner" id="inputData">
        <p class="form-txt">
      <?php _e('お問い合わせは下記フォームのご記入をお願いします。<br>なお、お問い合わせいただいてからお返事にお時間をいただく場合がございます。<br>あらかじめご了承ください。', 'cellid');?><br>
      <span> * </span><?php _e('は必須項目になります。', 'cellid');?>
        </p>
        <div class="form-area">
          <div class="form-group">
            <label><?php echo _e('お名前', 'cellid');?> <span>*</span></label>
            <input type="text" id="name" name="name" placeholder="Ichiro Suzuki">
          </div>
          <div class="form-group">
            <label><?php echo _e('電話番号', 'cellid');?></label>
            <input type="text" id="phone" name="phone" placeholder="+81 90 1234 5678">
          </div>
          <div class="form-group">
            <label><?php echo _e('メールアドレス', 'cellid');?> <span>*</span></label>
            <input type="text" id="email" name="email" placeholder="ichiro.suzuki@cellid.com">
          </div>
          <div class="form-group">
            <label><?php echo _e('ジョブタイトル', 'cellid');?> <span>*</span></label>
            <input type="text" name="subject" value="<?php echo the_title();?>" readonly id="subject">
          </div>
          <div class="form-group">
            <label><?php echo _e('お問い合わせ内容', 'cellid');?> <span>*</span></label>
            <textarea type="text" name="message" id="message"></textarea>
          </div>
          <div class="btn-group">
            <div class="contact-btn" onclick="validate();">
              <?php _e('確認画面へ', 'cellid');?>
            </div>
          </div>
          <hr>
        </div>
      </div>
      <div class="inner" id="ensureData">
        <p class="form-txt">
          <?php _e('入力内容をご確認してください。', 'cellid');?>
        </p>
        <form id="contactForm" action="<?php echo get_stylesheet_directory_uri();?>/mail.php" class="form-area"  method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label><?php _e('お名前 ', 'cellid');?></label>
              <input type="text" name="お名前" id="ensureName" value="" readonly>
            </div>
            <div class="form-group">
              <label><?php _e('電話番号', 'cellid');?></label>
              <input type="text" name="電話番号"  maxlength="16" value=""  id="ensurePhone" readonly>
            </div>
            <div class="form-group">
              <label><?php _e('メールアドレス', 'cellid');?></label>
              <input type="text" name="メイルアドレス" id="ensureEmail" value="" readonly>
            </div>
            <div class="form-group">
              <label><?php _e('ジョブタイトル', 'cellid');?></label>
              <input type="text" name="ジョブタイトル" id="ensureSubject" value="" readonly>
            </div>
            <div class="form-group">
              <label><?php _e('お問い合わせ内容', 'cellid');?></label>
              <textarea type="text" name="お問い合わせ内容" id="ensureMessage" value="" readonly></textarea>
            </div>
            <div class="btn-group">
              <div class="contact-btn" onclick="back();">
                <?php _e('戻る', 'cellid');?>
              </div>
              <div class="contact-btn" onclick="sendForm();">
                <?php _e('送信する', 'cellid');?>
              </div>
            </div>
        </form>
      </div>
    </section>
  </main>
<?php get_footer();?>