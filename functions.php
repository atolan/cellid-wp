<?php

// ============   SET META TAGS IN EVERY PAGE    ============  //

function add_meta_data_firefog() {
  //Top Page
  if ( is_front_page()) {
    echo '<title>Cellid株式会社</title>';
    echo '<meta name="keywords" content="AR Glasses, AR/MR/VR, Display Module, Waveguide,Micro Projector,Cellid SLAM, Position Finder,Model Builder,AR Tag"/>';
    echo '<meta name="description" content="Cellid株式会社は、人工知能の一種である空間認識技術とナノテクノロジーに強みを持つ2017年に設立されたスタートアップです。当社はARグラス向けに、Waveguide方式のディスプレイシステムと高精度の空間認識ソフトウェアを開発しています。ARグラスをはじめ、スマートフォンやタブレット、スマートグラスといったデバイスに没入感の高いAR体験を提供します。"/>';
  } 
  //Software Page
  else if ( is_page('cellidslam') ) {
    echo '<title>Cellid SLAM</title>';
    echo '<meta name="keywords" content="Cellid SLAM, Position Finder,Model Builder,AR Tag,"/>';
    echo '<meta name="description" content="単眼カメラの映像のみを入力情報として、自己位置推定する空間認識ソフトウェアです。 6DoFを実現し、さらに大人数かつリアルタイムに大規模な空間を認識することができます。これによって認識した空間にデジタル情報を付与し現実世界にオーバーレイ表示することで、より没入感の高いUXを提供することができます。"/>';
  } 
  //Hareware Page
  else if ( is_page('displaymodule') ) {
    echo '<title>Display Module</title>';
    echo '<meta name="keywords" content="Display Module, Waveguide,Micro Projector,Cellid Waveguide 60"/>';
    echo '<meta name="description" content="FoV60の広い視野角を持つウェイブガイドと、1.2ccのコンパクトなプロジェクターで構成されたARグラス向けの表示デバイスです。広い視野角の確保と小型化の両立に成功した画期的な製品であり、ウェイブガイドはシンプルなデザインで量産に適しており、小型化したプロジェクターはARグラスのデザインの幅を広げます。"/>';
  } 
  //Careers Page
  else if ( is_page('careers') ) {
    echo '<title>Careers</title>';
    echo '<meta name="keywords" content="Careers,"/>';
    echo '<meta name="description" content="Cellid株式会社は、人工知能の一種である空間認識技術とナノテクノロジーに強みを持つ2017年に設立されたスタートアップです。当社はARグラス向けに、Waveguide方式のディスプレイシステムと高精度の空間認識ソフトウェアを開発しています。ARグラスをはじめ、スマートフォンやタブレット、スマートグラスといったデバイスに没入感の高いAR体験を提供します。"/>';
  }
  //Contact Page
  else if ( is_page('contact') ) {
    echo '<title>Contact</title>';
    echo '<meta name="keywords" content="Contact,"/>';
    echo '<meta name="description" content="Cellid株式会社は、人工知能の一種である空間認識技術とナノテクノロジーに強みを持つ2017年に設立されたスタートアップです。当社はARグラス向けに、Waveguide方式のディスプレイシステムと高精度の空間認識ソフトウェアを開発しています。ARグラスをはじめ、スマートフォンやタブレット、スマートグラスといったデバイスに没入感の高いAR体験を提供します。"/>';
  }
  //Contact Thanks Page
  else if ( is_page('thanks') ) {
    echo '<title>Thanks Page</title>';
    echo '<meta name="keywords" content=""/>';
    echo '<meta name="description" content="Cellid株式会社は、人工知能の一種である空間認識技術とナノテクノロジーに強みを持つ2017年に設立されたスタートアップです。当社はARグラス向けに、Waveguide方式のディスプレイシステムと高精度の空間認識ソフトウェアを開発しています。ARグラスをはじめ、スマートフォンやタブレット、スマートグラスといったデバイスに没入感の高いAR体験を提供します。"/>';
  }
  //Company Page
  else  if ( is_page('company') ) {
    echo '<title>Company</title>';
    echo '<meta name="keywords" content="AR Glasses, AR/MR/VR, Display Module, Waveguide,Micro Projector,Cellid SLAM, Position Finder,Model Builder"/>';
    echo '<meta name="description" content="Cellid株式会社は、人工知能の一種である空間認識技術とナノテクノロジーに強みを持つ2017年に設立されたスタートアップです。当社はARグラス向けに、Waveguide方式のディスプレイシステムと高精度の空間認識ソフトウェアを開発しています。ARグラスをはじめ、スマートフォンやタブレット、スマートグラスといったデバイスに没入感の高いAR体験を提供します。"/>';
  } 
  //Privacy Page
  else if ( is_page('privacy') ) {
    echo '<title>PRIVACY POLICY</title>';
    echo '<meta name="keywords" content="PRIVACY POLICY,"/>';
    echo '<meta name="description" content="Cellid株式会社は、人工知能の一種である空間認識技術とナノテクノロジーに強みを持つ2017年に設立されたスタートアップです。当社はARグラス向けに、Waveguide方式のディスプレイシステムと高精度の空間認識ソフトウェアを開発しています。ARグラスをはじめ、スマートフォンやタブレット、スマートグラスといったデバイスに没入感の高いAR体験を提供します。"/>';
  }
  //Others Page
  else {
    echo '<title>Cellid株式会社</title>';
    echo '<meta name="keywords" content="AR Glasses, AR/MR/VR, Display Module, Waveguide,Micro Projector,Cellid SLAM, Position Finder,Model Builder"/>';
    echo '<meta name="description" content="Cellid株式会社は、人工知能の一種である空間認識技術とナノテクノロジーに強みを持つ2017年に設立されたスタートアップです。当社はARグラス向けに、Waveguide方式のディスプレイシステムと高精度の空間認識ソフトウェアを開発しています。ARグラスをはじめ、スマートフォンやタブレット、スマートグラスといったデバイスに没入感の高いAR体験を提供します。"/>';
  }

}
add_action('wp_head', 'add_meta_data_firefog');

