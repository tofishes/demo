<?php if(!is_single()) : global $more; $more = 0; endif; //enable more link ?>

<?php global $post_query_category, $post_layout, $display_content, $hide_title, $hide_meta, $hide_date, $hide_image, $image_width, $image_height, $height, $width; ?>
	
<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	
	<?php $link = themify_get('external_link'); ?>
	<?php if ($link == ''): ?>
		<?php $link = get_permalink(); ?>
	<?php endif; ?>
	
	<?php if(is_single()): ?>
		<?php if($hide_image != "yes"): ?>
			<?php themify_image("field_name=post_image, image, wp_thumb&setting=image_post_single&w=".$width."&h=".$height."&before=<p class='post-image ".themify_get('setting-image_post_single_align')."'><a href='".$link."'>&after=</a></p>"); ?>
		<?php endif; ?>
	<?php elseif($post_query_category != ""): ?>
		<?php if($hide_image != "yes"): ?>
			<?php themify_image("field_name=post_image, image, wp_thumb&w=".$width."&h=".$height."&before=<p class='post-image'><a href='".$link."'>&after=</a></p>"); ?>
		<?php endif; ?>
	<?php else: ?>
		<?php if($hide_image != "yes"): ?>
			<?php themify_image("field_name=post_image, image, wp_thumb&setting=image_post&w=".$width."&h=".$height."&before=<p class='post-image ".themify_get('setting-image_post_align')."'><a href='".$link."'>&after=</a></p>"); ?>
		<?php endif; ?>
	<?php endif; ?>

	<div class="post-content">
		<?php if($hide_date != "yes"): ?>
			<p class="post-date">
				<span class="day"><?php the_time(__('d','themify')) ?></span> 
				<span class="month"><?php the_time(__('M','themify')) ?></span> 
				<span class="year"><?php the_time(__('Y','themify')) ?></span> 
				<span class="post-comment"><?php comments_popup_link(__('No Comments','themify'), __('1 Comment','themify'), __('% Comments','themify')); ?></span>
			</p>
		<?php endif; ?>
	
		<?php if($hide_title != "yes"): ?>
			<?php if ( is_single() ) {?>
				 <h1 class="post-title"><?php the_title(); ?></h1>
			<?php } else { ?>
				 <h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php } ?>
		<?php endif; ?>    
		
		<?php if($display_content == 'excerpt'): ?>
			<?php the_excerpt(); ?>
		<?php elseif($display_content == 'none'): ?>
		<?php else: ?>
			<?php the_content(__((themify_check('setting-default_more_text')) ? themify_get('setting-default_more_text') : 'More &rarr;','themify')); ?>
		<?php endif; ?>
	
		<?php if($hide_meta != 'yes'): ?>
			<p class="post-meta">
				<span class="post-author">by <?php the_author_link(); ?></span>
				<span class="post-category">in <?php the_category(', ') ?></span> 
				<?php the_tags( '<span class="post-tag">Tags: ', ', ', '</span>'); ?> 
			</p>
		<?php endif; ?>    

		<?php edit_post_link('Edit', '[', ']'); ?>

	</div>
	<!-- /.post-content -->		
	
</div>
<!-- /.post -->