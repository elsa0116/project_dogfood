<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<style type="text/css">
		.recipes_topic
		{
			background-color:rgb(149,97,52);
			width:900px; 
			height:18px;
			padding:7px 10px;
			border-top-left-radius:6px;
			border-top-right-radius:6px;
		}
		.recipes_content
		{
			width:856px;
			height:530px;
			border:1px solid rgb(200,200,200);
			padding:0px 30px 0px 31px;
		}
	</style>
	<?php
	/* =========================假資料===========================================*/
							$NewsTime[0]='2014/05/23';
							$NewsWord[0]="一二三四五六七八";
							$NewsLink[0]='index.php?file=3_recipes&page=04_recipes_2';	
	/* =========================假資料===========================================*/	
	?>
	<div class="container">
		<div class="recipes_topic"><img src="../images/04_recipes/title01.png" /></div>
		<div class="recipes_content">
			<?php
				$count = 1;
				$n = 10;
				for($i=0; $i<$n; $i++)
					{
			?>				
				<div style="border:1px solid rgb(200,200,200); padding:18px 0px 5px 13px; height:200px; width:135px; float:left; margin:15px 10px 0px 10px;">
					<div><img src="../images/04_recipes	/demo01.png"></div>
					<div style="height:40px; margin:5px 0px;"><? echo  $NewsWord[$i] ?></div>
					<div style="margin:0px 0px 0px 75px;"><a href="<? echo $NewsLink[$i] ?>" style="text-decoration:none; color:rgb(0,0,0);">...more</div>
				</div>
			<?php
					$count++;
				}
			?>
		</div>
	</div>