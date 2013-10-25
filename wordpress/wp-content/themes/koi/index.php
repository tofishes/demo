<?php get_header(); ?>

<?php if(is_front_page() & !is_paged()){ get_template_part( 'includes/welcome-message'); } ?>

<?php 
/////////////////////////////////////////////
// Setup Default Variables	 							
/////////////////////////////////////////////
?>

<?php global $post_layout, $hide_title, $hide_image, $hide_title, $hide_meta, $hide_date, $display_content; ?>
<?php $layout = themify_get('setting-default_layout'); /* set default layout */ if($layout == '' ) : $layout = 'sidebar1'; endif; ?>
<?php $post_layout = themify_get('setting-default_post_layout'); /* set default post layout */ if($post_layout == ''): $post_layout = 'list-post'; endif; ?>
<?php $page_title = themify_get('setting-hide_page_title'); ?>
<?php $hide_title = themify_get('setting-default_post_title'); ?>
<?php $hide_image = themify_get('setting-default_post_image'); ?>
<?php $hide_meta = themify_get('setting-default_post_meta'); ?>
<?php $hide_date = themify_get('setting-default_post_date'); ?>

<?php $display_content = themify_get('setting-default_layout_display'); ?>
<?php $post_image_width = themify_get('image_width'); ?>
<?php $post_image_height = themify_get('image_height'); ?>
<?php $page_navigation = themify_get('hide_navigation'); ?>
<?php $posts_per_pages = themify_get('posts_per_page'); ?>

	
<?php 

/////////////////////////////////////////////
// Set Default Image Sizes 							
/////////////////////////////////////////////

$content_width = 874;
$sidebar1_content_width = 555;

// Grid4
$grid4_width = 212;
$grid4_height = 140;

// Grid3
$grid3_width = 296;
$grid3_height = 180;

// Grid2
$grid2_width = 464;
$grid2_height = 250;

// List Large
$list_large_image_width = 680;
$list_large_image_height = 390;
 
// List Thumb
$list_thumb_image_width = 230;
$list_thumb_image_height = 200;

// List Grid2 Thumb
$grid2_thumb_width = 120;
$grid2_thumb_height = 100;

// List Post
$list_post_width = 864;
$list_post_height = 400;

		
///////////////////////////////////////////
// Setting image width, height
///////////////////////////////////////////

global $width, $height;

if($post_layout == 'grid4'):

	$width = $grid4_width;
	$height = $grid4_height;

elseif($post_layout == 'grid3'):

	$width = $grid3_width;
	$height = $grid3_height;

elseif($post_layout == 'grid2'):

	$width = $grid2_width;
	$height = $grid2_height;
	
elseif($post_layout == 'list-large-image'):

	$width = $list_large_image_width;
	$height = $list_large_image_height;

elseif($post_layout == 'list-thumb-image'):

	$width = $list_thumb_image_width;
	$height = $list_thumb_image_height;

elseif($post_layout == 'grid2-thumb'):

	$width = $grid2_thumb_width;
	$height = $grid2_thumb_height;
	
elseif($post_layout == 'list-post'):

	$width = $list_post_width;
	$height = $list_post_height;

else:
			
	$width = $list_post_width;
	$height = $list_post_height;
	
endif;

if($layout == "sidebar1" || $layout == "sidebar1 sidebar-left"):
	
	$ratio = $width / $content_width;
	$aspect = $height / $width;
	$width = round($ratio * $sidebar1_content_width);
	if($height != '' && $height != 0):
		$height = round($width * $aspect);
	endif;
	
endif;
?>
			
<!-- layout-container -->
<div id="layout" class="clearfix <?php echo $layout; ?>">

	<!-- content -->
	<div id="content" class="<?php echo $post_layout; ?>">
	
		<?php 
		/////////////////////////////////////////////
		// Search Title	 							
		/////////////////////////////////////////////
		?>
		<?php if(is_search()): ?>
			<h1 class="page-title"><?php _e('Search Results for:','themify'); ?> <em><?php echo $s; ?></em></h1>
		<?php endif; ?>

		<?php 
		/////////////////////////////////////////////
		// Category Title	 							
		/////////////////////////////////////////////
		?>
		<?php if(is_category() || is_tag()): ?>
			<h1 class="page-title category-title"><?php single_cat_title(); ?></h1>
		<?php endif; ?>

		<?php 
		/////////////////////////////////////////////
		// Default query categories	 							
		/////////////////////////////////////////////
		?>
		<?php $query_cats = themify_get('setting-default_query_cats'); ?>
		<?php if(($query_cats !="") && !is_search()): ?>
			<?php query_posts($query_string . '&cat='.$query_cats); ?>
		<?php endif; ?>

		<?php 
		/////////////////////////////////////////////
		// Loop	 							
		/////////////////////////////////////////////
		?>
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
	
				<?php if(is_search()): ?>
					<?php get_template_part( 'includes/loop','search'); ?>
				<?php else: ?>
					<?php get_template_part( 'includes/loop','index'); ?>
				<?php endif; ?>
	
			<?php endwhile; ?>
							
				<?php get_template_part( 'includes/pagination'); ?>
		
		<?php 
		/////////////////////////////////////////////
		// Error - No Page Found	 							
		/////////////////////////////////////////////
		?>

		<?php else : ?>
	
			<p><?php _e( 'Sorry, nothing found.', 'themify' ); ?></p>
	
		<?php endif; ?>			

	</div>
	<!--/content -->
	
	<?php 
	/////////////////////////////////////////////
	// Sidebar							
	/////////////////////////////////////////////
	?>
	
	<?php if ($layout != "sidebar-none"): get_sidebar(); endif; ?>
	
</div>
<!-- layout-container -->

<?php get_footer(); ?>