// ============   SET META TAGS IN EVERY PAGE    ============  //

define( 'HOME', home_url( '/' ) );
define( 'TITLE', get_option( 'blogname' ) );

// 状態
define( 'IS_ADMIN', is_admin() );
define( 'IS_LOGIN', is_user_logged_in() );
define( 'IS_CUSTOMIZER', is_customize_preview() );

// テーマディレクトリパス
define( 'T_DIRE', get_template_directory() );
define( 'S_DIRE', get_stylesheet_directory() );
define( 'T_DIRE_URI', get_template_directory_uri() );
define( 'S_DIRE_URI', get_stylesheet_directory_uri() );

// remove_filter('the_content', 'wpautop');

function replaceImagePath( $arg ) {
    $content = str_replace('"img/', '"' . T_DIRE_URI . '/asset/img/', $arg);
    $content = str_replace('"/img/', '"' . T_DIRE_URI . '/asset/img/', $content);
    $content = str_replace(', img/', ', ' . T_DIRE_URI . '/asset/img/', $content);
    $content = str_replace("('img/", "('". T_DIRE_URI . '/asset/img/', $content);
    return $content;
}
add_action('the_content', 'replaceImagePath');

/******************* 管理者ツールバー表示を消す ********************/
add_theme_support( 'post-thumbnails' );
show_admin_bar( false );

@ini_set( 'upload_max_size' , '500M' );
@ini_set( 'post_max_size', '500M');
@ini_set( 'max_execution_time', '3000' );



function news_post_type()
{
	$supports = array('title', 'editor', 'revisions', 'thumbnail');
	$labels = array(
		'name'                => _x( 'ニュース', 'Post Type General Name', 'cellid' ),
		'singular_name'       => _x( 'ニュース', 'Post Type Singular Name', 'cellid' ),
		'menu_name'           => __( 'ニュース', 'cellid' ),
		'parent_item_colon'   => __( '親のニュース', 'cellid' ),
		'all_items'           => __( 'すべてのニュース', 'cellid' ),
		'view_item'           => __( 'ニュースを見る', 'cellid' ),
		'add_new_item'        => __( '新しいニュースを追加する', 'cellid' ),
		'add_new'             => __( '新しく追加する', 'cellid' ),
		'edit_item'           => __( 'ニュースの編集', 'cellid' ),
		'update_item'         => __( 'ニュースの更新', 'cellid' ),
		'search_items'        => __( 'ニュース検索する', 'cellid' ),
		'not_found'           => __( '見つかりません', 'cellid' ),
		'not_found_in_trash'  => __( 'ゴミ箱に見つかりません', 'cellid' ),
	);
	register_post_type(
		'news',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'supports' => $supports,
		)
	);
}
add_action('init', 'news_post_type');

