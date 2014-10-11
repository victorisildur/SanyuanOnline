$(document).ready(function() {
	$("#submittingBtn").hide();
});

function submitComment() {
	$("#submitBtn").hide();
	$("#submittingBtn").show();
	console.log("comment:"+$("#comment_content").val()+",length:"+$("#comment_content").val().length);
	//submit comment
	if( $("#comment_content").val().length > 0 ) {
		$("#comment_div").append("<pre>"+ $("#comment_content").val() +"</pre>");
		$.post("/index.php/shop/addComment",
			{ 
				"comment_content":$("#comment_content").val(),
				"shop_id": $("#shop_id").text()
			},
			function(data){
				console.log("submit done");
				if(data.status == 'ok') {					
					$("#submitBtn").attr('disabled','disabled');
					$("#comment_content").val("");
				}				
			},
			'json');
	} else {
		alert("评论不能为空哦");
	}
	$("#submitBtn").show();
	$("#submittingBtn").hide();
}