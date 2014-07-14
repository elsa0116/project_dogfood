<?

$link=mysql_connect("localhost","root","12345");    // 載入主機帳號密碼
mysql_select_db("dogfood", $link);   				// 載入資料庫
mysql_query("SET CHARACTER SET UTF8");    			// 語系設定
$search="SELECT * FROM memberdata";					// 查詢資料
$data=mysql_query($search, $link);					// 執行語法

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用者帳號清單</title>
<style>
	span.buttonred{
		background-color: #d14836;
		background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#d14836));
		background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
		background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
		background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
		background-image: -o-linear-gradient(top,#dd4b39,#d14836);
		background-image: linear-gradient(top,#dd4b39,#d14836);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#dd4b39',EndColorStr='#d14836');
		border: 1px solid transparent;
		color: #fff!important;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		display: inline-block;
		zoom:1;
		_display: inline;
		font-weight: bold;
		height: 29px;
		line-height: 29px;
		min-width: 54px;
		padding: 0px 10px;
		margin: 5px 0;
		text-align: center;
		text-decoration: none !important;
		-moz-user-select: none;
		-webkit-user-select: none;
		cursor:pointer;
	}
</style>
</head>

<body>
<a href="index.php" style="text-decoration: none; color:blue"><h1 align="center" >回首頁</h1></a>
<hr />
<table border="1" align="center" width="1000px" style="text-align:center">
	<tr>
    	<td colspan="14" style="text-align:left">
        	<a href="00_login_step2.php"><span class="buttonred">新增使用者</span></a>
    	</td>
    </tr>
    <tr>
    						<th>編號</th>
    						<th>帳號</th>
                            <th>密碼</th>
    						<th>確認密碼</th>
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
    
<?
while($row=mysql_fetch_array($data)) { 
?>
    <tr>
    	<td><? echo $row[0] ?></td>
        <td><? echo $row[1] ?></td>
        <td><? echo $row[2] ?></td>
        <td><? echo $row[3] ?></td>
	    <td><? echo $row[4] ?></td>
	    <td><? echo $row[5] ?></td>
	    <td><? echo $row[6] ?></td>
	    <td><? echo $row[7] ?></td>
	    <td><? echo $row[8] ?></td>
	    <td><? echo $row[9] ?></td>
		<td><? echo $row[10] ?></td>
        <td><a href="edit_test.php?id=<? echo $row[0] ?>" >修改</a></td>
    	<td><a href="listdata.php?id=<? echo $row[0] ?>" >列表</a></td>
    	<td><a href="delete.php?id=<? echo $row[0] ?>" >刪除</a></td>
    </tr>
    </tr>
<?
}	
?>
</table>
</body>
</html>
