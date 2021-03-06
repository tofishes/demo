<?php
/**
 * @package WordPress
 * @subpackage Hello_D
 */
 
get_header(); ?>

<div class="container main clearfix">
<div id="leftcolumn">

	<div class="post">
		<h2 class="title">Not Found</h2>
		<div class="entry">
			<p>Sorry but the page you are looking for cannot be found.</p>
			<p>If you're in denial and think this is a conspiracy that cannot possibly be true, please try using my search box below.</p>
			<p>You may also want to try looking through the <a href="<?php bloginfo('url'); ?>/">posts archive</a>, as you may just find something else to read instead.</p>
		</div>
	</div>

</div><!-- end #leftcolumn -->
     
<?php get_sidebar(); ?>

<?php get_footer(); ?>