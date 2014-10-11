<!--right window-->
<div class="col-md-10">	
	<!-- function bar-->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="/index.php/admin/manage_leaflet">所有便民信息</a></li>
		<li role="presentation" class="active"><a>新增便民信息</a></li>
	</ul>
	<section style="margin-top:20px">
		<form action="/index.php/leaflet/add_leaflet" method="post" role="form" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">类型</label>
				<div class="col-sm-10">					
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type0" value="0" >
							人才招聘
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type1" value="1">
							房源信息
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type2" value="2">
							家政服务
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type3" value="3">
							教育培训
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="type" id="type4" value="4">							
							二手信息
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="title" class="col-sm-2 control-label">标题</label>
				<div class="col-sm-10">
					<input type="text" name="title" id="title" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">内容</label>
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
			
			<div class="row" style="margin-top:10px">
				<div class="col-md-2">
				</div>
				<div class="col-md-10">
					<input type="submit" value="提交新增" class="btn btn-primary">
				</div>
			</div>
		</form>
	</section>