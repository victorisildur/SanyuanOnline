<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>优惠券</title>
	<link rel="stylesheet" href="/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/css/shop.css">
</head>
<body>
	
	<!--顶部大图-->
	<div class="container-fluid">
		<img src="../static/img/weixin_header.png" class="img-responsive">
	</div>
	<div class="container">
		<!---->
		<h4><strong>最新优惠券</strong></h4>
		<div class="show_box">
			<div class="row">
				<?php 
					$count = count($coupons);
					echo "#coupons:".$count;
					if( $count > 4) {
						$count = 4;
					}
					for( $x=0; $x<$count; $x++) :
				?>
				<div class="col-xs-3 img_col">
					<a href="/index.php/coupon/coupon_detail/<?=$coupons[$x]->coupon_id?>">
					<?= $coupons[$x]->coupon_content ?>
					</a>
				</div>
				<?php 
					endfor	
				?>
			</div>
			
		</div>
	</div>
</body>
</html>