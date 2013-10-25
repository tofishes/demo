<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<label class="screen-reader-text" for="s" >搜索：</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" title="搜索" value="" />
</form>