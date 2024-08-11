<?php get_header(); ?>

<div class="container m-auto">
	<div class="contents">
		<?php if(have_posts()): the_post(); ?>
		<!--タイトル-->
		<h1><?php the_title(); ?></h1>

		<!--アイキャッチ画像-->
		<?php if( has_post_thumbnail() ): ?>
			<div class="kiji-img">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php else: ?>
			<div class="kiji-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
			</div>
		<?php endif; ?>
		
		<article <?php post_class('kiji'); ?>>
			<!--投稿日・著者-->
			<div class="kiji-info">
				<!--投稿日-->
				<!--
				<span class="kiji-date">
					<i class="fas fa-pencil-alt"></i>
					<time datetime="<?php // echo get_the_date( 'Y-m-d' ); ?>">
						<?php // echo get_the_date(); ?>
					</time>
				</span>
			-->
				
				<!--カテゴリー-->
				<?php /*
					$categories = get_the_category();
					$separator = ' ';
					$output = '';
					if ( $categories ){ foreach( $categories as $category ){

							$output .= '<span class="cat-data"><a href="' . get_category_link( $category->term_id ) . '" title="' 
								. esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) )
								.'class="cat-data"' 
								. '">' . $category->cat_name . '</a></span>' . $separator;
						}

					echo trim( $output, $separator );
					}
					*/
				?>
			</div>

			

			<!--本文-->
			<?php the_content(); ?>

			<!--タグ-->
			<div class="kiji-tag">
				<?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'); ?>
			</div>
		</article>
		<?php endif; ?>
	</div>

<!-- 	
	<div class="col-4">
		<?php // get_sidebar(); ?>
	</div> -->
</div>

<?php get_footer(); ?>