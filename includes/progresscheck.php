<?php 
	
	function displayInfo($u_email){
			$conn = mysqli_connect('localhost', 'root', '', 'appraisal');
			$query = "SELECT * FROM `users`,`staffdetail` WHERE users.email = '$u_email' AND users.email = staffdetail.u_email";
			$datalookup = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($datalookup);
			if($row['status'] == 'promoted')
				{
				echo '
					<div class="form-group">
									<h1 class="text-center text-danger">Congratulation!!!</h1>
								</div>
						<div class="form-group">
									<h3 class="text-center text-danger">'.$row['fname'].', '.$row['lname'].' '.$row['oname'].'</h3>
								</div>
						<div class="form-group">
							<h5 class="text-center text-danger">You have been promoted to <strong>'.$row['p_post'].'</strong>.</h5>
							<p class="text-center text-danger"> Your current salary <strong> #'.$row['salary'].' </strong> </p>
						</div>

				';
			}elseif ($row['status'] == 'pending') {
				echo '
					<div class="form-group">
									<h1 class="text-center text-danger">Application withheld</h1>
								</div>
						<div class="form-group">
									<h3 class="text-center text-danger">'.$row['fname'].', '.$row['lname'].' '.$row['oname'].'</h3>
								</div>
						<div class="form-group">
							<h5 class="text-center text-danger">Your application was withheld. <br><br>Meet your HOD for more information <br> <br> You are still on <strong>'.$row['p_post'].'</strong>.</h5>
							<p class="text-center text-danger"> Your current salary <strong> #'.$row['salary'].' </strong> </p>
						</div>

				';
			}elseif ($row['status'] == 'waiting' || $row['status'] == 'recommended') {
				echo '
					<div class="form-group">
									<h1 class="text-center text-danger">Your application is on progress</h1>
								</div>
						<div class="form-group">
									<h3 class="text-center text-danger">'.$row['fname'].', '.$row['lname'].' '.$row['oname'].'</h3>
								</div>
						<div class="form-group">
							<h5 class="text-center text-danger">Excersice patience your application is progressing <br> <br> You are still on <strong>'.$row['p_post'].'</strong>.</h5>
							<p class="text-center text-danger"> Your current salary <strong> #'.$row['salary'].' </strong> </p>
						</div>

				';
			}else{
				echo '
					<div class="form-group">
									<h1 class="text-center text-danger">You have not applied for promotion</h1>
								</div>
						<div class="form-group">
									<h3 class="text-center text-danger"style="color:blue;">'.$row['fname'].', '.$row['lname'].' '.$row['oname'].'</h3>
								</div>
						<div class="form-group">
							<h5 class="text-center text-danger">Apply now <a href="staffpage.php" class="btn btn-xs btn-success">here</a> <br> <br> You are still on <strong>'.$row['p_post'].'</strong>.</h5>
							<p class="text-center text-danger"> Your current salary <strong> #'.$row['salary'].' </strong> </p>
						</div>

				';
			}
		}

 ?>