<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<style type="text/css">
		.news_topic
		{
			background-image:url(../images/00_cart/bg_cart.png);
			width:850px; 
			height:35px;
			// padding:7px 10px;
			margin:0px auto;
			border-top-left-radius:6px;
			border-top-right-radius:6px;
			font-weight:bold;
		}	
		.cart_topic_word
		{
			float:left; 
			width:84px; 
			line-height:35px; 
			text-align:center;
		}
		.cart_items
		{
			float:left; 
			width:84px; 
			height:35px;
			line-height:35px; 
			text-align:center;
			border-bottom:1px dashed rgb(100,100,100);
		}
		.cart_inputstyle
		{
			text-align:center;
			width:50px;
			height:20px; 
			font-size:16px;
		}
		.cart_border
		{
			border:0px;
			background-color:#FEFEF7;
		}
		.cart_totalstyle
		{
			float:left; 
			width:90px; 
			text-align:right;
		}
		#nav a 
		{
			color:rgb(0,0,0);
			padding:0px 5px;
		}
		.active
		{
			text-decoration:none;
			font-weight:bold;
		}
	</style>
	<div class="container">
		<div class="news_topic">
			<div class="cart_topic_word">編號</div>
			<div style="float:left; width:416px; line-height:35px; text-align:center;">商品名稱</div>
			<div class="cart_topic_word">數量</div>
			<div class="cart_topic_word">單價</div>
			<div class="cart_topic_word">小計</div>
			<div class="cart_topic_word">刪除</div>
		</div>
	
		<div style="margin:0px auto; width:850px;  overflow:hidden; padding-bottom:20px;" id="item_no">
		<?
	/*-------------------------------------------假資料----------------------------------------------------------------*/
			$cart= array(
							array("1","寵物保健洗劑系列","1045"),
							array("2","寵物籠","1200"),
							array("3","活力零食系列特價","139"),
							array("4","綜合即食狗罐","25"),
							array("5","有機飼料","1870"),
							array("6","寵物涼墊","450"),
							array("7","防暴衝減震牽繩","500"),
							array("8","寵物保健洗劑系列","990"),
							array("9","寵物推車","2980"),
							array("10","項圈＋胸背＋牽繩","249"),
							array("11","項圈＋胸背","999")
						);
	/*-------------------------------------------假資料----------------------------------------------------------------*/
			$sum=0;
			$page_location=1;
			$item_per_page=5;
			// $item_per_page*$page_location=8
			// echo count($cart);
				for($i=0; $i<count($cart); $i++){
					$sum+=$cart[$i][2];
						if($i>= count($cart)){break;}

		?>	
		<form  action="URL" name="math">
		<div class="cart_items"><? echo $cart[$i][0]; ?></div><!--編號-->
			<div style="float:left; width:396px; line-height:35px; padding-left:20px; text-align:left; 
						border-bottom:1px dashed rgb(100,100,100);">
				<? echo $cart[$i][1]; ?><!--商品名稱-->
			</div>
	<!----------------------------------------------------------------------------------------------------------->
			<div class="cart_items"><!--數量-->
				<input type="text" name="amount" class="cart_inputstyle" 
				 onBlur="calculate();" id="<? echo $cart[$i][0]; ?>" onkeyup="value=value.replace(/[^\d]/g,'')" value="1"></input> 
			</div>
	<!----------------------------------------------------------------------------------------------------------->			
			<div class="cart_items"><!--單價-->
				$<input type="text" name="dollar" class="cart_inputstyle cart_border" 
				 onBlur="calculate();" readonly value="<? echo $cart[$i][2]; ?>" id="0<? echo $cart[$i][0]; ?>"></input> 
			</div>
	<!----------------------------------------------------------------------------------------------------------->			
			<div class="cart_items" ><!--小記-->
				$ <span style="display:inline-block;width:50px;" id="result<? echo $cart[$i][0]; ?>"></span>
			</div>  
	<!----------------------------------------------------------------------------------------------------------->
			<div class="cart_items" >
				<a href=""><img src="../images/00_cart/delete.png" /></a>
			</div>
		</form>
		<?
				$count++;
			}
		?>
		</div>
		<div>
			<div style=" margin-left:90px; float:left;">
				每頁顯示 
				<select id="item_per_page" style="width:50px;" onchange="page(this);" >
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				 筆商品
			</div>
			<div id="nav" style="height:30px; float:right; margin-right:80px;"></div>
		</div>	
		<div style="width:185px; height:60px; margin:50px 0px 0px 700px; font-weight:bold; ">
			<div>
				<div class="cart_totalstyle">運費：</div>
				<div class="cart_totalstyle">$50</div>
			</div>
			<div>
				<div class="cart_totalstyle">商品總計：</div>
				<div class="cart_totalstyle" id="sub_total">$ </div>
			</div>
			<div>
				<div class="cart_totalstyle">帳單總計：</div>
				<div class="cart_totalstyle" id="grand_total">$</div>
			</div>
		</div>

		<div>
			<div style="float:left; margin-top:95px; margin-left:60px;">
				<a href="" style="text-decoration:none; color:rgb(0,0,0);"><img src="../images/icon_7.png" /> 繼續購物</a>
			</div>
			<div style="float:left; margin-top:85px; margin-left:700px;">
				<a href="index.php?file=0_shopping_cart&page=00_shopping_cart_2" style="text-decoration:none; color:rgb(0,0,0);"><img src="../images/icon_6.png" /> 結帳</a>
			</div>
		</div>
	</div>

	<script language="JavaScript">
		// $('#num2').keydown(function(e){
		// if(e.keyCode  == 9){
				// $('#result').text($('#num1').val() * $('#num2').val());
			// }
		// })
		window.onload(calculate());
		function calculate(){
			var sum=0;
			var shipping_fee=50;
			for(var s=<?php echo ($page_location-1)*$item_per_page; ?>+1; s<=<?php echo ($item_per_page*$page_location)-1; ?>+1&&s<=<?php echo count($cart); ?>; s++){
				if( document.getElementById(s).value !='' || document.getElementById(s).value != 0 ){
						var nums =  document.getElementById(s).value * document.getElementById("0"+s).value ;
						document.getElementById("result"+s).innerHTML = nums;
						sum+=nums;
				}
			}
			document.getElementById("sub_total").innerHTML="$ "+sum;
			grand_total=shipping_fee+sum ;
			document.getElementById("grand_total").innerHTML="$ "+grand_total;
		}
	</script>
	<script src="jquery.js"></script>	
	<script language="JavaScript">	//頁碼

	$(document).ready(function(){
		
		$('#item_per_page').on('change', function() {
			var everyPage=$(this).val();
			// var everyPage=<? echo $item_per_page; ?>;
			var rownum=<? echo count($cart); ?>;
			var numPages = Math.ceil(rownum / everyPage );
			$('#nav').html("");
			for( i=0; i<numPages; i++){
				var pageNum = i+1;
				$('#nav').append( '<a href="#" rel="' + i + '">' + pageNum + '</a>');
			}
			$('#item_no form').hide();
			$('#nav a:first').addClass('active'); 						//第1頁的頁碼超連結套用目前分頁的CSS樣式
			$('#nav a').click(function(event){
				$('#nav a').removeClass('active');
				$(this).addClass('active');
				var currPage = $(this).attr('rel');						//取得rel屬性的分頁索引
				$('#item_no form').hide();
				for(var i=currPage*everyPage;i<(currPage*everyPage)+everyPage;i++){
					$('#item_no form').eq(i).show();
				}
				event.preventDefault();								
			});
			$('#nav a:first').click();	
		});
				
	});
	</script>	
	
	
	