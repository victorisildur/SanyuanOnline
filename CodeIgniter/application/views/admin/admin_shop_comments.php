<div class="col-md-10">
	<!-- function bar -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a>所有评论</a></li>	
		<li role="presentation"><a href="/index.php/admin">返回</a></li>			
	</ul>
	<section style="margin-top:20px">
		<strong>商铺ID:<?=$shop_id?></strong>
		<table class="table">
			<thead>
				<th>评论ID</th>
				<th>内容</th>
				<th>操作</th>
			</thead>
			<tbody>
				<?php
					foreach( $comments as $comment ) :
				?>
				<tr>
					<td><?=$comment->comment_id?></td>
					<td><?=$comment->comment_content?></td>
					<td>
						<a href="/index.php/comment/delete_comment/<?=$comment->comment_id?>/<?=$shop_id?>" class="btn btn-primary">删除</a>
					</td>
				</tr>
				<?php
					endforeach
				?>
			</tbody>
		</table>
	</section>
</div>
