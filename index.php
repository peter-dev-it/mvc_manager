<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quản lý thành viên</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>
<?php 
	include "Model/DBConfig.php";
 	$db = new Database;
 	$db->connect();

 	if (isset($_GET['controller'])) {
 		$controller = $_GET['controller'];
 	}else{
 		$controller = '';
 	}
 
 	switch ($controller) {
 		case 'thanh-vien':{
 			require_once('Controller/thanhvien/index.php');
 			break;
 		}
 		
 	}


 ?>