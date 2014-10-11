<!--right window-->
<div class="col-md-10">	
	<!-- function bar-->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a>所有优惠券</a></li>
		<li role="presentation" ><a href="/index.php/admin/add_coupon">新增优惠券</a></li>
	</ul>
	<!--coupon management-->
	<section id="coupon_panel">
		<table class="table">
			<thead>
				<tr>
					<th>优惠券ID</th>
					<th>商铺名称</th>
					<th>地址</th>
					<th>电话</th>
					<th>优惠内容</th>
					<th>开始时间</th>
					<th>结束时间</th>
					<th>操作</th>
				</tr>							
			</thead>
			<tbody>
				<?php
					foreach($coupons as $coupon) :
				?>
				<tr>
					<td><?=$coupon->coupon_id?></td>
					<td><?=$coupon->shop_name?></td>
					<td><?=$coupon->shop_addr?></td>
					<td><?=$coupon->shop_tel?></td>
					<td><?=$coupon->coupon_content?></td>
					<td><?=$coupon->start_time?></td>
					<td><?=$coupon->end_time?></td>								
					<td>
						<a href="/index.php/admin/edit_coupon/<?=$coupon->coupon_id?>">
							<input type="button" class="btn btn-primary" value="修改">
						</a>
						<a href="/index.php/coupon/delete_coupon/<?=$coupon->coupon_id?>">
							<input type="button" class="btn btn-default" value="删除">
						</a>
					</td>
				</tr>
				<?php
					endforeach
				?>
			</tbody>
		</table>
	</section>
</div>	