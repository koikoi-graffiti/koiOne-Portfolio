<!DOCTYPE html><!--htmlで書かれていることを宣言-->
<html lang="ja"><!--日本語のサイトであることを指定-->
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8"><!--エンコードがUTF-8であることを指定-->
<meta name="viewport"
content="width=device-width, initial-scale=1.0 "><!--viewportの設定-->

<!-- Google Adsense用 script -->
<script data-ad-client="ca-pub-3802577014001431" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


<!--noindexの設定-->
<?php if(is_tag() || is_date() || is_search() || is_404()): ?>
	<meta name="robots" content="noindex"/>
<?php endif; ?>

<!--SNS用　metaデータ-->
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:locale" coontent="ja_JP">

<!--twitter用 metaデータ-->
<meta name="twitter:site" content="@koikoi_graffiti">
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@koikoi_graffiti">

<!--個別ページのmetaデータ-->
<?php if( is_single() || is_page() ): ?>
	<?php setup_postdata($post) ?>
	<meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>" />
	<?php if ( has_tag() ): ?>
	<?php $tags = get_the_tags();
	$kwds = array();
	foreach($tags as $tag){
		$kwds[] = $tag->name;
	} ?>
	<meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
<?php endif; ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>">

<?php if( has_post_thumbnail() ): ?>
	<?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
	<meta property="og:image" content="<?php echo $postthumb[0]; ?>">
<?php endif; ?>

<meta name="twitter:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>">
<?php if( has_post_thumbnail() ): ?>
	<?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
	<meta name="twitter:image:src" content="<?php echo $postthumb[0]; ?>">
<?php endif; ?>
<?php elseif(is_home()): ?>
	<meta name="twitter:description" content="<?php bloginfo( 'description' ) ?>">
	<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/add/title.png">

<?php else: ?>
<!--個別ページ以外のmetaデータ-->
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php $allcats = get_categories();
	$kwds = array();

	foreach($allcats as $allcat){
		$kwds[] = $allcat -> name;
	} ?>
<meta name="keywords" content="<?php implode( ',', $kwds ); ?>">

	<!--SNS用 meta-->
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<?php $allcats = get_categories();
		$kwds = array();
		foreach($allcats as $allcat) {
		$kwds[] = $allcat->name;
		} ?>
	<meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
	<?php
		$http = is_ssl() ? 'https' . '://' : 'http' . '://';
		$url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	?>
	<meta property="og:url" content="<?php echo $url; ?>">
	<meta property="og:description" content="<?php bloginfo( 'description' ) ?>">
	<!--<meta property="og:image" content="挿入したい画像へのパス"-->
<?php endif; ?>

<!-- Bootstrap スタイルシート -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


<!--スタイルシートの呼び出し-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?<?php echo date('ymdHis',filemtime( get_template_directory().'/style.css')); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--font-awesomeのスタイルシートの呼び出し-->

<!--スマフォ用　icon-->
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/screenshot.png" />

<!--PCブラウザ用　icon-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/screenshot.png" />

<?php wp_head(); ?><!--システム・プラグイン用-->
</head>

<body <?php body_class(); ?>>
<header class="container-xl">
	<div class="header-inner" >
  		<!--タイトル表示-->
	  	<div class="site-title">
	  		<h1><a href="<?php echo home_url(); ?>">
				KOHEI<br/>NAKAHASHI
	  			<!-- <img src="<?php // echo get_template_directory_uri(); ?>/images/title.png" alt="<?php // bloginfo('name'); ?>"/> -->
	  		</a></h1>
	  	</div>

		<!--ヘッダーメニュー-->
		<?php wp_nav_menu( array(
			'theme_location' => 'header-nav',
			'container' => 'nav',
			'container_class' => 'header-nav',
			'container_id' => 'header-nav',
			'depth' => 4,
			'fallback_cb' => ''
		) ); ?>

		<!--sns btn-->
		<?php get_template_part('sns'); ?>
		<button type="button" id="navbutton">
			<i class="bi bi-list"></i>
	  	</button>
	</div>
</header>