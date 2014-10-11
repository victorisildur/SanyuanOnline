<div class="container">
	<!--热门-->
	<h4><strong>热门</strong></h4>
	<div class="show_box">
		<div class="row">
			<?php 
				$shop_count = count($hot_shops);
				
				if( $shop_count > 4) {
					$shop_count = 4;
				}
				for( $x=0; $x<$shop_count; $x++) :
			?>
			<div class="col-xs-3 img_col">
				<img src= <?=$hot_shops[$x]->shop_img?> class='img-circle img-responsive shop_circle'>
				<a class="text-center" href="/index.php/shop/detail/<?=$hot_shops[$x]->shop_id?>">
					<p> <small> <?=$hot_shops[$x]->shop_name?> </small> </p>
				</a>					
			</div>
			<?php 
				endfor 					
			?>
		</div>
		
	</div>
	<!--新店-->
	<h4><strong>新店</strong></h4>
	<div class="show_box">
		<div class="row">
			<?php 
				$shop_count = count($new_shops);
				
				if( $shop_count > 4) {
					$shop_count = 4;
				}
				for( $x=0; $x<$shop_count; $x++):
			?>
			<div class="col-xs-3 img_col">
				<img src= <?=$new_shops[$x]->shop_img?> class='img-circle img-responsive shop_circle'>
				<a class='text-center' href="/index.php/shop/detail/<?=$new_shops[$x]->shop_id?>">
					<p> <small> <?=$new_shops[$x]->shop_name?> </small></p>
				</a>
			</div>
			<?php 
				endfor 
			?>
		</div>
	</div>
</div>