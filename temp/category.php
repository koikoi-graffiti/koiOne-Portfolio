<?php get_header(); ?>

<div class="container">
	<div class="contents">
		<?php
			$arg = array(
				'posts_per_page' => 4,
				'orderby' => 'date',
				'order' => 'DESC',
				'category_name' => 'スラッグの名前'
			);
			$posts = get_posts( $arg );
			if($posts): 
		?>

		<ul>
			<?php foreach($posts as $post):
				setup_postdata($post); ?>
				<li><?php 
					the_time('Y-m-d'); ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; wp_reset_postdata(); ?>
	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>