<?php 
	// $conn = mysqli_connect('localhost', 'root', '', 'appraisal');
	// 	if(!$conn){
	// 		echo "Error Connecting database ".mysql_error($conn);
	// 	}
	function multiusers($con, $useremail, $userpass){
		$sql = mysqli_query($con, "SELECT * FROM `users` WHERE email ='$useremail' AND password ='$userpass'");
		$row = mysqli_fetch_assoc($sql);
		 //print_r($row);

		if($row['role']=='hod'){
			$page = 'hodpage.php';
		}elseif ($row['role']=='staff') {
			$page = 'checkstatus.php';
		}elseif ($row['role']=='mgt') {
			$page = 'mgtpage.php';
		}else{
			$page = 'home.php';
		}

		 return $page;
	}
	// $email = "johnchukwu@gmail.com"; $password = "john1234";
	// $get = multiusers($conn, $email, $password);
	// echo $get;
 ?>