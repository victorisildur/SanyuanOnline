<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?=$coupon->shop_name?>优惠卡</title>
	<link rel="stylesheet" href="/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/css/shop.css">
	<link rel="stylesheet" href="/static/css/discount_card.css">
</head>
<body>
	<div class="container-fluid">
		<!--nav bar-->
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><?=$coupon->shop_name?></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="#">地址</a></li>												
						</ul>
						<ul class="nav navbar-nav navbar-left">
							<li><a href="#">电话</a></li>						
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/index.php/coupon/food_coupon">返回首页</a></li>						
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!--discout card-->
		<div id="card_background">
			<div id="card_box" class="middle">
				<img src="/static/img/common_card.png" class="img-responsive" id="my_card">
				<p id="card_addr" class="middle"><strong><?=$coupon->shop_addr?></strong></p>
				<p id="card_tel" class="middle"><strong><?=$coupon->shop_tel?></strong></p>
				<p id="card_services" class="middle"><strong><?=$coupon->shop_services?></strong></p>
			</div>
		</div>
		
		<!--discount info-->
		<div class="container">
			<p style="color:gray"><strong>尊贵会员，尽享如下特权：</strong></p>
			<div class="show_box">
				<p><strong>优惠内容：<?=$coupon->coupon_content?></strong></p>
				<hr/>
				<p><strong>优惠日期：<?=$coupon->start_time?>~<?=$coupon->end_time?></strong></p>
				<hr/>
				<p><strong>地址：<?=$coupon->shop_addr?></strong></p>
				<hr/>
				<p><strong>电话：<?=$coupon->shop_tel?></strong></p>
			</div>
		</div>
	</div>
	<script src="/static/js/jquery.min.js"></script>
	<script src="/static/js/bootstrap.min.js"></script>
	<script src="/static/js/discount_card.js"></script>
	
</body>
</html>