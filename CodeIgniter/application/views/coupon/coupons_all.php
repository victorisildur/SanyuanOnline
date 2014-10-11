<div class="container">
	<!---->
	<h4><strong>最新优惠券</strong></h4>
	<div class="show_box">
		<div class="row">
			<?php 
				$count = count($coupons);					
				if( $count > 4) {
					$count = 4;
				}
				for( $x=0; $x<$count; $x++) :
			?>
			<div class="col-xs-3 img_col">
				<img src="<?=$coupons[$x]->shop_img?>" class="img-responsive shop_circle img-circle">
				<a href="/index.php/coupon/coupon_detail/<?=$coupons[$x]->coupon_id?>" class="text-center">
					<p> <small> <?= $coupons[$x]->shop_name ?> </small> </p>
					<p> <small> <?= $coupons[$x]->coupon_content ?> </small> </p>
				</a>
			</div>
			<?php 
				endfor	
			?>
		</div>
		
	</div>
</div>