function staff_post_type()
{
	$supports = array('title', 'revisions', 'thumbnail');
	$labels = array(
		'name'                => _x( 'スタッフ', 'Post Type General Name', 'cellid' ),
		'singular_name'       => _x( 'スタッフ', 'Post Type Singular Name', 'cellid' ),
		'menu_name'           => __( 'スタッフ', 'cellid' ),
		'parent_item_colon'   => __( '親のスタッフ', 'cellid' ),
		'all_items'           => __( 'すべてのスタッフ', 'cellid' ),
		'view_item'           => __( 'スタッフを見る', 'cellid' ),
		'add_new_item'        => __( '新しいスタッフを追加する', 'cellid' ),
		'add_new'             => __( '新しく追加する', 'cellid' ),
		'edit_item'           => __( 'スタッフの編集', 'cellid' ),
		'update_item'         => __( 'スタッフの更新', 'cellid' ),
		'search_items'        => __( 'スタッフ検索する', 'cellid' ),
		'not_found'           => __( '見つかりません', 'cellid' ),
		'not_found_in_trash'  => __( 'ゴミ箱に見つかりません', 'cellid' ),
	);
	register_post_type(
		'staff',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'supports' => $supports,
      'taxonomies' => array( 'category' ),
		)
	);
}
add_action('init', 'staff_post_type');

function advisor_post_type()
{
	$supports = array('title', 'editor', 'revisions', 'thumbnail');
	$labels = array(
		'name'                => _x( 'アドバイザー', 'Post Type General Name', 'cellid' ),
		'singular_name'       => _x( 'アドバイザー', 'Post Type Singular Name', 'cellid' ),
		'menu_name'           => __( 'アドバイザー', 'cellid' ),
		'parent_item_colon'   => __( '親のアドバイザー', 'cellid' ),
		'all_items'           => __( 'すべてのアドバイザー', 'cellid' ),
		'view_item'           => __( 'アドバイザーを見る', 'cellid' ),
		'add_new_item'        => __( '新しいアドバイザーを追加する', 'cellid' ),
		'add_new'             => __( '新しく追加する', 'cellid' ),
		'edit_item'           => __( 'アドバイザーの編集', 'cellid' ),
		'update_item'         => __( 'アドバイザーの更新', 'cellid' ),
		'search_items'        => __( 'アドバイザー検索する', 'cellid' ),
		'not_found'           => __( '見つかりません', 'cellid' ),
		'not_found_in_trash'  => __( 'ゴミ箱に見つかりません', 'cellid' ),
	);
	register_post_type(
		'advisor',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'supports' => $supports,
      'taxonomies' => array( 'category' ),
		)
	);
}
add_action('init', 'advisor_post_type');

function software_post_type()
{
	$supports = array('title', 'revisions', 'thumbnail');
	$labels = array(
		'name'                => _x( 'ソフトウェア', 'Post Type General Name', 'cellid' ),
		'singular_name'       => _x( 'ソフトウェア', 'Post Type Singular Name', 'cellid' ),
		'menu_name'           => __( 'ソフトウェア', 'cellid' ),
		'parent_item_colon'   => __( '親のソフトウェア', 'cellid' ),
		'all_items'           => __( 'すべてのソフトウェア', 'cellid' ),
		'view_item'           => __( 'ソフトウェアを見る', 'cellid' ),
		'add_new_item'        => __( '新しいソフトウェアを追加する', 'cellid' ),
		'add_new'             => __( '新しく追加する', 'cellid' ),
		'edit_item'           => __( 'ソフトウェアの編集', 'cellid' ),
		'update_item'         => __( 'ソフトウェアの更新', 'cellid' ),
		'search_items'        => __( 'ソフトウェア検索する', 'cellid' ),
		'not_found'           => __( '見つかりません', 'cellid' ),
		'not_found_in_trash'  => __( 'ゴミ箱に見つかりません', 'cellid' ),
	);
	register_post_type(
		'software',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'supports' => $supports,
      'taxonomies' => array( 'category' ),
		)
	);
}
add_action('init', 'software_post_type');

