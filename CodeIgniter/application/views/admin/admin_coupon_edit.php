<script src="/static/js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript"> 
        $(document).ready( function(){  
            $("#start_time").datepicker({//添加日期选择功能  
				numberOfMonths:1,//显示几个月  
				showButtonPanel:true,//是否显示按钮面板  
				dateFormat: 'yy-mm-dd',//日期格式  
				clearText:"清除",//清除日期的按钮名称  
				closeText:"关闭",//关闭选择框的按钮名称  
				yearSuffix: '年', //年的后缀  
				showMonthAfterYear:true,//是否把月放在年的后面  
				defaultDate:'2014-10-15',//默认日期  				
				monthNames: ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],  
				dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],  
				dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],  
				dayNamesMin: ['日','一','二','三','四','五','六'],  
				onSelect: function(selectedDate) {//选择日期后执行的操作  
					console.log(selectedDate);
					$("#start_time").val(selectedDate);
				}  
            });  
			
			$("#end_time").datepicker({//添加日期选择功能  
				numberOfMonths:1,//显示几个月  
				showButtonPanel:true,//是否显示按钮面板  
				dateFormat: 'yy-mm-dd',//日期格式  
				clearText:"清除",//清除日期的按钮名称  
				closeText:"关闭",//关闭选择框的按钮名称  
				yearSuffix: '年', //年的后缀  
				showMonthAfterYear:true,//是否把月放在年的后面  
				defaultDate:'2014-10-15',//默认日期   
				monthNames: ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],  
				dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],  
				dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],  
				dayNamesMin: ['日','一','二','三','四','五','六'],  
				onSelect: function(selectedDate) {//选择日期后执行的操作  
					console.log(selectedDate);
					$("#end_time").val(selectedDate);
				}  
            });  
        });
		
</script>


<!--right window-->
<div class="col-md-10">	
	<!-- function bar-->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a>编辑优惠券</a></li>
		<li role="presentation" ><a href="/index.php/admin/manage_coupon">返回</a></li>
	</ul>
	<!-- edit coupon -->
	<section style="margin-top:20px">
		<form action="/index.php/coupon/edit_coupon/<?=$coupon->coupon_id?>" method="post" role="form" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">商铺名称</label>
				<div class="col-sm-10">
					<p class="form-control" style="border:0px"><?=$coupon->shop_name?></p>
				</div>
			</div>
			<div class="form-group">
				<label for="coupon_content" class="col-sm-2 control-label">优惠券内容</label>
				<div class="col-sm-10">
					<input type="text" name="coupon_content" id="coupon_content" class="form-control" value="<?=$coupon->coupon_content?>">
				</div>				
			</div>
			<div class="form-group">
				<label for="start_time" class="col-sm-2 control-label">开始时间</label>
				<div class="col-sm-10">
					<input type="text" name="start_time" id="start_time" readonly="readonly" class="form-control"value="<?=$coupon->start_time?>"/>  
				</div>				
			</div>
			<div class="form-group">
				<label for="end_time" class="col-sm-2 control-label">结束时间</label>
				<div class="col-sm-10">
					<input type="text" name="end_time" id="end_time" readonly="readonly" class="form-control"value="<?=$coupon->end_time?>"/>  
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
</div>	