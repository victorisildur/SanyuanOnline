<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>知名老店</title>
	<link rel="stylesheet" href="/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/css/shop.css">
</head>
<body>
	
	<!--顶部大图-->
	<div class="container-fluid">
		<img src="../static/img/weixin_header.png" class="img-responsive">
	</div>
	<div class="container">
		<!--热门-->
		<h4><strong>热门</strong></h4>
		<div class="show_box">
			<div class="row">
				<?php 
					$shop_count = count($hot_shops);
					for( $x=0; $x<$shop_count; $x++):
				?>
				<div class="col-xs-3 img_col">
					<img src= <?=$hot_shops[$x]->shop_img?> class='img-circle img-responsive shop_circle'>
					<p class='text-center'><small> <?=$hot_shops[$x]->shop_name?></small></p>
				<?php 
					endfor 
				?>
			</div>
			
		</div>
		<!--新店-->
		<h4><strong>新店</strong></h4>
		<div class="show_box">
			<div class="row">
				
			</div>
		</div>
	</div>
</body>
</html>