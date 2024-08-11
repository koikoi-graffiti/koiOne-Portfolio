<?php /* Template Name: page-jp */ ?>

<?php get_header('jp'); ?>

<div class="container">
	<div class="contents">
		<?php the_content(); ?>
	</div><!--コンテンツ用-->

	<?php get_sidebar(); ?>
</div>

<?php get_footer('jp'); ?>