<?php ob_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Neno</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Appointment Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- css files -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<!-- //css files -->
</head>
<!-- body starts -->
<body>
<!-- section -->
<section class="register">
	<div class="register-full">
		<div class="register-right">
			<div class="register-in">
				<h1> Thanks <?php echo $_SESSION['name']; ?> for booking an appointment with the man of God..we will get back to you ASAP be blessed</h1>
				<div class="registerimg">
			
				</div>
				<div class="register-form">
			
				</div>
			<div class="clear"> </div>
		</div>
		</div>
	<div class="clear"> </div>
</div>
	<!-- copyright -->
	<p class="agile-copyright">© 2020 Neno Evangelism Center. All Rights Reserved</p>
	<!-- //copyright -->
</section>
<!-- //section -->

<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->

</body>	
<!-- //body ends -->
</html>