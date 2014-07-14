<?
	session_start();
	include_once('WADB.php');
	$db = new WADB('localhost','dogfood','root','12345');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>逗狗福</title>
	<link rel="stylesheet" href="../css/main.php" type="text/css" />
	<link rel="stylesheet" href="../css/down_navigation.css" type="text/css" />
	<link rel="stylesheet" href="../css/login.css" type="text/css" />
	<script type="text/javascript" src="banner.js"></script>
</head>

<html xmlns="http://www.w3.org/1999/xhtml">
<body id="" onload="">
	<div class="main" >
		<div class="header"  style="background-image:url(../images/bg_menubar.png); background-repeat:repeat-x;border-top-left-radius:7px; border-top-right-radius:7px;">	
			<?php include('_main/header.php'); ?>
		</div>
			<?php include('_main/corporate_identity_logo.php'); ?>
			<?php
				if (empty($_GET['file'])) {
					echo '';
					}else{
					echo '<div class="content" id="content">';
					}
			?>
			<?php 
				/*include('_main/main_menu.php');
				include('1_products/02_product_detail.php'); */
			?>
			 <?php
					$url = '';
					if (!empty($_GET['file'])) {
						include('_main/main_menu.php');
						$url .= $_GET['file'] . '/';
					}
					if (!empty($_GET['page'])) {
						$url .= $_GET['page'] . '.php';
					}
					if (empty($_GET['file'])) {
						$url .= '_main/homepage_contain.php';
					}
					include $url;
			 ?>
			<?php
				if (empty($_GET['file'])) {
					echo '';
					}else{
					echo '</div>';
					}
			?>			
		<div class="footer">
			<?php include('_main/footer.php'); ?>
		</div>
	</div>
</body>
</html>
