<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title> <?=$details->shop_name?> </title>
	<link rel="stylesheet" href="/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/css/shop.css">
</head>
<body>
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
					<a class="navbar-brand" href="#"> <?=$details->shop_name?> </a>
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
						<li><a href="/index.php/shop/old_shops">返回首页</a></li>						
					</ul>
				</div>
			</div>
		</nav>
		
		<!--detail display box-->
		<div class="show_box">			
			<?=$details->shop_intro?>
		</div>	

		<!--comment display box-->
		<div class="show_box" id="comment_div">
			<?php 
				foreach($comments as $comment) :
			?>
				<pre> <?=$comment->comment_content?> </pre>
			<?php
				endforeach
			?>
		</div>
		
		<!--submit comment-->
		<div class="show_box">
			<div class="btn-group btn-group-justified">
				<div class="btn-group">
					<button type="button" class="btn btn-default  ">
						<img src="/static/fonts/glyphicons/png/glyphicons_010_envelope.png" style="width:15px"> 发送给朋友
					</button>
				</div>
				
				<div class="btn-group">
					<button type="button" class="btn btn-default ">
						<img src="/static/fonts/glyphicons/png/glyphicons_001_leaf.png" style="width:15px"> 分享到朋友圈
					</button>
				</div>
			</div>
			
			<form role="form" style="margin-top:5px">
				<div class="row">
					<div class="col-xs-2" style="padding-right:0px">
						<img src="/static/fonts/glyphicons/png/glyphicons_003_user.png" style="width:100%">
					</div>
					<div class="col-xs-10">
						<div class="form-group">					
							<input class="form-control" id="comment_content" placeholder="说几句吧">								
							</input>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<input type="button" id="submitBtn" class="btn btn-info middle" style="width:80%;display:block" onclick="submitComment()" value="提交">
						<input type="button" id="submittingBtn" class="btn btn-info middle" style="width:80%;display:block" value="正在提交...">
					</div>
				</div>
			</form>
		</div>
		<p id="shop_id" style="display:none"><?=$shop_id?></p>
	</div>
	<script src="/static/js/jquery.min.js"></script>
	<script src="/static/js/bootstrap.min.js"></script>
	<script src="/static/js/shop_detail.js"></script>
</body>
</html>