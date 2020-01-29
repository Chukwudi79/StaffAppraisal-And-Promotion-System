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
			<!-- <h1 class="text-center">LOGIN PAGE</h1> -->
			<div class="col-md-10 col-md-offset-1">
				<div class="panel  panel-danger" style="padding: 10px;">
						<?php //echo $info; ?>
					<div class="panel-heading">
						<h1 class="text-center">All Staffs Awaiting Promotion</h1>
						<h5 class="text-center"><small class="text-danger ">Awaitnig staffs for verification and HOD's recommendation... </small></h5>
					</div>
					<div class="panel-body" id="prev">
					<div class="row" id="target">
						<div class="col-md-12">
							<div class="row" id="responsive">
								<table class="table">
									<thead>
										<td class="text-danger">S/N</td>
										<td class="text-danger">Lastname</td>
										<td class="text-danger">Firstname</td>
										<td class="text-danger">Othername</td>
										<td class="text-danger">Gender</td>
										<td class="text-danger">Email</td>
										<td class="text-danger">View</td>
										<td class="text-danger">Recommed</td>
										<td class="text-danger">Pending</td>
									</thead>
									<?php $classObj->hodView(); ?>
								</table>
						
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