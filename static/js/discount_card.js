$(document).ready( function() {
	var click_cnt = 0;
	$("#card_info1").hide();
	$("#card_info2").hide();
	$("#card_info3").hide();
	$("#my_card").click( function() {
		if( click_cnt%2 == 0)
		{
			$("#my_card").attr("src","/static/img/detail_card.png");
			$("#card_info1").show();
			$("#card_info2").show();
			$("#card_info3").show();
			
			
		} else {
			$("#my_card").attr("src","/static/img/common_card.png");			
			$("#card_info1").hide();
			$("#card_info2").hide();
			$("#card_info3").hide();
		}		
		click_cnt++;
	});
	console.log("ready");
	
});

$(window).resize( function() {
	if(typeof(window.innerWidth) == 'number'){ 
		myWidth = window.innerWidth;
		myHeight = window.innerHeight;
	}
	console.log("w:"+myWidth+",h:"+myHeight);
	var info1left = document.getElementById('card_info1').offsetLeft;
	console.log("info1 left:"+info1left);
	document.getElementById('card_info1').offsetLeft = '200';
	$("#card_info1").css("left",myWidth*0.01);
});