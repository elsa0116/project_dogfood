		<?php 
			$rand = rand(0,3);
		?>
	<div style="width:1008px;  background-color:#FEFEF7; float:left; <? if($rand==0 || $rand==1){echo 'height:600px;';}else{echo 'height:630px;';} ?>">
		<?php
			if ($rand==0){
		?>
			<div style="margin:15px 0px 0px 28px; "> <!--小圖在上-->
				<?php for($i=1;$i<=6;$i++){ ?>
				<div class="homepage_down_squares homepage_down_squares_h130" id="down_squares_s<?php echo $i; ?>">
					<a href=""><img src="" /></a>
				</div>
				<?php } ?>
			</div>
			<div id="homepage_banner" style="margin:150px 20px 0px 20px;">
				<div class="homepage_arrow02_position" id="arrow02"><img src="../images/arrow02.png" /></div>	
				<div class="homepage_arrow01_position" id="arrow01"><img src="../images/arrow01.png" /></div>			
			</div>
		<?php
			}else if($rand==1){
		?>	
			<div id="homepage_banner" style="margin:10px 20px 0px 20px;"> <!--小圖在下-->
				<div class="homepage_arrow02_position" id="arrow02"><img src="../images/arrow02.png" /></div>	
				<div class="homepage_arrow01_position" id="arrow01"><img src="../images/arrow01.png" /></div>			
			</div>
			<div style="margin:15px 0px 0px 28px; ">
				<?php for($i=1;$i<=6;$i++){ ?>
				<div class="homepage_down_squares homepage_down_squares_h130" id="down_squares_s<?php echo $i; ?>">
					<img src="" />
				</div>
				<?php } ?>				
			</div>
		<?php
			}else if($rand==2){
		?>
			<div id="homepage_banner" style="margin:0px 20px 0px 20px;"> <!--大圖在下-->
				<div class="homepage_arrow02_position" id="arrow02"><img src="../images/arrow02.png" /></div>	
				<div class="homepage_arrow01_position" id="arrow01"><img src="../images/arrow01.png" /></div>			
			</div>
			<div style="margin:15px 0px 0px 28px; ">
				<?php for($i=1;$i<=6;$i++){ ?>
				<div class="homepage_down_squares homepage_down_squares_h180" id="down_squares_b<?php echo $i; ?>">
					<img src="" />
				</div>
				<?php } ?>
			</div>		
		<?php	
			}else{
		?>
			<div style="margin:15px 0px 0px 28px; "> <!--大圖在上-->
				<?php for($i=1;$i<=6;$i++){ ?>
				<div class="homepage_down_squares homepage_down_squares_h180" id="down_squares_b<?php echo $i; ?>">
					<img src="" />
				</div>
				<?php } ?>
			</div>
			<div id="homepage_banner" style="margin:0px 20px 0px 20px;">
				<div class="homepage_arrow02_position" id="arrow02"><img src="../images/arrow02.png" /></div>	
				<div class="homepage_arrow01_position" id="arrow01"><img src="../images/arrow01.png" /></div>			
			</div>			
		<?php
			}
		?>
	</div>