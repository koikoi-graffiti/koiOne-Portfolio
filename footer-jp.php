<footer>
	<div class="footer-inner row" id="footer-widget" >
		<!--
		<div class="footer-nav-inner col-4">
			<?php /* wp_nav_menu( array(
				'theme_location' => 'footer-nav',
				'container' => 'nav',
				'container_class' => 'footer-nav',
				'container_id' => 'footer-nav',
				'depth' => 1,
				'fallback_cb' => ''
			)); */ ?>
		</div>
		-->

		<?php dynamic_sidebar('footer-widget'); ?><!--sidebar.phpの呼び出し-->
	</div>
	<div class="copyright">
		<p>copyright ©<?php bloginfo('name'); ?> All Rights Reserved.</p>
	</div>
</footer>

<!-- Bootstrap js  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

<?php wp_footer(); ?><!--システム・プラグイン用-->
</body>
</html>