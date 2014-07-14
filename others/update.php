<? header("refresh:3;url=list.php"); ?>

<?

$link=mysql_connect("localhost","root","12345");
mysql_select_db("dogfood", $link);
mysql_query("SET CHARACTER SET UTF8");

$sql="UPDATE memberdata SET memberID='$memberID',memberPassword='$memberPassword' ,memberPassword2='$memberPassword2' ,memberName='$memberName' 
	,memberSex='$memberSex',memberBirthday='$memberBirthday',memberMail='$memberMail',memberTEL='$memberTEL',memberPhone='$memberPhone',memberADD='$memberADD'
 WHERE memberNo='".$_GET['id']."'";
//echo $sql;					
mysql_query($sql,$link);    
?>

<html>
<p>資料更新中 ...........</p>
</html>

	

	