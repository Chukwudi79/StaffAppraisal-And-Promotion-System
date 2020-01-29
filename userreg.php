<?php 
	 include 'includes/functions.php';
	$useMe = new appraise;
	$useMe->connection();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="well" style="padding: 0; margin: 0;">
	<?php include 'includes/navbar.php' ?>
<div class="row content">
	<div class="container-fluid" id="process">
		<div class="col-md-12" id="info">
			<!-- <h1 class="text-center">LOGIN PAGE</h1> -->
			
			<form method="post" class="form-horizontal">
			<div class="col-md-6 col-md-offset-3" id="login_cont" style="border-left: 4px solid #8C2318; border-radius: 3px">
				<div class="panel  panel-danger" style="padding: 10px;">
						<?php //echo $info; ?>
					<?php  $useMe->userReg();?>
					<div class="panel-heading" style="background-image: url(img/signup.jpg); background-position: center; padding: 3%;">
						<h1 class="text-center" style="text-shadow: 3px 2px #8C2318,3px 2px #8C2318; color: #fff;">Register Here</h1>
					</div>
					<div class="panel-body" >
					<div class="form-group">
								<select class="form-control opts" name="role">
									<option value="staff">Staff</option>
									<option value="hod">HOD</option>
									<option value="mgt">Management</option>
								</select>
						</div>
						<div class="form-group">
								<input type="text" name="fname" class="form-control opts" value="<?php //echo $f_name; ?>" placeholder="Enter firstname here" autocomplete="0" required>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="lname" class="form-control opts" value="<?php //echo $l_name; ?>" placeholder="Enter lastname here " autocomplete="0" required>
								</div>
								<div class="col-md-6">
									<input type="text" name="othname" class="form-control opts" value="<?php //echo $l_name; ?>" placeholder="Enter othername here " autocomplete="0" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<select class="form-control opts" name="gender">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-control opts" name="dept">
										<option value="cs">Computer Sci</option>
										<option value="ms">Maths and Statistics</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
								<input type="email" name="email" class="form-control" value=" <?php //echo $email; ?>" placeholder="Enter email address here " autocomplete="0" required>
						</div>
						<div class="row">
							<div class="form-group">
							<div class="col-md-6">
									<input type="password" name="password" class="form-control" value="<?php //echo $pass; ?>" placeholder="Enter your password here " autocomplete="0" required>
							</div>
							<div class="col-md-6">
									<input type="password" name="conf_pass" class="form-control" value="<?php //echo $pass; ?>" placeholder="Enter your password here " autocomplete="0" required>
							</div>
							</div>
						</div>
						<div class="form-group">
								<input type="phone" name="phone" class="form-control" value="<?php //echo $pass; ?>" placeholder="Enter your phone number here " autocomplete="0" required>
						</div>
						<div class="footer">
							<div class="form-group">
								<button class="btn btn-lg btn-danger form-control send" name="signup">Signup</button>
							</div>
							<div class="form-group">
								<p class="text-center"> <i>Already have an account ?</i> <a href="login.php" class="btn btn-success btn-xs">Login</a></p>
							</div>
						</div>
					</div> <!-- end of panel-body -->	
				</div>
			</div>
			</form>
		</div>
	</div>
<div class="hr"></div>




		<?php include 'includes/footer.php' ?>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>