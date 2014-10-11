	<div class="container">
		<h4><strong>
			<?php
				
			?>
		</strong></h4>
		<div class="show_box">
			<div class="row">
				<?php 
					$count = count($leaflets);
					
					if( $count > 4) {
						$count = 4;
					}
					for( $x=0; $x<$count; $x++) :
				?>
				<div class="col-xs-3 img_col">					
					<a class="text-center" href="/index.php/leaflet/detail/<?=$leaflets[$x]->leaflet_id?>">
						<p> <small> <?=$leaflets[$x]->title?> </small> </p>
					</a>					
				</div>
				<?php 
					endfor 					
				?>
			</div>
			
		</div>
	</div>
