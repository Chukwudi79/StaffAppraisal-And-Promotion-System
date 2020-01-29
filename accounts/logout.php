<?php 
	require '../includes/functions.php';
	$classObj = new appraise;
	$classObj->connection();

	if (isset($_COOKIE['user'])){
		setcookie("user", "", time() - 3600, "/");
		header("location: http://localhost/staffpro/login.php");
	}else{
		header("location: http://localhost/staffpro/login.php");		
	}

 ?>

