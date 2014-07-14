<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<style type="text/css">
	.banner_rotator
	{
		border-top:1px solid rgb(150,150,150);
		border-bottom:1px solid rgb(180,180,180);
		position:absolute;
		width:400px;
		height:95px;
		margin-top:30px;
		margin-left:20px;
		padding-top:20px;
		<!--overflow:hidden;-->
	}
	.arrow_left
	{
		position:relative; 
		z-index:1; 
		border:1px solid rgb(150,150,150);
		width:15px; 
		height:113px; 
		bottom:20px; 
		cursor:pointer;
	}
	.arrow_right
	{
		position:relative; 
		z-index:1; 
		border:1px solid rgb(250,10,10);
		width:16px; 
		height:113px; 
		left:380px; 
		bottom:135px; 
		cursor:pointer;
	}
	</style>
	<script type="text/javascript" language="JavaScript">
		var aa,imgi=1,imga,imgb,imgd,tm=false,tm2=false;
		
		function test1(){
			aa=document.getElementById("product_banner_rotator");
			arrow_left=document.getElementById("arrowleft");
			arrow_right=document.getElementById("arrowright");
			arrow_left.onmousemove=test2;
			imga=document.createElement("img");
			imga.setAttribute("src","../images/02_products/detail/small/demo0"+imgi+".png");
			aa.appendChild(imga);
		}
		function test2(){
			if(tm==false){
				clearTimeout(tm2);
				imgi++;
				if(imgi>4){
					imgi=1;
				}
				imgb=document.createElement("img");
				imgb.setAttribute("src","../images/02_products/detail/small/demo0"+imgi+".png");
				imgb.style.left="10px";
				aa.appendChild(imgb);
				tm=setInterval(test4,20);
			}
		}
		function test4(){
			imga.style.left=(imga.offsetLeft-10)+"px";
			imgb.style.left=(imgb.offsetLeft-10)+"px";
			if(imgb.offsetLeft<=10){
				aa.removeChild(imga);
				imga=imgb;
				clearInterval(tm);
				tm=false;
				tm2=setTimeout(test2,3000);
			}
		}		
		
	</script>
	<div class="container">	
		
		<div style="float:left; width:450px; height:550px;">
			<div style="text-align:center; margin-top:20px;">
				<img src="../images/02_products/detail/large/demo01.png">
			</div>
			<div class="banner_rotator" id="product_banner_rotator">
				<div class="arrow_left" id="arrowleft" ></div>
				<div class="arrow_right" id="arrowright"></div>
			</div>
		</div>
		<div style="float:left; width:450px; height:550px;">
			<div style=" height:200px;">
				<div style="font-size:20px; font-weight:bold; margin-top:15px; margin-bottom:10px;">商品名稱</div>
				<div style=" height:80px;">
					內容物、內容物、內容物、內容物、內容物、內容物、內容物、內容物、內容物、內容物、內容物
				</div>
				<div style=" height:30px; width:200px;">
					<div style="float:left;">庫存狀況：</div>
					<div style="float:left; color:rgb(255,0,0);">缺貨中</div>
				</div>
				<div>
					<div style="float:left;">
						<div style="float:left; word-spacing:30px;">價 格：</div>
						<div style="float:left;">$ 299</div>
					</div>
					<div style="float:left;">
						<div style="float:left; margin-left:65px; word-spacing:25px;">數 量：</div>
						<div style="float:left;">
							<select style="width:50px;">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>100</option>
							</select>
						</div>
					</div>
					<div style="float:left; margin-left:50px;">
						<a href=""><img src="../images/02_products/detail/cart.png"></a>
					</div>
				</div>
			</div>
			<div style=" text-align:center;"><img src="../images/02_products/detail/line.png"></div>
			<div style=" margin-top:20px; width:450px; height:305px; word-break:break-all;">
			商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹
			商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹
			商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹
			商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹
			商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹
			商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹商品介紹
			</div>
		</div>
		
	</div>	