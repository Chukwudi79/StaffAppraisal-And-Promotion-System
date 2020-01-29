<?php 
	require 'includes/functions.php';
	require 'includes/progresscheck.php';
	include 'accounts/check.php';
	$classObj = new appraise;
	$classObj->connection();
	$val = $_COOKIE['user'];
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
						<h1 class="text-center">Notification of Promotion</h1>
						<h5 class="text-center"><small class="text-danger ">For update on promotion application... </small></h5>
					</div>
					<div class="panel-body" id="prev">
						<div class="row" id="target">
							<div class="col-md-12">
								<!-- checking status function called here -->
								<?php displayInfo($val); ?>
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