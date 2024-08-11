<?php get_header(); ?>

<div class="container">
	<div class="contents">
		<?php
			$page = get_post( get_the_ID());
			$category_ID = $page->post_name;
		?>

		<h1><?php echo the_title(); ?>の記事一覧</h1>

			<?php
				$newslist = get_posts( array(
					'category_name' => $category_ID,
					'posts_per_page' => 8
				));

				foreach( $newslist as $post):
					setup_postdata($post);
			?>

			<article <?php post_class( 'kiji-list' ); ?>>
			<a href="<?php the_permalink(); ?>">



			<!--画像を追加-->
			<?php if( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail('medium'); ?>
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
			<?php endif; ?>

			<div class="text">

				<!--タイトル-->
				<h2><?php the_title(); ?></h2>

				<!--投稿日-->
				<span>
					<i class="fas fa-pencil-alt"></i>
					<time datetime="<?php echo the_date('Y-m-d'); ?>">
						<?php echo get_the_date(); ?>
					</time>
				</span>
				<!--カテゴリー-->
				<?php if(is_category()): if( has_category()): ?>
					<span class="cat-data">
						<?php $postscat = get_the_category(); echo $postcat[0] -> name; ?>
					</span>
				<?php endif; endif; ?>


				<!--抜粋-->
				<?php the_excerpt(); ?>
			</div>

			</a>
			</article>

			<?php endforeach; ?><!-- ループ終了 -->
			<?php wp_reset_postdata(); ?>

	</div><!--コンテンツ用-->

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>