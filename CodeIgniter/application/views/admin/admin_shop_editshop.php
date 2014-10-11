<script src="/static/js/jquery-ui-1.9.2.custom.min.js"></script>

<div class="col-md-10">
	<!-- function bar -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a >修改商铺信息</a></li>		
		<li role="presentation" ><a href="/index.php/admin/edit_shop_img/<?=$shop->shop_id?>">修改商铺图片</a></li>		
	</ul>
	<!-- edit shop -->
	<section id="add_shop_panel" style="margin-top:20px">
		<form action="/index.php/shop/edit_shop/<?=$shop->shop_id?>" method="post" role="form" class="form-horizontal">
			<div class="form-group">
				<label for="shop_name" class="col-sm-2 control-label">商铺名称</label>
				<div class="col-sm-10">
					<input type="text" name="shop_name" id="shop_name" class="form-control" value="<?=$shop->shop_name?>">
				</div>
			</div>
			<div class="form-group">
				<label for="shop_addr" class="col-sm-2 control-label">地址</label>
				<div class="col-sm-10">
					<input type="text" name="shop_addr" id="shop_addr" class="form-control" value="<?=$shop->shop_addr?>">
				</div>
			</div>
			<div class="form-group">
				<label for="shop_tel" class="col-sm-2 control-label">电话</label>
				<div class="col-sm-10">
					<input type="text" name="shop_tel" id="shop_tel" class="form-control" value="<?=$shop->shop_tel?>">
				</div>
			</div>
			<div class="form-group">
				<label for="shop_img" class="col-sm-2 control-label">图片</label>
				<div class="col-sm-10">
					<img src="<?=$shop->shop_img?>" style="height:200px">										
				</div>
			</div>
			<div class="form-group">
				<label for="shop_intro" class="col-sm-2 control-label">详细介绍</label>
				<div class="col-sm-10">
					<!--ueditor-->					
					<!-- 加载编辑器的容器 -->
					<script id="container" name="content" type="text/plain"><?=$shop->shop_intro?></script>
					<!-- 配置文件 -->
					<script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
					<!-- 编辑器源码文件 -->
					<script type="text/javascript" src="/ueditor/ueditor.all.js"></script>
					<!-- 实例化编辑器 -->
					<script type="text/javascript">
						var ue = UE.getEditor('container');
					</script>
				</div>
			</div>
			<div class="form-group">
				<label for="shop_services" class="col-sm-2 control-label">主营</label>
				<div class="col-sm-10">
					<input type="text" name="shop_services" id="shop_services" class="form-control" value="<?=$shop->shop_services?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 control-label">
					<strong>新店老店</strong>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label>
							<input type="radio" name="is_old" id="is_old0" value="1" 
							<?php if($shop->is_old ==1) echo "checked"?> >
							老店
						</label>				
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="is_old" id="is_old1" value="0"
							<?php if($shop->is_old ==0) echo "checked"?> >
							新店
						</label>				
					</div>
				</div>
			</div>					
			<div class="row">
				<div class="col-md-2 control-label">
					<strong>是否热门</strong>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label>
							<input type="radio" name="shop_status" id="shop_status0" value="1" 
							<?php if($shop->shop_status ==1) echo "checked"?> >
							热门
						</label>				
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="shop_status" id="shop_status1" value="0"
							<?php if($shop->shop_status ==0) echo "checked"?> >
							普通
						</label>				
					</div>
				</div>
			</div>			
			<div class="row" style="margin-top:10px">
				<div class="col-md-2">
				</div>
				<div class="col-md-10">
					<input type="submit" value="提交修改" class="btn btn-primary">
					<a href="/index.php/admin" class="btn btn-default">返回</a>
				</div>
			</div>
		</form>		   
	</section>
</div>


