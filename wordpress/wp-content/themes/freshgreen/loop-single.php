<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<div class="entry-content">
			<?php the_content(); ?>
			<p><a class="plain" href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>
		</div>

		<aside>
			<?php edit_post_link( __( '[Edit]', 'twentyten' ), '<span class="r-f">', '</span>' ); ?>
			<time><?php the_time('Y-m-d');?></time>
			<span>分类: <?php the_category(', '); ?></span>
			<span><?php the_tags('标签: ',',',''); ?>
			</span>

			<p class="apanel"><?php previous_post_link( '上一篇：%link', '%title' ); ?></p>
            <p><?php next_post_link( '下一篇：%link','%title' ); ?></p>
		</aside>

		<!-- toDel -->
		<div class="ad_article">
			<iframe frameborder="no" marginheight="0" marginwidth="0" scrolling="no" width="460" height="200" src="Http://union.vancl.com/GetLabelBarAd.aspx?source=tofishes&psid=89,94,139,104,109,119"></iframe>
		</div>
	</article>

	<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>