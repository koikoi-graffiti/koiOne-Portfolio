<!---------header--------->
<?php get_header(); ?><!--header.phpの呼び出し-->

<div class="container-xxl d-flex">
	<!---------contents--------->
	<div class="contents row gap-0 row-gap-0">
		<!--カテゴリーページ、タグページのタイトル表示-->
		<?php if(is_category() || is_tag()): ?>
			<h1><?php single_cat_title() ?>の記事一覧</h1>
		<?php elseif(is_year()): ?>
			<h1><?php the_time("Y年") ?>の記事一覧</h1>
		<?php elseif (is_month()): ?>
			<h1><?php the_time("Y年m月") ?>の記事一覧</h1>
		<?php endif; ?>

		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<article <?php post_class( 'kiji-list col-3' ); ?>>
				<a href="<?php the_permalink(); ?>" target="_blank">
					<!--画像を追加-->
					<div class="article-img">
						<?php if( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail(''); ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
						<?php endif; ?>

					</div>
				</a>
			</article>
		<?php endwhile; endif; ?><!-- ループ終了 -->
		<div class="clear"></div>

		<!--ページネーション-->
		<div class="pagination">
			<?php echo paginate_links( array(
				'type' => 'list',
				'mid_size' => 'l',
				'prev_text' => '&laquo;',
				'next_text' => '&raquo;'
			)); ?>
		</div>
	</div>
	<!---------sidebar--------->
	
	<?php // get_sidebar(); ?><!--sidebar.phpの呼び出し-->
</div>

<!---------footer--------->
<?php get_footer(); ?><!--footer.phpの呼び出し-->