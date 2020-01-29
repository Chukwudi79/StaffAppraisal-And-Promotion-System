<?php 
	$level1 = 30000; $level2 = 35000;$level3 = 40000;$level4 = 45000;$level5 = 500000;$level6 = 55000;$level7 = 60000;$level8 = 65000;$level9 = 70000;$level10 = 73000;$level11 = 98000;$level12 = 78000;$level13 = 83000;$level14 = 87000;$level15 = 95000;$level16 = 100000;

	$connection = mysqli_connect('localhost', 'root', '', 'appraisal');	
	$position = $_GET['position'];
	
	
	// echo $getValue;
	if(isset($position)==true){
		$query = mysqli_query($connection, "SELECT * FROM staffdetail WHERE u_email ='$position'");
		$row = mysqli_fetch_assoc($query);
		$getValue = $row['p_post'];

		if($getValue === 'level1'){
			$salary = $level2;
			$level = "level2";
		}elseif ($getValue === 'level2') {
			$salary = $level3;
			$level = "level3";
		}elseif ($getValue === 'level3') {
			$salary = $level4;
			$level = "level4";
		}elseif ($getValue === 'level4') { 
			$salary = $level5;
			$level = "level5";
		}elseif ($getValue === 'level5') {
			$salary = $level6;
			$level = "level6";
		}elseif ($getValue === 'level6') {
			$salary = $level7;
			$level = "level7";
		}elseif ($getValue === 'level7') {
			$salary = $level8;
			$level = "level8";
		}elseif ($getValue === 'level8') {
			$salary = $level9;
			$level = "level9";
		}elseif ($getValue === 'level9') {
			$salary = $level10;
			$level = "level10";
		}elseif ($getValue === 'level10') {
			$salary = $level11;
			$level = "level11";
		}elseif ($getValue === 'level11') {
			$salary = $level12;
			$level = "level12";
		}elseif ($getValue === 'level12') {
			$salary = $level13;
			$level = "level13";
		}elseif ($getValue === 'level13') {
			$salary = $level14;
			$level = "level14";
		}elseif ($getValue === 'level14') {
			$salary = $level15;
			$level = "level15";
		}elseif ($getValue === 'level115') {
			$salary = $level16;
			$level = "level16";
		}else{
			$salary = $level1;
			$level = "level1";
		}

		if($query = mysqli_query($connection, "UPDATE `users` SET  `status` = 'promoted' WHERE `email` = '$position' "))
			{
				if($sql = mysqli_query($connection, "UPDATE `staffdetail` SET  `p_post` = '$level', `salary` = '$salary' WHERE `u_email` = '$position' ")){

					echo "Error";
				}
				header("location: mgtpage.php");
			}else{
				header("location: mgtpage.php");
			}

	
	}
	// UPDATE `staffdetail` SET `p_post` = 'level 2', `salary` = '50000' WHERE `staffdetail`.`sid` = 1;
 ?>