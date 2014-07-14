<?
	session_start();
	if($_SESSION['memberBirthday'] != null){
		$memberBirthday = explode("-", $_SESSION['memberBirthday']);
	}
	if($_SESSION['memberTEL'] != null){
		$memberTEL = explode("-", $_SESSION['memberTEL']);
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
	<div  class="top_flowchart step2"></div>
	<div  class="step2-2">
		<div style="font-size:18px; margin:0px 0px 10px 0px;">
			<font color="red">▍</font>請確實填寫您的資料，<font color="red">*</font>為必填項目。
		</div>
		<div style="font-size:18px;">
			<form name="form_reg" action="index.php?file=0_login&page=00_login_step3" method="post">
				<table height="340" width="900">
					<tr>
						<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing"><font color="red">*</font>設定帳號</div></td>
						<td width="201" class="light_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberID" value="<? echo $_SESSION['memberID']; ?>" onkeyup="value=value.replace(/[^ A-z0-9]/g,'')"/></div></td>
						<td colspan="2" class="light_gray">(帳號長度為 4 ~ 15 字元間)</td>
					</tr>
					<tr>
						<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing"><font color="red">*</font>設定密碼</div></td>
						<td class="dark_gray"><div class="step2_input"><input type="password" size="100%" class="login_inputsquare" name="memberPassword" value="<? echo $_SESSION['memberPassword']; ?>" onkeyup="value=value.replace(/[^ A-z0-9]/g,'')"/></div></td>
						<td colspan="2" class="dark_gray">(密碼長度為 6 ~ 15 字元間，建議以英數字混雜)</td>
					</tr>
					<tr>
						<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing"><font color="red">*</font>密碼確認</div></td>
						<td class="light_gray"><div class="step2_input"><input type="password" size="100%" class="login_inputsquare" name="memberPassword2" onkeyup="value=value.replace(/[^ A-z0-9]/g,'')"/></div></td>
						<td colspan="2" class="light_gray">(請再次輸入您的設定密碼)</td>
					</tr>
					<tr>
						<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">姓 名</div></td>
						<td class="dark_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberName" value="<? echo $_SESSION['memberName']; ?>"/></div></td>
						<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">性 別</div></td>
						<td width="210" class="dark_gray" align="center"><input type="radio" size="100%" value="boy" name="memberSex" <? if($_SESSION['memberSex']=="boy") echo checked; ?> />男<input type="radio" size="100%" value="girl" name="memberSex" <? if($_SESSION['memberSex']=="girl") echo checked; ?> />女</td>
					</tr>
					<tr>
						<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing">生 日</div></td>
						<td class="light_gray"><div class="step2_input"><input type="text" size="100%" placeholder="year" style="width:65px; height:25px;" name="memberBirthday[]"  maxlength="4" value="<? echo $memberBirthday[0]; ?>"  onkeyup="value=value.replace(/[^\d]/g,'')"/>-<input type="text" size="100%" placeholder="month" style="width:40px; height:25px;" name="memberBirthday[]" maxlength="2" value="<? echo $memberBirthday[1]; ?>"  onkeyup="value=value.replace(/[^\d]/g,'')"/>-<input type="text" size="100%" placeholder="day" style="width:40px; height:25px;" name="memberBirthday[]" maxlength="2" value="<? echo $memberBirthday[2]; ?>"  onkeyup="value=value.replace(/[^\d]/g,'')"/></div></td>
						<td height="40" bgcolor="#B9D991"><div style="text-align:center;"><font color="red">*</font>E - mail</div></td>
						<td class="light_gray"><div class="step2_input"><input type="email" size="100%" class="login_inputsquare" name="memberMail" value="<? echo $_SESSION['memberMail']; ?>" /></div></td>
					</tr>
					<tr>
						<td width="230" height="40" bgcolor="#D8E9B9"><div class="word_spacing">市 話</div></td>
						<td class="dark_gray"><div class="step2_input"><input type="text" size="100%" style="width:40px; height:25px;" name="memberTEL[]" value="<? echo $memberTEL[0]; ?>"  onkeyup="value=value.replace(/[^\d]/g,'')"/>-<input type="text" size="100%" style="width:118px; height:25px;" name="memberTEL[]" value="<? echo $memberTEL[1]; ?>"  onkeyup="value=value.replace(/[^\d]/g,'')"/></div></td>
						<td height="40" bgcolor="#D8E9B9" ><div class="word_spacing"><font color="red">*</font>手 機</div></td>
						<td class="dark_gray"><div class="step2_input"><input type="text" size="100%" class="login_inputsquare" name="memberPhone" value="<? echo $_SESSION['memberPhone']; ?>"  onkeyup="value=value.replace(/[^\d]/g,'')"/></div></td>
					</tr>
					<tr>
						<td width="230" height="40" bgcolor="#B9D991"><div class="word_spacing"><font color="red">*</font>住 址</div></td>
						<td colspan="3" class="light_gray"><div class="step2_input"><input type="text" size="100%" style="width:615px; height:25px;" name="memberADD" value="<? echo $_SESSION['memberADD']; ?>" /></div></td>
					</tr>
				</table>
			
				<div class="step3-3">
					<div class="step_link login_left">
						<a href="index.php?file=0_login&page=00_login_step1">上一步 ＜＜</a>
					</div>
					<div class="step_link login_right">
						<!-- 用超連結進行POST動作 -->
						<a href="javascript: void(0)" onClick="check_data()">下一步 ＞＞</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- 表單防呆 -->
<?php
	$sql = "SELECT * FROM memberdata";
	$data = $db->selectRecords($sql);
?>
<script type="text/javascript">
	function check_data(){
		<?php
			if($data['record']>0){
				foreach($data['data'] as $key => $value){
		?>
		if(document.form_reg.memberID.value == "<?php echo $value['memberID']; ?>"){
			window.alert("此帳號已被註冊");
			return false;
		}
		<?php
				}
			}
		?>
		if(document.form_reg.memberID.value.length==0){
			window.alert("請填寫帳號");
			return false;
		}
		if(document.form_reg.memberID.value.length<4 || document.form_reg.memberID.value.length>15){
			window.alert("帳號長度為 4 ~ 15 字元間");
			return false;
		}
		if(document.form_reg.memberPassword.value.length==0){
			window.alert("請填寫密碼");
			return false;
		}
		if(document.form_reg.memberPassword.value.length<6 || document.form_reg.memberPassword.value.length>15){
			window.alert("密碼長度為 6 ~ 15 字元間");
			return false;
		}
		if(document.form_reg.memberPassword.value != document.form_reg.memberPassword2.value){
			window.alert("設定密碼與密碼確認須為一致");
			return false;
		}
		if(document.form_reg.memberMail.value.length==0){
			window.alert("請填寫E-mail");
			return false;
		}
		if(document.form_reg.memberPhone.value.length==0){
			window.alert("請填寫手機號碼");
			return false;
		}
		if(document.form_reg.memberADD.value.length==0){
			window.alert("請填寫住址");
			return false;
		}
		form_reg.submit();
	}
</script>