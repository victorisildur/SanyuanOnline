<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台管理</title>
	<link rel="stylesheet" href="/static/css/bootstrap.min.css">		
	<link rel="stylesheet" href="/static/css/admin.css">
	<link rel="stylesheet" href="/static/css/jquery-ui-1.9.2.custom.min.css">
	<!--js needed-->
	<script src="/static/js/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<!--top nav bar-->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<ul class="nav navbar-nav">
					<li>
						<a class="navbar-brand" href="#">
							<img alt="Brand" src="/static/img/robot.jpg" style="height:25px">
						</a>
					</li>
					<li><a href="#"><strong>三原百事通</strong></a></li>					
					<li><a href="#"><strong>管理后台</strong></a></li>
				</ul>
			</div>
		</nav>
		<!--middle content-->
		<section class="container">			
			<div class="row" style="margin-top:20px">
				<!--left nav-->
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked" role="tablist">
						<li role="presentation" <?php if($flag=='shop') echo "class='active'";?> >
							<a href="/index.php/admin/index">商铺管理</a>
						</li>
						<li role="presentation" <?php if($flag=='coupon') echo "class='active'";?>>
							<a href="/index.php/admin/manage_coupon">优惠券管理</a>
						</li>
						<li role="presentation" <?php if($flag=='leaflet') echo "class='active'";?>>
							<a href="/index.php/admin/manage_leaflet">便民信息管理</a>
						</li>
					</ul>
				</div>