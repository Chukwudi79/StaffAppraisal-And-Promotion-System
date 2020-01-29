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
	<?php include 'includes/header1.php'; ?>
<div class="row content">
	<div class="container-fluid" id="process">
		<div class="col-md-12" id="info">
			<?php include 'includes/header2.php' ?>
			<!-- <h1 class="text-center">LOGIN PAGE</h1> -->
			<?php include 'includes/appraisalform.php'; ?>
		</div>
	</div>
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