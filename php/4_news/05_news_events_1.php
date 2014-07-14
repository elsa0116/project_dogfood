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
		.news_toplink
		{
			margin:10px 0px 20px 0px; 
			font-size:16px;
		}
		.news_toplink a
		{
			text-decoration:none; 
			color:rgb(0,0,0);
		}
		.news_content
		{
			margin:20px 0px 20px 0px;
		}
		.ellipsis
		{
			font-size:16px; 
			height:60px;
			display: -webkit-box;
			-webkit-line-clamp: 3; /*超出第5行時截斷*/
			-webkit-box-orient: vertical;
			overflow: hidden;
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
							$NewsLink[0]='index.php?file=4_news&page=05_news_events_2';
							
							$NewsTime[1]='2014/05/24';
							$NewsWord[1]='希拉蕊與梅克爾，帶你看見未來！';
							$NewsLink[1]='news.php?idx=1002';
							
							$NewsTime[2]='2014/05/24';
							$NewsWord[2]='希拉蕊與梅克爾，帶你看見未來！';
							$NewsLink[2]='news.php?idx=1002';
							
							$NewsTime[3]='2014/05/24';
							$NewsWord[3]='希拉蕊與梅克爾，帶你看見未來！';
							$NewsLink[3]='news.php?idx=1002';					

							$NewsTime[4]='2014/05/24';
							$NewsWord[4]='希拉蕊與梅克爾，帶你看見未來！';
							$NewsLink[4]='news.php?idx=1002';
							
							$NewsTime[4]='2014/05/24';
							$NewsWord[4]='我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容我是內容！';
							$NewsLink[4]='news.php?idx=1002';							
/* =========================假資料===========================================*/	
	?>
	<div class="container">
		<div class="news_topic"><img src="../images/05_news/events.png" /></div>
		<div class="news_content">
			<div style=" height:110px;" id="div_field">
				<?php 
					$count = 1;
					$n = 8;  /* 預設顯示 n 筆資料 *//* 到時候會從資料庫 SELECT n筆資料  */

					for ($i=0;$i<$n;$i++){
				?>
					<div style="float:left; padding:10px 10px; border-bottom:1px solid rgb(200,200,200); height:100px; width:438px;" >
						<div style="float:left;"><img src="../images/05_news/demo01.png" /></div>
						<div style="float:left; margin:0px 0px 0px 10px; width:310px;">
							<div style="font-weight:bold;">活動優惠主旨</div>
							<div class="ellipsis"><?php echo $NewsWord[$i] ?></div>
							<div style="float:right; "><a href="<?php echo $NewsLink[$i] ?>" style="text-decoration:none; color:rgb(0,0,0); padding:0px 10px;">...more</a></div>
						</div>
					</div>
				<?php
						$count++;
					}
				?>
			</div>
		</div>
	</div>
