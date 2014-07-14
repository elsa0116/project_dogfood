<?
	session_start();
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?
	foreach($_SESSION as $key => $value){
		$$key = $value;
	}
	$sql = "INSERT INTO memberdata(memberID,memberPassword,memberName,memberSex,memberBirthday,memberMail,memberTEL,memberPhone,memberADD,JoinDate)VALUES('$memberID','$memberPassword','$memberName','$memberSex','$memberBirthday','$memberMail','$memberTEL','$memberPhone','$memberADD','".date("Y-m-d")."')";
	$data = $db->insertRecords($sql);
	
	echo "<script language='javascript'>";
	echo "location.href='index.php?file=0_login&page=00_login_step4'";
	echo "</script>";
?>