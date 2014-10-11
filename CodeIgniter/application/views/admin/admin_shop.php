<div class="col-md-10">
	<!-- function bar-->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#">所有商铺</a></li>
		<li role="presentation"><a href="/index.php/admin/add_shop">新增商铺</a></li>
	</ul>
	<!--shop management-->
	<section id="shop_panel">
		<table class="table">
			<thead>
				<tr>
					<th>商店ID</th>
					<th>商店名称</th>
					<th>地址</th>
					<th>电话</th>
					<th>商店图片</th>
					<th>主营</th>
					<th>详细介绍</th>
					<th>评论</th>
					<th>是否老店</th>
					<th>是否热门</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($shops as $shop) :
				?>
				<tr>
					<td><?=$shop->shop_id?></td>
					<td><?=$shop->shop_name?></td>
					<td><?=$shop->shop_addr?></td>
					<td><?=$shop->shop_tel?></td>
					<td><img src="<?=$shop->shop_img?>" style="height:30px"></td>
					<td><?=$shop->shop_services?></td>
					<td>
						<a href="/index.php/admin/shop_intro/<?=$shop->shop_id?>">
							<input type="button" class="btn btn-primary" value="查看">
						</a>
					</td>
					<td>
						<a href="/index.php/admin/shop_comments/<?=$shop->shop_id?>">
							<input type="button" class="btn btn-primary" value="查看管理">
						</a>
					</td>
					<td><?php if($shop->is_old) echo '老店'; else echo '新店';?></td>
					<td><?php if($shop->shop_status) echo '是'; else echo '否';?></td>
					<td>
						<a href="/index.php/admin/edit_shop/<?=$shop->shop_id?>" >
							<input type="button" class="btn btn-primary" value="修改">
						</a>
						<a href="/index.php/shop/delete_shop/<?=$shop->shop_id?>" >
							<input type="button" class="btn btn-default" value="删除">
						</a>
					</td>
				</tr>
				<?php
					endforeach
				?>
			</tbody>
		<table>
	</section>
</div>