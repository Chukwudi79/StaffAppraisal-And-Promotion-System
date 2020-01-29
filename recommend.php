<?php 
	$connection = mysqli_connect('localhost', 'root', '', 'appraisal');

	$position = $_GET['position'];

	if(isset($position)==true){
		if ($query = mysqli_query($connection, "UPDATE `users` SET `status` = 'recommended' WHERE `users`.`id` = '$position'")){
				
				header("location: hodpage.php");
				}

	
	}
 ?>