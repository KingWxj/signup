function resize_window(){
	$("#left").height($(window).height()-130);
	$("#right").height($(window).height()-110).width($(window).width()-201);
}
$(function(){
	resize_window();
	$(window).resize(function(){
		resize_window();
	})
})
