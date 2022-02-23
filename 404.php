<?php
/**
 * The template for displaying 404 pages (not found)
 *
 *
 * @package WordPress
 * @subpackage Cell ID
 * @since cellid 1.0
 */

get_header();
?>

 <main id="pageNotFound">
  <section class="mv">
    <div class="mv-img">
      <img src="<?php echo get_stylesheet_directory_uri()?>/asset/img/company/mv.svg" alt="Cellid Slam">
    </div>
    <div class="mv-box">
      <h1 class="mv-box-ttl">
        <?php _e('ページが見つかりません。', 'cellid');?>
      </h1>
      <a href="<?php echo home_url();?>" class="btn">
        <div><?php _e('HOMEへ', 'cellid');?></div>
      </a>
    </div>
  </section>
</main>

<?php
get_footer();
