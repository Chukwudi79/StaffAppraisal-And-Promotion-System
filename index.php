<!DOCTYPE html>
<html>
<head>
	<title>Staff Appraisal System</title>
	<link rel="stylesheet" type="text/css" href="css/startup.css">
	<link rel="stylesheet" type="text/css" href="css/vegas.css">
	<link rel="shortcut icon" type="image/png" href="img/logo1.png">
</head>
<body>
	<section id="slider">
		<div class="header" style="background: rgba(162,44,17,0.9);">
			<div class="container">
				<div class="logo"><a href="index.php"><img src="img/logo1.png" alt="startup Logo"></a></div>
				<nav>
					<ul>
						<li><a href="login.php">Log In</a></li>
						<li><a href="userreg.php">Sign Up</a></li>
					</ul>
				</nav>
			</div>
			</div>
			<div class="" style="text-shadow: 0px 4px 2px #f5f5f5,3px 4px 2px #f5f5f5,3px 4px 2px #000; color: #9F3216"><p><marquee> AN AUTOMATED CIVIL SERVICE APPRAISAL AND PROMOTION SYSTEM. (A CASE STUDY OF DEPARTMENT OF COMPUTER SCIENCE, AKANU IBIAM FEDERAL POLYTECHNIC, UNWANA, EBONYI STATE).</marquee></p></div>
		<div class="slider-text">
			<div id="caption">
				<h2 style="text-shadow: 0px 4px 4px rgba(162,44,17,1), 2px 4px 4px rgba(162,44,17,1), 5px 4px 4px rgba(162,44,17,1);">AKANU IBAIM FEDRAL POLYTECHNIC</h2>
				<p style="text-shadow: 0px 4px 4px rgba(162,44,17,1), 2px 4px 4px rgba(162,44,17,1), 5px 4px 4px rgba(162,44,17,1);">Appraisal solution</p>
				<p style="color: #9F3216;"><a href="login.php" style="border-radius: 3px; border: 3px solid #9F3216; padding: 2px; cursor: pointer; background-color: #7a7a7a; color: #fff; text-decoration: none;">Login</a> or <a href="userreg.php" style="border-radius: 3px; border: 3px solid #9F3216; padding: 2px; color: #fff; background-color: #7a7a7a; cursor: pointer; text-decoration: none;">signup</a>  to start enjoying this app</p>
			</div>
			<aside id="designinfo">
				<h3>SOFTWARE DESIGNED</h3>
				<h3>BY</h3>
				<h3>ARAH PIUS BLESSING</h3>
				<h3>SUPERVISED BY </h3>
				<h3>MR. ESIAGU U. E.</h3>
				<h3>&amp</h3>
				<h3>VERIFIED BY</h3>
				<h3>MISS OKPOMECHILE EMILIA</h3>
			</aside>>
		</div>
	</section>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/vegas.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		
		$(function(){
			$('#slider').vegas({
				slides: [
					{src: 'img/one.jpg'},
					{src: 'img/two1.jpg'},
					{src: 'img/three.jpg'},
					{src: 'img/four.jpg'},
					{src: 'img/five.jpg'}
				]
			});
			
		});
	</script>

</body>
</html>