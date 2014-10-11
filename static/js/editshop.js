function updateImgUrl() {
	var url = $("#frame111").contents().find("#input111").val();
	console.log(url);
	$("#shop_img").val(url);
}
jQuery(document, '#frame111').ready(function(){  
	setInterval(updateImgUrl, 500);
});

