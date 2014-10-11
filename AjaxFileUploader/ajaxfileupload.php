<!DOCTYPE>
<html>
<head>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="ajaxfileupload.js"></script>
	<script type="text/javascript">
	function ajaxFileUpload()
	{
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
		})
		.ajaxComplete(function(){
			$(this).hide();
		});

		$.ajaxFileUpload
		(
			{
				url:'/ueditor/php/uploadshopimg.php',
				secureuri:false,
				fileElementId:'fileToUpload',
				dataType: 'json',
				data:{name:'logan', id:'id'},
				success: function (data, status)
				{
					if(typeof(data.error) != 'undefined')
					{
						if(data.error != '')
						{
							//alert("上传失败："+data.error);							
						}else
						{
							//alert("上传照片成功");
							$("#input111").val(data.msg);
						}
					}
				},
				error: function (data, status, e)
				{
					//alert(e);
				}
			}
		)		
		return false;
	}
	</script>
</head>
<body>
	<img id="loading" src="loading.gif" style="display:none;">
	<form name="form" action="" method="POST" enctype="multipart/form-data">
		<input id="fileToUpload" type="file" size="45" name="fileToUpload" class="input">
		<button class="button" id="buttonUpload" onclick="return ajaxFileUpload();">Upload</button>
	</form>
	<input type="text" value="img url" id="input111" style="display:none">
</body>
</html>