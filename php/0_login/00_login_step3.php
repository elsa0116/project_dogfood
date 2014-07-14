<?
	session_start();
	foreach($_POST as $key => $value){
		$$key = $value;
	}
?>

<style type="text/css">
.login_left {
	float:left; 
}
.login_right {
	float:right;
}
.step3-3 .step_link {
	margin:40px 0px;
}
.step3-3 .step_link a {
	text-decoration:none; 
	color:rgb(0,0,0);
}
</style>


<div class="container">
	<div  class="top_flowchart step3"></div>
	<div  class="step3-2">
		<div style="font-size:18px; margin:0px 0px 10px 0px;">
			<font color="red">▍</font>請確認填寫的資料是否無誤。
		</div>
		<div style="font-size:18px;">
			<table height="340" width="900">
				<tr>
					<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing">帳 號</div></td>
					<td colspan="3" class="light_gray">
					<? 
						echo $memberID;
						$_SESSION['memberID'] = $memberID;
					?>
					</td>
				</tr>
				<tr>
					<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">密 碼</div></td>
					<td colspan="3" class="dark_gray">
					<? 
						echo $memberPassword;
						$_SESSION['memberPassword'] = $memberPassword;
					?>
					</td>
				</tr>
				<tr>
					<td colspan="4" width="230" height="40" ></td>
				</tr>
				<tr>
					<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">姓 名</div></td>
					<td width="230" class="dark_gray">
					<? 
						echo $memberName;
						$_SESSION['memberName'] = $memberName;
					?>
					</td>
					<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">性 別</div></td>
					<td width="230" class="dark_gray">
					<? 
						if($memberSex=="boy"){
							echo "男";
						}else if($memberSex=="girl"){
							echo "女";
						}
						$_SESSION['memberSex'] = $memberSex;
					?>
					</td>
				</tr>
				<tr>
					<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing">生 日</div></td>
					<td width="230" class="light_gray">
					<? 
						if($memberBirthday != null){
							$memberBirthday_ = implode("-", $memberBirthday);
							echo $memberBirthday_;
							$_SESSION['memberBirthday'] = $memberBirthday_;
						}
					?>
					</td>
					<td width="230" height="40" bgcolor="#B9D991"><div style="text-align:center;">E - mail</div></td>
					<td width="230" class="light_gray">
					<? 
						echo $memberMail;
						$_SESSION['memberMail'] = $memberMail;
					?>
					</td>
				</tr>
				<tr>
					<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">市 話</div></td>
					<td width="230" class="dark_gray">
					<? 
						if($memberTEL != null){
							$memberTEL_ = implode("-", $memberTEL);
							echo $memberTEL_;
							$_SESSION['memberTEL'] = $memberTEL_;
						}
					?>
					</td>
					<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">手 機</div></td>
					<td width="230" class="dark_gray">
					<? 
						echo $memberPhone;
						$_SESSION['memberPhone'] = $memberPhone;
					?>
					</td>
				</tr>
				<tr>
					<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing">住 址</div></td>
					<td colspan="3" class="light_gray">
					<? 
						echo $memberADD;
						$_SESSION['memberADD'] = $memberADD;
					?>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div  class="step3-3">
		<form name="form_reg1" action="index.php?file=0_login&page=00_login_step2" method="post">
			<div class="step_link login_left">
				<a href="javascript:document.form_reg1.submit();">上一步 ＜＜</a>
			</div>
		</form>
		<form name="form_reg2" action="index.php?file=0_login&page=00_login_insert" method="post">
			<div class="step_link login_right">
				<a href="javascript:document.form_reg2.submit();">下一步 ＞＞</a>
			</div>
		</form>
	</div>
</div>