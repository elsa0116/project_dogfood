<? header("refresh:0;url=list.php"); ?>	
<?

$link=mysql_connect("localhost","root","12345");
mysql_select_db("dogfood", $link);
mysql_query("SET CHARACTER SET UTF8");
$sql="DELETE FROM memberdata WHERE memberNo='".$_GET['id']."'";
echo $sql;
mysql_query($sql,$link);
?>

