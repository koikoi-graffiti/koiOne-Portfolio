<?php
//titleタグをhead内に生成
add_theme_support('title-tag');
	
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );

//アイキャッチ画像を使用
add_theme_support('post-thumbnails');

//サイドバーにウィジェットの追加
// function widgetarea_init(){

// }
// add_action('widgets_init', 'widgetarea_init');

if (function_exists('register_sidebar')) {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => 'サイドバーウィジェット',
		'before_widget' => '<div class="sidebar-wrapper">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="side-title">',
		'after_title' => '</h3>'
	));
  }

//フッターウィジェット L の追加
add_action( 'widgets_init', function(){
	register_sidebar( array(
		'name' => 'FooterWidget', // 管理画面のウィジェットエリアの名称
		'id' => 'footer-widget', // ウィジェットエリアの識別名称（出力時にも使用）
		'description' => 'フッターウィジェット', // 管理画面のウィジェットエリアの説明文
		'before_widget' => '<div class="col-md-4 footer-widget-wrapper"><div class="footer-widget">', // ウィジェットを囲むdivの開始タグ
		'after_widget' => '</div></div>', // ウィジェットを囲むdivの終了タグ
		'before_title' => '<h3 class="footer-widget-title">', // ウィジェットタイトルを囲むh3の開始タグ
		'after_title' => '</h3>', // ウィジェットタイトルを囲むh3の終了タグ
	) );
} );


//メニューボタンjsの呼び出し
function navbutton_scripts() {
	wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/navbutton.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'navbutton_scripts');

//ナビゲーションの生成
function create_menu_area() {
	register_nav_menu( 'header-nav', 'ヘッダー表示メニュー' );
	register_nav_menu( 'footer-nav', 'フッター表示メニュー' );
}
add_action( 'after_setup_theme', 'create_menu_area' );