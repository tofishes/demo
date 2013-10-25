		<div id="footer">
		
			<?php if(themify_get('setting-footer_widgets') != ""){ ?>
					  <?php
					  $columns = array('footerwidget-4col' 	=> array('col col4-1','col col4-1','col col4-1','col col4-1'),
											 'footerwidget-3col'	=> array('col col3-1','col col3-1','col col3-1'),
											 'footerwidget-2col' 	=> array('col col4-2','col col4-2'),
											 'footerwidget-1col' 	=> array('') );
					  $x=0;
					  ?>
					<?php foreach($columns[themify_get('setting-footer_widgets')] as $col): ?>
							<?php 
								 $x++;
								 if($x == 1){ 
									  $class = "first"; 
								 } else {
									  $class = "";	
								 }
							?>
							<div class="<?php echo $col;?> <?php echo $class; ?>">
								 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer_Widget_'.$x) ) ?>
							</div>
					  <?php endforeach; ?>
			<?php } ?>
			
			<div class="credits">
				<?php if(themify_get('setting-footer_text_left') != ""){ echo themify_get('setting-footer_text_left'); } else { echo '&copy; <a href="'.get_option('home').'">'.get_bloginfo('name').'</a> '.date('Y') . '<br />'; } ?>
				<?php if(themify_get('setting-footer_text_right') != ""){ echo themify_get('setting-footer_text_right'); } else { echo 'Powered by <a href="http://wordpress.org">WordPress</a>. Theme by <a href="http://themify.me">Themify.me</a>'; } ?></div>
			</div>
		
		</div>
		<!--/footer -->
	
	</div>
	<!--/pagewrap -->

</div>
<!-- /#bg -->

<!-- jquery -->
<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script type='text/javascript'>
	!window.jQuery && document.write('<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/themify/js/jquery.js"><\/script>')
</script>

<script type="text/javascript">

	//
	// Add :nth-of-type() Selector to all browsers
	//
	function getNthIndex(cur, dir) {
		var t = cur, idx = 0;
		while (cur = cur[dir] ) {
			if (t.tagName == cur.tagName) {
				idx++;
			}
		}
		return idx;
	}
	function isNthOf(elm, pattern, dir) {
		var position = getNthIndex(elm, dir), loop;
		if (pattern == "odd" || pattern == "even") {
			loop = 2;
			position -= !(pattern == "odd");
		} else {
			var nth = pattern.indexOf("n");
			if (nth > -1) {
				loop = parseInt(pattern, 10);
				position -= (parseInt(pattern.substring(nth + 1), 10) || 0) - 1;
			} else {
				loop = position + 1;
				position -= parseInt(pattern, 10) - 1;
			}
		}
		return (loop<0 ? position<=0 : position >= 0) && position % loop == 0
	}
	var pseudos = {
		"first-of-type": function(elm) {
			return getNthIndex(elm, "previousSibling") == 0;
		},
		"last-of-type": function(elm) { 
			return getNthIndex(elm, "nextSibling") == 0;
		},
		"only-of-type": function(elm) { 
			return pseudos["first-of-type"](elm) && pseudos["last-of-type"](elm);
		},
		"nth-of-type": function(elm, b, match, all) {
			return isNthOf(elm, match[3], "previousSibling");
		},
		"nth-last-of-type": function(elm, i, match) {
			return isNthOf(elm, match[3], "nextSibling");
		}        
	}
	$.extend($.expr[':'], pseudos);
	
	jQuery(document).ready(function($){
		//
		// Set Grid Clear Floats
		//
		$(".grid4 .post:nth-of-type(4n+1), .grid4 .category-section .post:nth-of-type(4n+1)").css({"margin-left":"0"}).before("<div style='clear:both;'></div>");
		$(".grid3 .post:nth-of-type(3n+1), .grid3 .category-section .post:nth-of-type(3n+1)").css({"margin-left":"0"}).before("<div style='clear:both;'></div>");
		$(".grid2 .post:nth-of-type(2n+1), .grid2 .category-section .post:nth-of-type(2n+1)").css({"margin-left":"0"}).before("<div style='clear:both;'></div>");
		$(".grid2-thumb .post:nth-of-type(2n+1)").css({"margin-left":"0"}).before("<div style='clear:both;'></div>");

	});
	
</script>

<?php wp_footer(); ?>

</body>
</html>
