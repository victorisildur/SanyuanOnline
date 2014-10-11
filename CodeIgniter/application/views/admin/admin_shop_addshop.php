<div class="col-md-10">
	<!-- function bar-->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" ><a href="/index.php/admin">所有商铺</a></li>
		<li role="presentation" class="active"><a href="/index.php/admin/add_shop">新增商铺</a></li>
	</ul>
	<!--add shop-->
	<section id="add_shop_panel" style="margin-top:20px">
		<form action="/index.php/shop/add_shop" method="post" role="form" class="form-horizontal">
			<div class="form-group">
				<label for="shop_name" class="col-sm-2 control-label">商铺名称</label>
				<div class="col-sm-10">
					<input type="text" name="shop_name" id="shop_name" class="form-control" >
				</div>
			</div>
			<div class="form-group">
				<label for="shop_addr" class="col-sm-2 control-label">地址</label>
				<div class="col-sm-10">
					<input type="text" name="shop_addr" id="shop_addr" class="form-control" >
				</div>
			</div>
			<div class="form-group">
				<label for="shop_tel" class="col-sm-2 control-label">电话</label>
				<div class="col-sm-10">
					<input type="text" name="shop_tel" id="shop_tel" class="form-control" >
				</div>
			</div>
			
			<div class="form-group">
				<label for="shop_intro" class="col-sm-2 control-label">详细介绍</label>
				<div class="col-sm-10">
					<!--ueditor-->					
					<!-- 加载编辑器的容器 -->
					<script id="container" name="content" type="text/plain"></script>
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
					<input type="text" name="shop_services" id="shop_services" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 control-label">
					<strong>新店老店</strong>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label>
							<input type="radio" name="is_old" id="is_old1" value="1">
							老店
						</label>				
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="is_old" id="is_old0" value="0">
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
							<input type="radio" name="shop_status" id="shop_status0" value="0">
							热门
						</label>				
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="shop_status" id="shop_status1" value="1">
							普通
						</label>				
					</div>
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

<script src="/static/js/admin_addshop.js"></script>