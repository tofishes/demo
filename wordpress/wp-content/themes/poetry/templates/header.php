<!-- header START -->
<div id="header">
<div id="caption">
<h1 id="title"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
<div id="tagline"><?php bloginfo('description'); ?></div>
</div>

<!-- navigation START -->
<div id="navigation">
<ul id="menus">
<li class="<?php echo($home_menu); ?>"><a class="home" title="<?php _e('Home', 'inove'); ?>" href="<?php echo get_settings('home'); ?>/"><?php _e('Home', 'inove'); ?></a></li>
<?php
if($options['menu_type'] == 'categories') {
	wp_list_categories('depth=2&title_li=0&orderby=name&show_count=0');
} else {
	wp_list_pages('depth=2&title_li=0&sort_column=menu_order');
}
?>
</ul>
<div id="searchbox">

<form action="<?php bloginfo('home'); ?>" method="get">
	<div class="content">
		<input type="text" class="textfield" name="s" size="24" value="<?php echo wp_specialchars($s, 1); ?>" />
		<span class="switcher" ><?php _e('Switcher', 'inove'); ?></span>
	</div>
</form>
</div>

</div>
<!-- navigation END -->


</div>
<!-- header END -->
