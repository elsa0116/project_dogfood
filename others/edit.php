<?

$link=mysql_connect("localhost","root","12345");    //載入主機帳號密碼
mysql_select_db("dogfood", $link);   					//載入資料庫
mysql_query("SET CHARACTER SET UTF8");    			//語系設定
$search="SELECT * FROM memberdata WHERE id='".$_GET['id']."'";		// 查詢資料
$data=mysql_query($search, $link);					// 執行語法
echo $query;
$row=mysql_fetch_array($data);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>寵物網站首頁</title>

<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<link rel="stylesheet" href="css/login.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
</head>

<html xmlns="http://www.w3.org/1999/xhtml">
<body id="" onload="">
	<div class="main">
		<div class="header">	
			<div class="header1">
				<div><a href="" class="header_leftlink">註冊</a></div>
				<div><a href="" class="header_leftlink signin">登入</a></div>
			</div>
			<div class="header2">
				<div>
					<a href="" class="header_rightlink">
						<div style="float:left; margin:0px 8px;"><img src="images/h_cart.png"  /></div>
						<div class="" style="float:left; padding:5px 0px 0px 0px; font-weight:bord;">購物車</div>
					</a>
				</div>
			</div>
		</div>
		<div class="logo">
			<div class="logo1"></div>
			<div class="logo2"></div>
			<div class="search">
				<div class="search_input">
					<input type="text" name="" value="" id="" size="100%"/>
					<a href=""><img src="images/search.png" align="top" /></a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="item1" id="mouse-over1"><a href=""><img src="" /></a></div>
			<div class="item1" id="mouse-over2"><a href=""><img src="" /></a></div>
			<div class="item1" id="mouse-over3"><a href=""><img src="" /></a></div>
			<div class="item1" id="mouse-over4"><a href=""><img src="" /></a></div>
			<div class="item1" id="mouse-over5"><a href=""><img src="" /></a></div>
			<div class="item1" id="mouse-over6"><a href=""><img src="" /></a></div>
		</div>
		
		<div class="content">
				<div  class="top_flowchart step2"></div>
				<div  class="step2-2">
					<div style="font-size:18px; margin:0px 0px 10px 0px;">
						<font color="red">▍</font>請修改您的資料。
					</div>
					<div style="font-size:18px;">
<form action="update.php?id=<? echo $row[0] ?>" method="post">
							<table height="340" width="900">
								<tr>
									<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing"><font color="red">*</font>設定帳號</div></td>
									<td width="201" class="light_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberID" value="<? echo $row[1]?>></div></td>
									<!-- <input type="text" readonly="true" style="border:0px;background:transparent;" /> -->
									<td colspan="2" class="light_gray">(帳號長度為 4 ~ 15 字元間)</td>
								</tr>
								<tr>
									<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing"><font color="red">*</font>設定密碼</div></td>
									<td class="dark_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberPassword" value="<? echo $row[2]?>></div></td>
									<td colspan="2" class="dark_gray">(密碼長度為 6 ~ 15 字元間，建議以英數字混雜)</td>
								</tr>
								<tr>
									<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing"><font color="red">*</font>密碼確認</div></td>
									<td class="light_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberPassword" value="<? echo $row[3]?>></div></td>
									<td colspan="2" class="light_gray">(請再次輸入您的設定密碼)</td>
								</tr>
								<tr>
									<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">姓 名</div></td>
									<td class="dark_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberName" value="<? echo $row[4]?>></div></td>
									<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">性 別</div></td>
									<td width="210" class="dark_gray" align="center"><input type="radio" size="100%"  value="boy" name="memberSex" value="<? echo $row[5]?>>男
									<input type="radio" size="100%" value="girl" name="memberSex" value="<? echo $row[5]?>>女</td>
								</tr>
								<tr>
									<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing">生 日</div></td>
									<td class="light_gray"><div class="step2_input"><input type="text" size="100%" placeholder="year" style="width:65px; height:25px;" name="memberBirthday" value="<? echo $row[6]?>>-<input type="text" size="100%" placeholder="month" style="width:40px; height:25px;" name="memberBirthday" value="<? echo $row[6]?>>-<input type="text" size="100%" placeholder="day" style="width:40px; height:25px;" name="memberBirthday" value="<? echo $row[6]?>></div></td>
									<td height="40" bgcolor="#B9D991"><div style="text-align:center;"><font color="red">*</font>E - mail</div></td>
									<td class="light_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberMail" value="<? echo $row[7]?>></div></td>
								</tr>
								<tr>
									<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">市 話</div></td>
									<td class="dark_gray"><div class="step2_input"><input type="text" size="100%" style="width:40px; height:25px;" name="memberTEL" value="<? echo $row[8]?>>-<input type="text" size="100%" style="width:118px; height:25px;" value="<? echo $row[8]?>></td>
									<td height="40" bgcolor="#D8E9B9" name="memberTEL"><div class="word_spacing"><font color="red">*</font>手 機</div></td>
									<td class="dark_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberPhone" value="<? echo $row[9]?>></div></td>
								</tr>
								<tr>
									<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing"><font color="red">*</font>住 址</div></td>
									<td colspan="3" class="light_gray"><div class="step2_input"><input type="text" size="100%" style="width:615px; height:25px;" name="memberADD" value="<? echo $row[10]?>></div></td>
								</tr>
							</table>
					
					</div>
				</div>

				<div  class="step3-3">
					<div style=" float:left; margin:40px 0px;">
						<a href="00_login_step1.html" style="text-decoration:none; color:rgb(0,0,0);">上一步 ＜＜</a>
					</div>
					<div style=" float:right; margin:40px 0px;">
										                      <input type="submit" value="下一步">
										<!-- <a href="javascript:document.form.submit();">下一步 ＞＞</a> -->
         <!--<a href="00_login_step3.php" style="text-decoration:none; color:rgb(0,0,0);">下一步 ＞＞</a> -->
					
					</div>
				</div>
		</div>
</form>
		<div class="footer">
			<div class="footer1">
				<div class="footer11">10607 臺北市大安區基隆路四段43號</div>
				<div class="footer11">02-27333141 Copyright©2014 逗狗福</div>
			</div>
			<div class="footer2">
				<div><a href="" class="ft_rightlink">關於我們</a></div>
				<div><a href="" class="ft_rightlink">聯繫我們</a></div>
				<div><a href="" class="ft_rightlink">服務條款</a></div>
				<div><a href="" class="ft_rightlink">網站地圖</a></div>
			</div>
		</div>
	</div>
</body>
</html>
