<aside id="side" role="complementary">
<?php
/* When we call the dynamic_sidebar() function, it'll spit out
 * the widgets for that widget area. If it instead returns false,
 * then the sidebar simply doesn't exist, so we'll hard-code in
 * some default sidebar stuff just in case.
 */
if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	<div class="col">
		<?php get_search_form(); ?>
	</div>
	
	<div id="pages" class="col">
		<h3>页面</h3>
		<ul>
			<?php wp_list_pages(); ?>
		</ul>
	</div>

	<div id="archives" class="col">
		<h3><?php _e( 'Archives', 'twentyten' ); ?></h3>
		<ul>
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
	</div>

	<div id="meta" class="col">
		<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</div>
<?php endif; // end primary widget area ?>
<?php   // A second sidebar for widgets, just because.
if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
	<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
<?php endif; ?>
</aside>

<dl id="cat">
	<dt>全部分类</dt>
	<dd>
	<?php
		$args=array(
		  'orderby' => 'name',
		  'order' => 'ASC'
		  );
		$categories = get_categories($args);
		foreach($categories as $category) { 
			echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name. '(' . $category->count . ')</a>';
		} 
	?>
		
	</dd>
</dl>