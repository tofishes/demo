<?php	
	
/* 	Custom Write Panels
/***************************************************************************/

	///////////////////////////////////////
	// Setup Write Panel Options
	///////////////////////////////////////
	
	// Post Meta Box Options
	$post_meta_box_options = array(
									// Layout
									array(
										  "name" 		=> "layout",	
										  "title" 		=> "Single Layout", 	
										  "description" => "", 				
										  "type" 		=> "layout",			
										  "meta"		=> array(
										  						array("value" => "default", "img" => "images/layout-icons/default.png", "selected" => true),

																 array("value" => "sidebar1", 	"img" => "images/layout-icons/sidebar1.png"),
																 array("value" => "sidebar1 sidebar-left", 	"img" => "images/layout-icons/sidebar1-left.png"),
																 array("value" => "sidebar-none",	 	"img" => "images/layout-icons/sidebar-none.png")
																 )			
										),
									// Hide Post Title
									array(
										  "name" 		=> "hide_post_title",	
										  "title" 		=> "Hide Post Title", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )			
										),

									// Hide Post Meta
									array(
										  "name" 		=> "hide_post_meta",	
										  "title" 		=> "Hide Post Meta", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )			
										),
									// Hide Post Date
									array(
										  "name" 		=> "hide_post_date",	
										  "title" 		=> "Hide Post Date", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )			
										),
									// Hide Post Image
									array(
										  "name" 		=> "hide_post_image",	
										  "title" 		=> "Hide Post Image", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )			
										),
								   	// Post Image
									array(
										  "name" 		=> "post_image",
										  "title" 		=> "Post Image",
										  "description" => "Post image used in the loop",
										  "type" 		=> "image",
										  "meta"		=> array()
										),
								   	// Feature Image
									array(
										  "name" 		=> "feature_image",
										  "title" 		=> "Feature Image",
										  "description" => "Feature image used in feature post widget", 
										  "type" 		=> "image",
										  "meta"		=> array()	
										),
									// Image Width
									array(
										  "name" 		=> "image_width",	
										  "title" 		=> "Image Width", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										),
									// Image Height
									array(
										  "name" 		=> "image_height",	
										  "title" 		=> "Image Height", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										),
									// External Link
									array(
										  "name" 		=> "external_link",	
										  "title" 		=> "External Link", 	
										  "description" => "This link will apply to the post image", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array()			
										)
									);
								
	
	// Page Meta Box Options
	$page_meta_box_options = array(
								  	// Page Layout
									array(
										  "name" 		=> "page_layout",
										  "title"		=> "Sidebar Option",
										  "description"	=> "",
										  "type"		=> "layout",
										  "meta"		=> array(
										  						array("value" => "default", "img" => "images/layout-icons/default.png", "selected" => true),
																
																 array("value" => "sidebar1", 	"img" => "images/layout-icons/sidebar1.png"),
																 array("value" => "sidebar1 sidebar-left", 	"img" => "images/layout-icons/sidebar1-left.png"),
																 array("value" => "sidebar-none",	 	"img" => "images/layout-icons/sidebar-none.png")
																 )
										),
									// Hide page title
									array(
										  "name" 		=> "hide_page_title",
										  "title"		=> "Hide Page Title",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )	
										),
								   // Query Category
									array(
										  "name" 		=> "query_category",
										  "title"		=> "Query Category",
										  "description"	=> "Select a category or enter multiple category IDs (eg. 2,5,6). Enter 0 to display all category.",
										  "type"		=> "query_category",
										  "meta"		=> array()
										),
									// Section Categories
									array(
										  "name" 		=> "section_categories",	
										  "title" 		=> "Section Categories", 	
										  "description" => "Display multiple query categories separately", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )			
										),
									// Post Layout
									array(
										  "name" 		=> "layout",
										  "title"		=> "Query Post Layout",
										  "description"	=> "",
										  "type"		=> "layout",
										  "meta"		=> array(
																 array("value" => "list-post", "img" => "images/layout-icons/list-post.png", "selected" => true),
																 array("value" => "grid4", "img" => "images/layout-icons/grid4.png"),
																 array("value" => "grid3", "img" => "images/layout-icons/grid3.png"),
																 array("value" => "grid2", "img" => "images/layout-icons/grid2.png"),
																 array("value" => "list-large-image", "img" => "images/layout-icons/list-large-image.png"),
																 array("value" => "list-thumb-image", "img" => "images/layout-icons/list-thumb-image.png"),
																 array("value" => "grid2-thumb", "img" => "images/layout-icons/grid2-thumb.png")
																 )
										),
									// Posts Per Page
									array(
										  "name" 		=> "posts_per_page",
										  "title"		=> "Posts per page",
										  "description"	=> "",
										  "type"		=> "textbox",
										  "meta"		=> array("size" => "small")
										),
									
									// Display Content
									array(
										  "name" 		=> "display_content",
										  "title"		=> "Display",
										  "description"	=> "",
										  "type"		=> "dropdown",
										  "meta"		=> array(
										  						 array("name"=>"Excerpt","value"=>"excerpt","selected"=>true),
																 array("name"=>"Content","value"=>"content"),
																 array("name"=>"None","value"=>"none")
																 )
										),
									// Hide Title
									array(
										  "name" 		=> "hide_title",
										  "title"		=> "Hide Post Title",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )
										),
									// Hide Post Date
									array(
										  "name" 		=> "hide_date",
										  "title"		=> "Hide Post Date",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )
										),
									// Hide Post Meta
									array(
										  "name" 		=> "hide_meta",
										  "title"		=> "Hide Post Meta",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )
										),
									// Hide Post Image
									array(
										  "name" 		=> "hide_image",	
										  "title" 		=> "Hide Post Image", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )			
										),
									// Page Navigation Visibility
									array(
										  "name" 		=> "hide_navigation",
										  "title"		=> "Hide Page Navigation",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Yes"),
																 array("value" => "no",	"name" => "No")
																 )
										),
									// Image Width
									array(
										  "name" 		=> "image_width",	
										  "title" 		=> "Image Width", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										),
									// Image Height
									array(
										  "name" 		=> "image_height",	
										  "title" 		=> "Image Height", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										)
									
									);
								 
	///////////////////////////////////////
	// Build Write Panels
	///////////////////////////////////////
	themify_build_write_panels(array(
									array(
										 "name"		=> "Post Options",			// Name displayed in box
										 "options"	=> $post_meta_box_options, 	// Field options
										 "pages"	=> "post"					// Pages to show write panel
										 ),
									array(
										 "name"		=> "Page Options",	
										 "options"	=> $page_meta_box_options, 		
										 "pages"	=> "page"
										 )
									)
								);
	
