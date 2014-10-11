<!--right window-->
<div class="col-md-10">	
	<!-- function bar-->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="/index.php/admin/manage_coupon">所有优惠券</a></li>
		<li role="presentation" class="active"><a>新增优惠券</a></li>
	</ul>
	<!-- edit coupon -->
	<section style="margin-top:20px">
		<form action="/index.php/coupon/add_coupon" method="post" role="form" class="form-horizontal">
			<div class="form-group">
				<label for="shop_id" class="col-sm-2 control-label">商铺</label>
				<div class="col-sm-10">					
					<?php
						foreach( $shops as $shop ):
					?>
					<div class="radio">
						<label>
							<input type="radio" name="shop_id" id="shop_id<?=$shop->shop_id?>" value="<?=$shop->shop_id?>">
							<?=$shop->shop_name?>
						</label>
					</div>
					<?php
						endforeach
					?>
				</div>
			</div>
			<div class="form-group">
				<label for="coupon_content" class="col-sm-2 control-label">优惠券内容</label>
				<div class="col-sm-10">
					<input type="text" name="coupon_content" id="coupon_content" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="start_time" class="col-sm-2 control-label">开始时间</label>
				<div class="col-sm-10">
					<input type="text" name="start_time" id="start_time" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="end_time" class="col-sm-2 control-label">结束时间</label>
				<div class="col-sm-10">
					<input type="text" name="end_time" id="end_time" class="form-control">
				</div>
			</div>
			<div class="row" style="margin-top:10px">
				<div class="col-md-2">
				</div>
				<div class="col-md-10">
					<input type="submit" value="提交新增" class="btn btn-primary">
				</div>
			</div>
		</form>
	</section>
</div>	