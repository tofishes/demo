<?php get_header(); ?>
			<div id="main" role="main">

<?php if ( have_posts() ) : ?>
				<h3 class="aloof"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div class="panel-light no-results not-found">
					<h3><?php _e( 'Nothing Found', 'twentyten' ); ?></h3>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>
		</div><!-- #container -->

	<?php get_sidebar(); ?>
<?php get_footer(); ?>
