<!--right window-->
<div class="col-md-10">
		<!-- function bar-->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a>所有便民信息</a></li>
		<li role="presentation" ><a href="/index.php/admin/add_leaflet">新增便民信息</a></li>
	</ul>
	<!--shop management-->
	<section id="leaflet_panel">
		<table class="table">
			<thead>
				<tr>
					<th>leaflet ID</th>
					<th>标题</th>
					<th>类型</th>
					<th>内容</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($leaflets as $leaflet) :
				?>
				<tr>
					<td><?=$leaflet->leaflet_id?></td>
					<td><?=$leaflet->title?></td>
					<td><?php
							switch( $leaflet->type ) {
								case 0:
									echo '人才招聘'; break;
								case 1:
									echo '房源信息'; break;
								case 2:
									echo '家政服务'; break;
								case 3:
									echo '教育培训'; break;
								case 4:
									echo '二手信息'; break;
								default:
									echo '未知';
							}
						?>
					</td>
					
					<td>
						<a href="/index.php/admin/leaflet_content/<?=$leaflet->leaflet_id?>">
							<input type="button" class="btn btn-primary" value="查看">
						</a>
					</td>					
					<td>
						<a href="/index.php/admin/edit_leaflet/<?=$leaflet->leaflet_id?>" >
							<input type="button" class="btn btn-primary" value="修改">
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