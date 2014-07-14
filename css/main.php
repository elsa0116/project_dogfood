<?php
			header("content-type:text/css");
?>
		body
		{
			font-family:Microsoft JhengHei,MingLiU,Arial;
			background-color:#EFEFEF;
		}
		.main
		{
			width:1008px;
			/*border:1px solid #900;*/
			margin:auto;
			background-color:#FEFEF7;
		}
		.send_button
		{
			background-color:transparent; 
			border:0; 
			cursor:pointer;
			height:35px;
			width:70px;
		}
		.header_bgcolor
		{
			background-color:#FEFEF7;
			width:1008px;
		}
		.header
		{
			width:1008px;
			height:52px;
			/*border:1px solid #900;*/
			background-color:rgb(0,0,0);
			color:#FEFEF7;
			clear:both;
		}
		.header1
		{
			/*border:1px solid #900;*/
			width:472px;
			height:50px;
			float:left;
			padding:0px 0px 0px 30px;
		}
		.header_leftlogo
		{
			line-height:52px;
		}
		.signin
		{
		border-left:1px solid #FEFEF7;
		}
		.header2
		{
			/*border:1px solid #900;*/
			width:360px;
			height:50px;
			float:right;
			margin:0px 1px 0px 0px;
		}
			#header22:hover a{background-color:rgba(250,250,250,0.3); height:37px;  border-radius:7px; }		
		.header_rightlink
		{
			float:right;
			text-decoration:none;
			color:#FEFEF7;
			font-weight:bold;
			padding:15px 10px 0px 0px;
		}
		.logo
		{
			width:1008px;
			height:150px;
			/*border:1px solid #900;*/
			color:#FEFEF7;
		}
		.logo1
		{
			width:502px;
			height:150px;
			/*border:1px solid #900;*/
			color:rgb(0,0,0);
			float:left;
			background-image:url(../images/logo.png);
			background-repeat:no-repeat;
			background-position:30px center;
		}
		.logo2
		{
			width:150px;
			height:150px;
			/*border:1px solid #900;*/
			color:rgb(0,0,0);
			float:left;
		}
		.search
		{
			width:350px;
			height:150px;
			/*border:1px solid #900;*/
			color:#FEFEF7;
			float:right;
		}
		.search_input{
			/*border:1px solid #900;*/
			line-height:20px;
			margin:20px 30px 0px 0px;
			float:right;
		}
		.search input
		{
			/*border:1px solid rgb(0,0,0);*/
			width:120px;
			height:25px;
			border:1px solid rgb(173,173,179);
		}
		.item
		{
			width:1000px;
			/* border:1px solid #900; */
			background-image:url(../images/bg_menu.png);
			float:left;
			padding-left:8px;
		}
			<?php for($i=1;$i<=6;$i++){ ?>
			#mouse-over<?php echo $i; ?> { background:url(../images/menu_0<?php echo $i; ?>.png) no-repeat 44px 19px; display:block;}
			#mouse-over<?php echo $i; ?>:hover{ background:url(../images/menu_0<?php echo $i; ?>-1.png) no-repeat 40px 15px; position:relative;}
			#mouse-over<?php echo $i; ?>:hover .dropdown_menu{display:block;}
			<?php } ?>

			.main_menu
		{
			position:relative;
			width:166px;
			height:70px;
			float:left;
			text-align:center;
			line-height:60px;
			padding:0px 17px;
		}
		.dropdown_menu
		{
			position:absolute;
			top:52px;
			border-radius:6px;
			display:none;
			z-index:1;
			width:1007px;
			line-height:45px;
			text-align:left;
			list-style-type:none;
			/* background-image:url(../images/bg_menubar.png); */
			/* background-repeat:repeat-x; */
			background-image: -webkit-gradient(linear, right top, left top, color-stop(-50, rgb(180,180,180)), color-stop(-10, rgb(0,0,0)));
			opacity:1;
			padding:0px;
		} 
			.dropdown_li:hover a{color:rgb(255,255,0); background-color:rgba(250,250,250,0.2); height:35px; border-radius:1px;}

		.dropdown_li
		{
			padding:0px;
			float:left;
		}
		.dropdown_li a
		{
			font-weight:bold;
			border-right:1px solid rgb(200,200,200);
			text-decoration:none;
			color:rgb(255,255,255);
			padding:0px 30px 0px 30px;
			font-size:16px;
		}	
		.banner
		{
			width:1008px;
			height:400px;
			/*border:1px solid #900;*/
			text-align:center;
			padding:80px 0px 0px 0px;
		}
		.content
		{
			width:1008px;
			height:690px;
			/* border:1px solid #900; */
			background-color:#FEFEF7;
			float:left;
		}
		.container
		{
			margin:120px 0px 0px 50px;
		}
		.footer
		{
			width:1008px;
			height:75px;
			/*border:1px solid #900;*/
			background-color:rgb(0,0,0);
			color:rgb(240,240,240);
			float:left;
		}
			#footer22:hover a{background-color:rgba(250,250,250,0.3); height:23px; border-top-left-radius:2px; border-bottom-left-radius:2px;}	
		.footer1
		{
			width:450px;
			height:63px;
			/*border:1px solid #900;*/
			/*background-color:rgb(0,0,0);*/
			float:left;
			line-height:50px;
			text-indent:2em;
			font-size:100%;
		}
		.footer11
		{
			text-decoration:none;
			color:#FEFEF7;
			height:24px;
			font-weight:bold;
			
		}
		.footer2
		{
			width:502px;
			/*border:1px solid rgb(255,255,255);*/
			/*background-color:rgb(0,0,0);*/
			color:#FEFEF7;
			float:right;
			line-height:50px;
			margin:25px 40px 0px 0px;
		}
		.footer2 .ft_rightlink
		{
			line-height:25px;
			color:white;
			text-decoration:none;
			float:right;
			border-right:1px solid #FEFEF7;
			padding:0px 10px 0px 10px;
			font-weight:bold;
		}
		
		#homepage_banner {
			width:860px;
			height:330px;
			padding:50px;
			border:1px solid rgb(200,200,200);
			position:relative;
			overflow:hidden;
			background-color:#FEFEF7;
			// cursor:pointer;
		}
		#homepage_banner img {
			position:absolute;
			top:10px;
			left:10px;
		}
		.homepage_down_squares{
			float:left; 
			padding:0px 5px;
			width:150px;
			cursor:pointer;
		}
		.homepage_down_squares_h130{
			height:130px;
		}			
		.homepage_down_squares_h180{
			height:180px;
		}
		.homepage_arrow01_position{
			position:relative; 
			top:130px; 
			left:-37px; 
			z-index:1; 
			cursor:pointer;
		}
		.homepage_arrow02_position{
			position:relative; 
			top:130px; 
			left:830px; 
			z-index:1; 
			cursor:pointer;
		}		
		/*-----homepage小圖--------------------------------------------------------------------------------------------------------*/	

			<?php for($i=1;$i<=6;$i++){ ?>
				#down_squares_s<? echo $i; ?> {background:url(../images/00_index_beta/menu<? echo $i; ?>-1.png) no-repeat; display:block;}
				#down_squares_s<? echo $i; ?>:hover {background:url(../images/00_index_beta/menu<? echo $i; ?>-2.png) no-repeat;}
			<? } ?>

		/*-----homepage小圖--------------------------------------------------------------------------------------------------------*/				

		/*-----homepage大圖--------------------------------------------------------------------------------------------------------*/

			<?php for($i=1;$i<=6;$i++){ ?>
				#down_squares_b<? echo $i; ?> {background:url(../images/00_index/menu<? echo $i; ?>-1.png) no-repeat; display:block;}
				#down_squares_b<? echo $i; ?>:hover {background:url(../images/00_index/menu<? echo $i; ?>-2.png) no-repeat;}
			<? } ?>

		/*-----homepage大圖--------------------------------------------------------------------------------------------------------*/	
		