/* 	Custom Functions
/***************************************************************************/	
	
	///////////////////////////////////////
	// Enable WordPress feature image feature
	///////////////////////////////////////
	add_theme_support( 'post-thumbnails');

	///////////////////////////////////////
	// Load theme languages
	///////////////////////////////////////
	load_theme_textdomain( 'themify', TEMPLATEPATH.'/languages' );

	///////////////////////////////////////
	// Fix empty auto paragraph in shortcodes
	///////////////////////////////////////
	add_filter('the_content', 'shortcode_empty_paragraph_fix');
	add_filter('the_excerpt', 'shortcode_empty_paragraph_fix');
	add_filter('widget_text', 'shortcode_empty_paragraph_fix');
	function shortcode_empty_paragraph_fix($content)
	{   
	   $array = array (
		  '<p>[' => '[', 
		  ']</p>' => ']', 
		  ']<br />' => ']'
	   );
	   $content = strtr($content, $array);
	   return $content;
	}

	///////////////////////////////////////
	// Enable shortcode in excerpt
	///////////////////////////////////////
	add_filter('the_excerpt', 'do_shortcode');	
	add_filter('the_excerpt', 'shortcode_unautop');	

	///////////////////////////////////////	
	// Enable shortcode in text widget
	///////////////////////////////////////
	add_filter('widget_text', 'do_shortcode');	
	add_filter( 'widget_text', 'shortcode_unautop');

	///////////////////////////////////////
	// Page navigation
	///////////////////////////////////////
	function pagenav($before = '', $after = '') {
		global $wpdb, $wp_query;
	
		$request = $wp_query->request;
		$posts_per_page = intval(get_query_var('posts_per_page'));
		$paged = intval(get_query_var('paged'));
		$numposts = $wp_query->found_posts;
		$max_page = $wp_query->max_num_pages;
	
		if(empty($paged) || $paged == 0) {
			$paged = 1;
		}
		$pages_to_show = 8;
		$pages_to_show_minus_1 = $pages_to_show-1;
		$half_page_start = floor($pages_to_show_minus_1/2);
		$half_page_end = ceil($pages_to_show_minus_1/2);
		$start_page = $paged - $half_page_start;
		if($start_page <= 0) {
			$start_page = 1;
		}
		$end_page = $paged + $half_page_end;
		if(($end_page - $start_page) != $pages_to_show_minus_1) {
			$end_page = $start_page + $pages_to_show_minus_1;
		}
		if($end_page > $max_page) {
			$start_page = $max_page - $pages_to_show_minus_1;
			$end_page = $max_page;
		}
		if($start_page <= 0) {
			$start_page = 1;
		}
	
		if ($max_page > 1) {
			echo $before.'<div class="pagenav clearfix">';
			if ($start_page >= 2 && $pages_to_show < $max_page) {
				$first_page_text = "&laquo;";
				echo '<a href="'.get_pagenum_link().'" title="'.$first_page_text.'" class="number">'.$first_page_text.'</a>';
			}
			//previous_posts_link('&lt;');
			for($i = $start_page; $i  <= $end_page; $i++) {
				if($i == $paged) {
					echo ' <span class="number current">'.$i.'</span> ';
				} else {
					echo ' <a href="'.get_pagenum_link($i).'" class="number">'.$i.'</a> ';
				}
			}
			//next_posts_link('&gt;');
			if ($end_page < $max_page) {
				$last_page_text = "&raquo;";
				echo '<a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'" class="number">'.$last_page_text.'</a>';
			}
			echo '</div>'.$after;
		}
	}
	
	// Register Custom Menu Function
	function register_custom_nav() {
		if (function_exists('register_nav_menus')) {
			register_nav_menus( array(
				'main-nav' => __( 'Main Navigation', 'themify' ),
			) );
		}
	}
	
	// Register Custom Menu Function - Action
	add_action('init', 'register_custom_nav');
	
	// Default Main Nav Function
	function default_main_nav() {
		echo '<ul id="main-nav" class="main-nav clearfix">';
		wp_list_pages('title_li=');
		echo '</ul>';
	}

	// Register Widgets
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Social_Widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<strong>',
			'after_title' => '</strong>',
		));
		register_sidebar(array(
			'name' => 'Sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		));
	}

	// Footer Widgets
	if ( function_exists('register_sidebar') ) {
		$data = get_data();
		$columns = array(	 'footerwidget-4col' 			=> 4,
							 'footerwidget-3col'			=> 3,
							 'footerwidget-2col' 			=> 2,
							 'footerwidget-1col' 			=> 1 );
		$option = ($data['setting-footer_widgets'] == "" || !isset($data['setting-footer_widgets'])) ?  "footerwidget-3col" : $data['setting-footer_widgets'];
		for($x=1;$x<=$columns[$option];$x++){
			register_sidebar(array(
				'name' => 'Footer_Widget_'.$x,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="widgettitle">',
				'after_title' => '</h4>',
			));			
		}
	}

	// Custom Theme Comment
	function custom_theme_comment($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; 
	   ?>
	   <li id="comment-<?php comment_ID() ?>">
			<p class="comment-author">
				<?php echo get_avatar($comment,$size='54'); ?>
				<?php printf(__('<cite>%s</cite>'), get_comment_author_link()) ?><br />
				<small class="comment-time"><strong><?php comment_date('M d, Y'); ?></strong> @ <?php comment_time('H:i:s'); ?><?php edit_comment_link('Edit',' [',']') ?></small>
			</p>
			<div class="commententry">
				<?php if ($comment->comment_approved == '0') : ?>
				<p><em><?php _e('Your comment is awaiting moderation.', 'themify') ?></em></p>
				<?php endif; ?>
			
				<?php comment_text() ?>
			</div>
			<p class="reply">
			<?php comment_reply_link(array_merge( $args, array('add_below' => 'comment', 'reply_text' => __( 'Reply' , 'themify' ), 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</p>
		<?php
	}



?>