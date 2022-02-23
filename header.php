<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="icon" type="image/png" sizes="30x30" href="<?php echo get_stylesheet_directory_uri(); ?>/asset/img/favicon/favicon.ico">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/asset/css/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/asset/css/aos.css">
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/asset/js/main.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/asset/js/aos.js"></script>
  <?php wp_head(); ?>

<body>
  <header id="header">
    <div class="header-inner">
      <div>
        <a href="<?php echo home_url();?>" class="header-logo">
          <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/common/logo.svg" alt=" Cellid SLAM">
        </a>
        <div class="header-menu _pc">
		  <a href="<?php echo home_url('displaymodule');?>">Display Module</a>
          <a href="<?php echo home_url('cellidslam');?>">Cellid SLAM</a>
          <a href="<?php echo home_url('company');?>">Company</a>
		<a href="<?php echo home_url('careers');?>">Careers</a>
        </div>
      </div>
      <div>
        <div class="header-lang" id="langTrigger" onclick="event.stopPropagation();langTrigger();">
          <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/common/lang.svg" alt="Display Module">
        </div>
        <div id="trigger" onclick="event.stopPropagation();menuTrigger();">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </div>
    </div>
  </header>
  <div class="side-menu">
    <div id="close" class="" onclick="event.stopPropagation();closeMenu();">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
    <div class="link">
	  <a href="<?php echo home_url('displaymodule');?>" class="_sp">Display Module</a>
      <a href="<?php echo home_url('cellidslam');?>" class="_sp">Cellid SLAM</a>
      <a href="<?php echo home_url('company');?>" class="_sp">Company</a>
		<a href="<?php echo home_url('careers');?>" class="_sp">Careers</a>
      <a href="<?php echo home_url('contact')?>">Contact</a>
    </div>
    <div class="side-logo _sp">
      <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/common/logo.svg" alt="Display Module">
    </div>
  </div>
  <div class="lang-menu">
    <?php echo do_action('wpml_add_language_selector');?>
  </div>