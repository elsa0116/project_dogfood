<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<style type="text/css">
		.news_topic
		{
			background-color:rgb(248,182,43);
			width:900px; 
			height:18px;
			padding:7px 10px;
			border-top-left-radius:6px;
			border-top-right-radius:6px;
		}
	</style>
	<?php
	/* =========================假資料===========================================*/

					/*  到時候需要接的變數有三個
						1.訊息日期
						2.訊息文字 $NewsWord[$i] (須留意字數限制)
						3.訊息連結 $NewsLink[$i]         */
					/*   等資料庫教到後 就把這段改成 SQL 語法	*/	

							$NewsTime[0]='2014/05/23';
							$NewsWord[0]="超越《模仿犯》，宮部美幸最高峰！";
							$NewsLink[0]='index.php?file=4_news&page=05_news_notice_2';
							
							$NewsTime[1]='2014/05/24';
							$NewsWord[1]='希拉蕊與梅克爾，帶你看見未來！';
							$NewsLink[1]='news.php?idx=1002';
							
							$NewsTime[2]='2014/05/24';
							$NewsWord[2]='希拉蕊與梅克爾，帶你看見未來！';
							$NewsLink[2]='news.php?idx=1003';
							
							$NewsTime[3]='2014/05/24';
							$NewsWord[3]='希拉蕊與梅克爾，帶你看見未來！';
							$NewsLink[3]='news.php?idx=1004';					

							$NewsTime[4]='2014/05/24';
							$NewsWord[4]='希拉蕊與梅克爾，帶你看見未來！';
							$NewsLink[4]='news.php?idx=1005';
							
							$NewsTime[5]='2014/05/24';
							$NewsWord[5]='我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容！';
							$NewsLink[5]='news.php?idx=1006';							
/* =========================假資料===========================================*/	
	?>
	<div class="container">
		<div class="news_topic"><img src="../images/05_news/notice.png" /></div>
		<div style="margin:10px 0px 10px 780px;">
			顯示：
				<select>
					<?
						for($i=1; $i<=12; $i++){ 
					?>
						<option value="<? echo $i ?>" 
							<?	if($i==date('m')){echo ' selected';}?>
							><? echo $i ?></option>;
					<?	
						}
					?>
				</select>
			月份
		</div>
		<div class="news_content">
			<div style="height:600px; width:900px;">
				<?php 
					$count = 1;
					$n = 6;  /* 預設顯示 n 筆資料 *//* 到時候會從資料庫 SELECT n筆資料  */
					
					for ($i=0;$i<$n;$i++){
				?>
				<a href="<?php echo $NewsLink[$i] ?>" style="text-decoration:none; color:rgb(0,0,0);">
					<div style="float:left; padding:8px; width:100px; font-weight:bold; border-bottom:1px solid rgb(200,200,200);">
						<?php echo $NewsTime[$i] ?>
					</div>
					<div style="float:left; padding:8px 8px 9px 8px; width:750px; height:20px; border-bottom:1px solid rgb(200,200,200); 
								overflow:hidden; text-overflow:ellipsis; white-space:nowrap">
						<?php echo $NewsWord[$i] ?>
					</div>
					<div style="clear:both;"></div>
				</a>
				<?php
						$count ++;
					}
				?>
			</div>
		</div>
	</div>
