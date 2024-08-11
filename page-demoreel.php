<!DOCTYPE html><!--htmlで書かれていることを宣言-->
<html lang="ja"><!--日本語のサイトであることを指定-->
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8"><!--エンコードがUTF-8であることを指定-->
<meta name="viewport"
content="width=device-width, initial-scale=1.0 "><!--viewportの設定-->

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

<!-- style sheet for reel -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reel.css" type="text/css" />

<!-- stylesheet for Font -->
<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--font-awesomeのスタイルシートの呼び出し-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--font-awesomeのスタイルシートの呼び出し-->

<!--スマフォ用　icon-->
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/screenshot.png" />

<!--PCブラウザ用　icon-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/screenshot.png" />

<?php wp_head(); ?><!--システム・プラグイン用-->
</head>

<body <?php body_class(); ?>>

<?php get_template_part('demoreel'); ?>