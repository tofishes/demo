	</div>

	<footer id="footer">
		<div class="wrap">
			<p>&copy;<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> <?php echo date('Y')?>
			</p>
			<p>Powered by <a rel="nofollow" href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>">WordPress</a> &amp; Theme by <a href="http://cssor.com/theme">ToFishes.Design</a></p>
			<span>flower</span>
		</div>          
	</footer>

	<p id="page-nav"><a href="#header" class="pgup" title="双击回到顶部">跳到上屏</a><a href="#footer" class="pgdn" title="双击回到底部">跳到下屏</a></p>
	<script src="http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/prettify.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/global.js"></script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
	if(is_single || is_page) {
		get_js_meta();
	}
?>
</body>
</html>
