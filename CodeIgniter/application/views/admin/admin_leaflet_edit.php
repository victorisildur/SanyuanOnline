<div class="col-md-10">
	<!-- function bar -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a >修改商铺信息</a></li>		
	</ul>
	<!-- edit shop -->
	<section style="margin-top:20px">
		<form action="/index.php/leaflet/edit_leaflet/<?=$leaflet->leaflet_id?>" method="post" role="form" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">类型</label>
				<div class="col-sm-10">					
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type0" value="0" 
							<?php if($leaflet->type ==0) echo "checked"?> >
							人才招聘
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type1" value="1"
							<?php if($leaflet->type ==1) echo "checked"?> >
							房源信息
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type2" value="2"
							<?php if($leaflet->type ==2) echo "checked"?> >
							家政服务
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type3" value="3"
							<?php if($leaflet->type ==3) echo "checked"?> >
							教育培训
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type4" value="4"
							<?php if($leaflet->type ==3) echo "checked"?> >
							二手信息
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="title" class="col-sm-2 control-label">标题</label>
				<div class="col-sm-10">
					<input type="text" name="title" id="title" class="form-control" value="<?=$leaflet->title?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">内容</label>
				<div class="col-sm-10">
					<!--ueditor-->					
					<!-- 加载编辑器的容器 -->
					<script id="container" name="content" type="text/plain"><?=$leaflet->content?></script>
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
			
			<div class="row" style="margin-top:10px">
				<div class="col-md-2">
				</div>
				<div class="col-md-10">
					<input type="submit" value="提交修改" class="btn btn-primary">
				</div>
			</div>
		</form>
	</section>