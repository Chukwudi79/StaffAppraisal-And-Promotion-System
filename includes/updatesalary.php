


 <?php 
	$level1 = 30000; $level2 = 35000;$level3 = 40000;$level4 = 45000;$level5 = 500000;$level6 = 55000;$level7 = 60000;$level8 = 65000;$level9 = 70000;$level10 = 73000;$level11 = 75000;$level12 = 78000;$level13 = 83000;$level14 = 87000;$level15 = 95000;$level16 = 100000; $level = "";

	$connection = mysqli_connect('localhost', 'root', '', 'appraisal');

	$position = $_GET['position'];

	if(isset($_GET['salarychange']) == true){
		$sql = mysqli_query($connection,"SELECT * FROM users WHERE id = '$position'");
		$row = mysqli_fetch_assoc($sql);
		$user = $row['email'];
		$getValue = $_GET['level'];
		if($getValue == 'level1'){
			$salary = $level1;
			$level = "Level 1";
		}elseif ($getValue == 'level2') {
			$salary = $level2;
			$level = "Level 2";
		}elseif ($getValue == 'level3') {
			$salary = $level3;
			$level = "Level 3";
		}elseif ($getValue == 'level4') { 
			$salary = $level4;
			$level = "Level 4";
		}elseif ($getValue == 'level5') {
			$salary = $level5;
			$level = "Level 5";
		}elseif ($getValue == 'level6') {
			$salary = $level6;
			$level = "Level 6";
		}elseif ($getValue == 'level7') {
			$salary = $level7;
			$level = "Level 7";
		}elseif ($getValue == 'level8') {
			$salary = $level8;
			$level = "Level 8";
		}elseif ($getValue == 'level9') {
			$salary = $level9;
			$level = "Level 9";
		}elseif ($getValue == 'level10') {
			$salary = $level10;
			$level = "Level 10";
		}elseif ($getValue == 'level11') {
			$salary = $level11;
			$level = "Level 11";
		}elseif ($getValue == 'level12') {
			$salary = $level12;
			$level = "Level 12";
		}elseif ($getValue == 'level13') {
			$salary = $level13;
			$level = "Level 13";
		}elseif ($getValue == 'level14') {
			$salary = $level14;
			$level = "Level 14";
		}elseif ($getValue == 'level115') {
			$salary = $level15;
			$level = "Level 15";
		}else{
			$salary = $level16;
			$level = "Level 16";
		}
		 if(mysqli_query($connection, "UPDATE `staffdetail` SET `p_post` = '$level', `salary` = '$salary' WHERE `email` = $user'")){

		 	if ($query = mysqli_query($connection, "UPDATE `users` SET `status` = 'promoted' WHERE `users`.`id` = '$position'")){
				
				header("location:mgtpage.php");
				}
		 }
	
	}
 ?>