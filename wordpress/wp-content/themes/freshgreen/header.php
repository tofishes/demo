<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	//$site_description = get_bloginfo( 'description', 'display' );
	//if ( $site_description && ( is_home() || is_front_page() ) )
		//echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<link rel="profile" href="http://cssor.com/about" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url')?>/img-res/favicon.ico" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img-res/favicon.png" />
<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v1" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lte IE 8]>
<script>(function(){
	var e = "abbr,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,hgroup,header,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=0,length=e.length;
	while(i<length){document.createElement(e[i++]);	};
})();
</script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	if(is_single || is_page) {
		get_css_meta();
	}
?>
</head>

<body <?php body_class(); ?>>
	<header id="header">
		<div class="wrap">
			<h1 title="<?php bloginfo( 'description' ); ?>"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<a id="rss" title="RSS订阅" href="<?php bloginfo('rss2_url'); ?>">RSS订阅</a>
		</div>
	</header>
	<div class="wrap">
		<nav role="navigation">
			<?php 
				$menu_args = array(
				);
				wp_nav_menu($menu_args);
			?>
		</nav>		
	</div>

	<div class="wrap">
