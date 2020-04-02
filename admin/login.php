<?php ob_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Neno </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">SignIn Page</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Welcome back to Neno Admin Panel </h4>
					</div>
					<div class="login-body">
					<?php
// If form submitted, insert values into the database.
    if (isset($_POST['email'])) {
        // removes backslashes
		$email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
		$email = mysqli_real_escape_string($con, $email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);
		//Checking  is user existing in the database or not

    	$query = "SELECT * FROM `admin` WHERE email='$email'
		and password='{" . md5($password) . "}'";
		
      	$result = mysqli_query($con, $query);
      	confirm_query($result);
		  $rows = mysqli_num_rows($result);
		  
      	if ($rows == 1) {
        	$_SESSION['email'] = $email;
            // Redirect user to dashboard.php
        	header("Location: index.php");
      } else {
        echo "
			<h3>username/password is incorrect.</h3>
			<br/>Click here to <a href='login.php'>Try Again</a>";
			}
    } else {
      ?>  					
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							<input type="text" class="user" name="email" placeholder="Enter your email" required="">
							<input type="password" name="password" class="lock" placeholder="password">
							<input type="submit" name="Sign In" value="Sign In">
						
						</form>
						<?php } ?>
					</div>
				</div>
		
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2020 Neno. All Rights Reserved </p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>