function hardware_post_type()
{
	$supports = array('title', 'revisions', 'thumbnail');
	$labels = array(
		'name'                => _x( 'ハードウェア', 'Post Type General Name', 'cellid' ),
		'singular_name'       => _x( 'ハードウェア', 'Post Type Singular Name', 'cellid' ),
		'menu_name'           => __( 'ハードウェア', 'cellid' ),
		'parent_item_colon'   => __( '親のハードウェア', 'cellid' ),
		'all_items'           => __( 'すべてのハードウェア', 'cellid' ),
		'view_item'           => __( 'ハードウェアを見る', 'cellid' ),
		'add_new_item'        => __( '新しいハードウェアを追加する', 'cellid' ),
		'add_new'             => __( '新しく追加する', 'cellid' ),
		'edit_item'           => __( 'ハードウェアの編集', 'cellid' ),
		'update_item'         => __( 'ハードウェアの更新', 'cellid' ),
		'search_items'        => __( 'ハードウェア検索する', 'cellid' ),
		'not_found'           => __( '見つかりません', 'cellid' ),
		'not_found_in_trash'  => __( 'ゴミ箱に見つかりません', 'cellid' ),
	);
	register_post_type(
		'hardware',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'supports' => $supports,
      'taxonomies' => array( 'category' ),
		)
	);
}
add_action('init', 'hardware_post_type');

function product_post_type()
{
	$supports = array('title', 'revisions', 'thumbnail');
	$labels = array(
		'name'                => _x( 'プロダクト', 'Post Type General Name', 'cellid' ),
		'singular_name'       => _x( 'プロダクト', 'Post Type Singular Name', 'cellid' ),
		'menu_name'           => __( 'プロダクト', 'cellid' ),
		'parent_item_colon'   => __( '親のプロダクト', 'cellid' ),
		'all_items'           => __( 'すべてのプロダクト', 'cellid' ),
		'view_item'           => __( 'プロダクトを見る', 'cellid' ),
		'add_new_item'        => __( '新しいプロダクトを追加する', 'cellid' ),
		'add_new'             => __( '新しく追加する', 'cellid' ),
		'edit_item'           => __( 'プロダクトの編集', 'cellid' ),
		'update_item'         => __( 'プロダクトの更新', 'cellid' ),
		'search_items'        => __( 'プロダクト検索する', 'cellid' ),
		'not_found'           => __( '見つかりません', 'cellid' ),
		'not_found_in_trash'  => __( 'ゴミ箱に見つかりません', 'cellid' ),
	);
	register_post_type(
		'product',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'supports' => $supports,
      'taxonomies' => array( 'category' ),
		)
	);
}
add_action('init', 'product_post_type');

function job_post_type()
{
	$supports = array('title', 'revisions', 'thumbnail');
	$labels = array(
		'name'                => _x( 'ジョブ', 'Post Type General Name', 'cellid' ),
		'singular_name'       => _x( 'ジョブ', 'Post Type Singular Name', 'cellid' ),
		'menu_name'           => __( 'ジョブ', 'cellid' ),
		'parent_item_colon'   => __( '親のジョブ', 'cellid' ),
		'all_items'           => __( 'すべてのジョブ', 'cellid' ),
		'view_item'           => __( 'ジョブを見る', 'cellid' ),
		'add_new_item'        => __( '新しいジョブを追加する', 'cellid' ),
		'add_new'             => __( '新しく追加する', 'cellid' ),
		'edit_item'           => __( 'ジョブの編集', 'cellid' ),
		'update_item'         => __( 'ジョブの更新', 'cellid' ),
		'search_items'        => __( 'ジョブ検索する', 'cellid' ),
		'not_found'           => __( '見つかりません', 'cellid' ),
		'not_found_in_trash'  => __( 'ゴミ箱に見つかりません', 'cellid' ),
	);
	register_post_type(
		'job',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
			'menu_position' => 5,
			'supports' => $supports,
      'taxonomies' => array( 'category' ),
		)
	);
}
add_action('init', 'job_post_type');

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}

function slam() {
  ob_start();
  get_template_part("template/slam");
  return ob_get_clean();
}
add_shortcode('slam', 'slam');

wp_register_script( 'validation', get_stylesheet_directory_uri() . '/asset/js/validation.js' );
 
$translation_array = array(
  'name' => __('お名前をご入力してください。', 'cellid'),
  'subject' => __('タイトルをご入力してください。', 'cellid'),
  'email1' => __('メールアドレスをご入力してください。', 'cellid'),
  'email2' => __('入力されたメールアドレスに間違いがあります。', 'cellid'),
  'phone' => __('電話番号に間違いがあります。', 'cellid'),
  'message' => __('お問い合わせ内容をご入力してください。', 'cellid'),
);
wp_localize_script( 'validation', 'error_message', $translation_array );
 
wp_enqueue_script( 'validation' );
