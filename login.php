<?php 
	require 'includes/functions.php';
	$classObj = new appraise;
	$classObj->connection();
	 if (isset($_COOKIE['user'])){
		header("location: hodpage.php");
	}
?>
<?php 
	//include 'includes/functions.php';
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
	<?php include'includes/navbar.php' ?>
<div class="row content">
	<div class="container-fluid" id="process">
		<div class="col-md-12" id="info">
			<!-- <h1 class="text-center">LOGIN PAGE</h1> -->
			
			<form method="post" class="form-horizontal">
			<div class="col-md-8" id="login_cont">
			<?php //echo $info; ?>
			<h1 class="text-center">LOGIN PAGE</h1>
				<?php $classObj->userLogin(); ?>
				<div class="form-group">
							<div class="col-md-12">
								<input type="email" name="email" class="form-control" value=" <?php //echo $email; ?>" placeholder="Enter email address here " autocomplete="0" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="password" name="password" class="form-control" value="<?php //echo $pass; ?>" placeholder="Enter your password here " autocomplete="0" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-lg btn-danger form-control send" name="login" >Login Now !</button>
							</div>
						</div>
			</div>
			</form>
			<div class="col-md-4">
				<img src="img/signup.jpg" width="100%">
				<h4 class="text-danger text-center">FOLLOW THE <br> THE LINK BELOW</h4>
				<p class="text-danger text-center"> Don't have account click signup to create yours</p>
				<a href="userreg.php" class="btn btn-danger btn-lg form-control send">Signup</a>
			</div>
		</div>
	</div>
<div class="hr"></div>




		<?php include 'includes/footer.php'; ?>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>