<?php
/**
 * @package WordPress
 * @subpackage Hello_D
 */
?>

</div>
<div id="footer">
<div class="container">
		<span><a href="<?php echo get_option('home'); ?>/">home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php bloginfo('rss2_url'); ?>">entries (rss)</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php bloginfo('comments_rss2_url'); ?>">comments (rss)</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#header">top &uarr;</a></span>
		
		&copy;<?php echo date('Y'); ?> <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>. Powered by <a href="http://wordpress.org/">WordPress</a> and <a href="http://hellowiki.com/">Fen</a>.
		
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
</div><!-- end .container -->
</div><!-- end #footer -->
<?php wp_footer(); ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17953327-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>