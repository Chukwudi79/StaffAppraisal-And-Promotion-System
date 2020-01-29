<?php 
	require 'includes/functions.php';
	include 'accounts/check.php';
	$classObj = new appraise;
	$classObj->connection();
	
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
	<?php include 'includes/header1.php' ?>
<div class="row content">
	<div class="container-fluid" id="process">
		<div class="col-md-12" id="info">
			<?php include 'includes/header2.php' ?>
			<!-- <h1 class="text-center">LOGIN PAGE</h1> -->
			<div class="col-md-10">
				<div class="panel  panel-danger" style="padding: 10px;">
						<?php //echo $info; ?>
					<div class="panel-heading">
						<h1 class="text-center">My Profile</h1>
						<h5 class="text-center"><small class="text-danger ">Welcome to your awesome profile... </small></h5>
					</div>
					<div class="panel-body" id="prev">
						<div class="row" id="target">
							<div class="col-md-12">
								<div class="col-md-4">
									<div class="panel panel-default">
										<div class="panel-body" style="padding: 0px;">
											<img src="img/avatar.jpg" style="width: 100%; height: 200px; margin-top: 0px;">
										</div>
										<div class="panel-footer">
											<h1 class="text-center text-danger">Mr. Emenike, Frank Ogbuewu</h1>
										</div>
									</div>
								</div>
						<div class="col-md-8">
							<fieldset>
								<legend class="text-danger">Personal Info</legend>
								<div class="col-md-12">
									<p class="text-danger"><div class="col-md-4"><label for="dept" class="label label-danger pull-right">Departmert :</label></div> <span class="text-danger"> Computer Science</span></p>
									<p class="text-danger"><div class="col-md-4"><label for="school" class="label label-danger pull-right">School of :</label></div> <span class="text-danger">  Science</span></p>
									<p class="text-danger"><div class="col-md-4"><label for="c_post" class="label label-danger pull-right">Current Post :</label></div> <span class="text-danger">  Lecturer</span></p>
									<p class="text-danger"><div class="col-md-4"><label for="salary" class="label label-danger pull-right">Current Salary :</label></div> <span class="text-danger">  #120,000</span></p>
								</div>
									<hr style="border: 2px solid #8C3e44">
									<h4 class="text-danger text-center">Promotion status</h4>
									<p class="text-danger text-center"> waiting for committee</p>
							</fieldset>
						</div>
				</div>
			</div>
		</div>
	</div></div></div></div>
<div class="hr"></div>



		<?php include 'includes/footer.php' ?>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('.next').click(function(){
			$('#target').addClass(' hidden');
			$('#next').removeClass(' hidden');
		});

		$('.prev').click(function(){
			$('#next').addClass(' hidden');
			$('#target').removeClass(' hidden');

		});
	})
</script>
</body>
</html>