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
						<h1 class="text-center">Progress update of three stages</h1>
						<h5 class="text-center"><small class="text-danger ">Track update on promotion application... </small></h5>
					</div>
					<div class="panel-body" id="prev">
						<div class="row" id="target">
							<div class="col-md-12">
							<div class="row">
										<div class="col-md-4 text-center"><span class="text-danger"><small>Waiting for HOD</small></span></div>
										<div class="col-md-4 text-center"><span class="text-danger"><small>Waiting for Committee personel</small></span></div>
										<div class="col-md-4 text-center"><span class="text-danger"><small>Completed</small></span></div>
									</div>
								<div class="progress">
								  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
								    <span class="sr-only">80% Complete (danger)</span>
								  </div>
								</div> 
						<div class="form-group">
									<h3 class="text-center text-danger">Mr. Emenike, Frank Ogbuewu</h3>
								</div>
						<div class="form-group">
									<h5 class="text-center text-danger">Your application is still in progress.</h5>
									<p class="text-center text-danger"> Check back in two weeks time. </strong> </p>
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