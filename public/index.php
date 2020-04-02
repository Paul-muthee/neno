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
				<h1>Pastor's Appointment form</h1>
				<div class="registerimg">
					<br>
					<br>
					<br>
					<img src="images/nganga.png" alt="" />
				</div>
				<div class="register-form">
<?php 
$name = $password = $phone = $email = "";
 $date= $category=$gender=$new=$about="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $_SESSION['name'] = $name;
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $category = test_input($_POST["category"]);
  $gender = test_input($_POST["gender"]);
  $date = test_input($_POST["date"]);
  $new = test_input($_POST["selector1"]);
  $about = test_input($_POST["about"]);

}

?>


					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<div class="fields-grid">
							<div class="styled-input">
								<input type="text" name="name" required=""> 
								<label>Name</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="email" name="email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="tel" name="phone" required=""> 
								<label>Phone Number</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<h2>Gender :</h2>
								  <input type="radio" name="gender" value="male" checked> Male
								  <input type="radio" name="gender" value="female"> Female
							</div>
							<div class="styled-input">
								<select id="category1" required="" name="category">
									<option value="">Category*</option>
									<option value="Prayers">Prayers</option>
									<option value="Counsiling">Counsiling</option>
									<option value="Documents">Documents Signing</option>
									<option value="Diagnosis">Diagnosis</option>
									<option value="Others">Others</option>
								</select>
								<span></span>
							</div>

							<div class="styled-input">
							<input class="date" id="datepicker" name="date" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
							</div>	
								<div class="content-wthree2">
									<div class="grid-w3layouts1">
										<div class="w3-agile1">
											<label class="rating">New Member of our Church?<span>*</span></label>
											<ul>
												<li>
													<input type="radio" id="a-option" name="selector1">
													<label for="a-option">Yes </label>
													<div class="check"></div>
												</li>
												<li>
													<input type="radio" id="b-option" name="selector1">
													<label for="b-option">No</label>
													<div class="check"><div class="inside"></div></div>
												</li>
											</ul>
												<div class="clear"></div>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="styled-input">
									<label class="list">If yes,please tell us something about yourself<span></span></label>
									<textarea name="about"></textarea>
									<span></span>
								</div>
								<input type="submit" name="submit" value="Book Appointment">
							<div class="clear"> </div>
						</div>
					</form>
				</div>
			<div class="clear"> </div>
		</div>
		</div>
	<div class="clear"> </div>


	<?php 

if (isset($_POST["name"])) {

    $query = "INSERT INTO appointments (name,email,phone,category, gender,date,membership, about)

    VALUES ('{$name}','{$email}', '{$phone}', '{$category}', '{$gender}','{$date}', '{$new}', '{$about}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
          header("Location: thanks.php");
            
        }else {
        echo ' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                Appointment Booking failed Successfully.<a href="index.php">Try Again</a>
                </div>';
      }
      }
?>    
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