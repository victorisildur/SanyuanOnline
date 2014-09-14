<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>优惠卡</title>
	<link rel="stylesheet" href="../static/css/bootstrap.min.css">
	<link rel="stylesheet" href="../static/css/shop.css">
	<link rel="stylesheet" href="../static/css/discount_card.css">
</head>
<body>
	<div class="container-fluid">
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
						<a class="navbar-brand" href="#">海底捞优惠</a>
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
							<li><a href="../welcome">返回首页</a></li>						
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!--discout card-->
		<div id="card_background">
			<div id="card_box" class="middle">
				<img src="../static/img/common_card.png" class="img-responsive" id="my_card">
				<p id="card_info1" class="middle"><strong>解放路238号</strong></p>
				<p id="card_info2" class="middle"><strong>15023332626</strong></p>
				<p id="card_info3" class="middle"><strong>火锅，啤酒，烤肉</strong></p>
			</div>
		</div>
		
		<!--discount info-->
		<div class="container">
			<p style="color:gray"><strong>尊贵会员，尽享如下特权：</strong></p>
			<div class="show_box">
				<p><strong>微友特享8折优惠</strong></p>
				<hr/>
				<p><strong>活动日期：2014.8.1-2014.9.30</strong></p>
				<hr/>
				<p><strong>地址：解放路238号，新华图书馆对面</strong></p>
				<hr/>
				<p><strong>电话：15023332626</strong></p>						
			</div>
		</div>
	</div>
	<script src="../static/js/jquery.min.js"></script>
	<script src="../static/js/bootstrap.min.js"></script>
	<script src="../static/js/discount_card.js"></script>
	
</body>
</html>