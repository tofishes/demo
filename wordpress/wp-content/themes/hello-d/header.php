<?php
/**
 * @package WordPress
 * @subpackage Hello_D
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" media="print" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
	// Load jQuery
	google.load("jquery", "1.2.6");
</script>
<script type="text/javascript">
/* <![CDATA[ */
	var $j = jQuery.noConflict();
	$j(document).ready(function() {
		$j(".menu a").wrapInner(document.createElement("span")); 
		$j('.post').before('<div class="post_top"></div>').after('<div class="post_end"></div>');
		$j('.widget').before('<li class="widget_top"></li>').after('<li class="widget_end"></li>');
		$j('#search').prepend('<h2 style="text-align: left;">Search</h2>');
	});
/* ]]> */
</script>

<?php
if(is_singular()) wp_enqueue_script('comment-reply');
wp_head();
?>

<title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' -'; } ?> <?php bloginfo('name'); ?></title>
</head>

<body>
<div class="container clearfix">

	<div id="header">
    	<h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<p class="description"><?php bloginfo('description'); ?></p>
        <ul class="menu">
            <li class="page_item page_item_1<?php if ( is_home() ) { ?> current_page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
			<?php wp_list_pages('title_li=&depth=1' ); ?>
   		</ul>
  </div><!-- end #header -->

