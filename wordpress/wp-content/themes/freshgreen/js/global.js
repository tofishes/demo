$(function(){
	var $win = $(window), $body = $('body');
	$('pre').addClass('prettyprint linenums');
	prettyPrint();

	$("#page-nav").on('dblclick', 'a', function(){
		var dir_val = {
			'pgup': 0,
			'pgdn': $body.height()
		};
		var pos = {}, dir = $(this).attr("class");
		pos['scrollTop'] = dir_val[dir] + offset;
		$('html,body').animate(pos, 500);
	}).on("click", 'a', function(){
		var offset = $win.height() - 80,
	    dir_val = {
			'pgup': '-=',
			'pgdn': '+='
		};

		var pos = {}, dir = $(this).attr("class");
		pos['scrollTop'] = dir_val[dir] + offset;

		$('html,body').animate(pos, 500);
		return false;
	});
});