<?

$link=mysql_connect("localhost","root","12345");    // 載入主機帳號密碼
mysql_select_db("dogfood", $link);   					// 載入資料庫
mysql_query("SET CHARACTER SET UTF8");    			// 語系設定
$search="SELECT * FROM MemberData";					// 查詢資料
$data=mysql_query($search, $link);					// 執行語法

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/media/images/favicon.ico" />
		
		<title>列表</title>
	</head>
	<body >
	<div>
	<a href="index.html">
	<input type="button" class="buttonblue" value="回首頁" />
    </a>
	<h1>後台會員資料表</h1>
	<div class="demo_jui">
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
    <tr>
                			<th>帳號</th>
                            <th>密碼</th>                 
                            <th>姓名</th>
            				<th>性別</th>
                            <th>生日</th>
            				<th>E-mail</th>
			                <th>市話</th>
							<th>手機</th>
			                <th>住址</th>			
							<th>修改</th>
							<th>列表</th>
							<th>刪除</th>
			                
     </tr>
    </thead>
    <tbody>
<?
while($row=mysql_fetch_array($data)) { 
?>
	<tr>
						
						<td><? echo $row[1] ?></td>
						<td><? echo $row[2] ?></td>
						<td><? echo $row[3] ?></td>
						<td><? echo $row[4] ?></td>
						<td><? echo $row[5] ?></td>
						<td><? echo $row[6] ?></td>
						<td><? echo $row[7] ?></td>
						<td><? echo $row[8] ?></td>
						<td><? echo $row[9] ?></td>
						<td><a href="edit.php?id=<? echo $row[0] ?>" >修改</a></td>
						<td><a href="listdata.php?id=<? echo $row[0] ?>">列表</a></td>
						<td><a href="delete.php?id=<? echo $row[0] ?>">刪除</a></td>
		
	</tr>
<?
}	
?>
</tbody>
</table>
</div>
</body>
</html>
				
				