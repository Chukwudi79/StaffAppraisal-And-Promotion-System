<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="well" style="padding: 0; margin: 0;">
	<?php include 'includes/header.php' ?>
<div class="row content">
	<div class="container-fluid" id="process">
		<div class="col-md-12" id="info">
			<!-- <h1 class="text-center">LOGIN PAGE</h1> -->
			<div class="col-md-10 col-md-offset-1">
				<div class="panel  panel-danger" style="padding: 10px;">
						<?php //echo $info; ?>
					<div class="panel-heading">
						<h1 class="text-center">About this work</h1>
						<h5 class="text-center"><small class="text-danger ">A brify information about this work... </small></h5>
					</div>
					<div class="panel-body" id="prev">
					<div class="row" id="target">
						<div class="col-md-12">
							<div class="row">
								<p class="text-danger text-justify">The Software; CIVIL SERVICE PROMOTION APPRAISAL SYSTEM is a special system designed to keep records of staff/employers in AKANU IBIAM FEDERAL POLYTECHNIC UNWANA. This system enables the promotion of the civil servants world wide provided you have the access key and is connect to the internet. Above all the system enables staff check their promotion status online using their assigned keys. 
											<blockquote class="text-danger ">About the Author</blockquote>
								</p><p class="text-danger text-justify">The author/Designer of this software is ARAH PIUS BLESSING a student of Akanu Ibiam Federal Polytechnic Unwana. 
	 							</p>
						
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