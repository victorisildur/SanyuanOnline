$(document).ready( function() {
	var click_cnt = 0;
	$("#card_addr").hide();
	$("#card_tel").hide();
	$("#card_services").hide();
	$("#my_card").click( function() {
		if( click_cnt%2 == 0)
		{
			$("#my_card").attr("src","/static/img/detail_card.png");
			$("#card_addr").show();
			$("#card_tel").show();
			$("#card_services").show();
			
			
		} else {
			$("#my_card").attr("src","/static/img/common_card.png");			
			$("#card_addr").hide();
			$("#card_tel").hide();
			$("#card_services").hide();
		}		
		click_cnt++;
	});
	//
	var card_width = $("#my_card").width();
	if(card_width<343) {
		$("#card_addr").css("top",41*card_width/343);
		$("#card_tel").css("top",75*card_width/343);
		$("#card_services").css("top",146*card_width/343);
	}
	
});

$(window).resize( function() {
	var card_width = $("#my_card").width();
	console.log("card width:" + card_width);
});