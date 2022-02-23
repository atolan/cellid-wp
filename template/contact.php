<?php
    /* 
    Template Name: Contact
    */
?>
<?php get_header(); ?>
<script src="<?php echo get_stylesheet_directory_uri();?>/asset/js/validation.js"></script>
<main class="" id="contact">
  <!--  <section class="mv">
    <div class="mv-img">
      <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/company/sec03.png" alt="Cellid">
    </div>
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        <?php _e('Contact Us', 'cellid');?>
      </h1>
      <a href="" class="btn">
        <div>
          <?php _e('ビデオを見る', 'cellid');?>  
        </div>
      </a>
    </div>
  </section> -->
  <section class="form" id="scrollPosition">
    <div class="inner" id="inputData">
      <p class="form-txt">
		<?php _e('お問い合わせは下記フォームのご記入をお願いします。<br>なお、お問い合わせいただいてからお返事にお時間をいただく場合がございます。あらかじめご了承ください。', 'cellid');?><br>
		<span> * </span><?php _e('は必須項目になります。', 'cellid');?>
      </p>
      <div class="form-area">
        <div class="form-group">
          <label><?php echo _e('お名前', 'cellid');?> <span>*</span></label>
          <input type="text" id="name" name="name" placeholder="Ichiro Suzuki">
        </div>
        <div class="form-group">
          <label><?php echo _e('会社名', 'cellid');?></label>
          <input type="text" id="company" name="company" placeholder="Company Inc.">
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
          <label><?php echo _e('タイトル', 'cellid');?> <span>*</span></label>
          <input type="text" name="subject" id="subject">
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
            <label><?php _e('会社 ', 'cellid');?></label>
            <input type="text" name="会社" id="ensureCompany" value="" readonly>
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
            <label><?php _e('タイトル', 'cellid');?></label>
            <input type="text" name="タイトル" id="ensureSubject" value="" readonly>
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

<?php get_footer(); ?>