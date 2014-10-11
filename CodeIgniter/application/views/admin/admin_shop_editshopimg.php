<div class="col-md-10">
	<!-- function bar -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" ><a href="/index.php/admin/edit_shop/<?=$shop->shop_id?>">修改商铺信息</a></li>		
		<li role="presentation" class="active"><a href="/index.php/admin/edit_shop_img/<?=$shop->shop_id?>">修改商铺图片</a></li>		
	</ul>
	<section id="edit_shop_img_panel" style="margin-top:20px">
		<form action="/index.php/shop/edit_shop_img/<?=$shop->shop_id?>" method="post" role="form" class="form-horizontal">	
			<iframe src="/AjaxFileUploader/ajaxfileupload.php" id="frame111" style="border:0px">	
			</iframe>
			<input type="text" value="img url" id="shop_img" name="shop_img">
			<input type="submit" value="提交修改">
		<form>
	</section>
<script src="/static/js/editshop.js"></script>