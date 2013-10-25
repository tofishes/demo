<?php
/**
 * @package WordPress
 * @subpackage Hello_D
 */
 
get_header(); ?>

<div id="leftcolumn">

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<div class="entry">
			<?php the_content('Read More...'); ?>
		</div><!-- end .entry -->

		<div class="postdata">Posted in <?php the_category(', ') ?> at <?php the_time('F jS, Y') ?>. <!-- by <?php the_author() ?> --> <?php edit_post_link('Edit', ' / ', ' / '); ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>.</div>
	</div><!-- end .post -->

	<?php endwhile; ?>

        <div class="pagers clearfix">
			<p class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
        </div>

	<?php else : ?>

	<div class="post">
		<div class="title"><h2>Not Found</h2></div>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>

<?php endif; ?>
</div><!-- end #leftcolumn -->
     
<?php get_sidebar(); ?>

<?php get_footer(); ?>