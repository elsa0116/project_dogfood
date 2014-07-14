<? header("refresh:0;url=index.php?file=0_login&page=00_login_step3"); ?>

<?
$link=mysql_connect("localhost","root","12345");         // 用root帳號連入資料庫
mysql_select_db("dogfood", $link);						 // 選擇使用user這個資料庫
mysql_query("SET CHARACTER SET UTF8");					 //編碼設定
$search="SELECT * FROM MemberData";					 	 //查詢資料
$data=mysql_query($search, $link);						 //執行語法
if($memberBirthday != "")								 //把三格日期(年月日),利用implode的功能合併成一格 
{
$memberBirthday_=implode("-",$memberBirthday);
}
if($memberTEL != "")									 //把兩格電話,02-XXXXX,合併成一格
{
$memberTEL_=implode("-",$memberTEL);
}
$sql="INSERT INTO MemberData(memberID,memberPassword,memberPassword2,memberName,memberSex,memberBirthday,memberMail,memberTEL,memberPhone,memberADD) VALUES ('".$_POST['memberID']."','".$_POST['memberPassword']."','".$_POST['memberPassword2']."','".$_POST['memberName']."','".$_POST['memberSex']."','$memberBirthday_','".$_POST['memberMail']."','$memberTEL_','".$_POST['memberPhone']."','".$_POST['memberADD']."')";

/* echo $sql; */

mysql_query($sql,$link);
?>

