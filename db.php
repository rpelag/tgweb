<?php
$con = mysqli_connect("localhost","teamglobal_admin","P@ssw0rdP@ssw0rd","teamglobal_user");
    if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}

date_default_timezone_set('Asia/Manila');
$error="";
?>
