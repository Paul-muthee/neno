<?php include '../includes/header.php'; ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Users</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add User Details :</h4>
						</div>
						<div class="form-body">
<?php 
		$name = $password = $admin = $email = "";
		$date= "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$password = test_input($_POST["password"]);
		$email = test_input($_POST["email"]);
		$date = date("Y-m-d");
		$admin = $_SESSION['email'];
		}

?>
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
							<div class="form-group"> 
									<label for="exampleInputEmail1">Username</label> 
									<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Username">
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Email address</label> 
									<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
								</div>

								 <div class="form-group"> <label for="exampleInputPassword1">Password</label> 
								 	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div> 

							 
								 <button type="submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>


	
								</form>
							</div>
							<?php 

if (isset($_POST["name"])) {

    $query = "INSERT INTO admin (name,email,password,date_,added_by)
    VALUES ('{$name}','{$email}', '{".md5($password)."}', '{$date}', '{$admin}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
          header("Location: manage_users.php");
            
        }else {
        echo ' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                User addition failed.<a href="add_user.php">Try Again</a>
                </div>';
      }
      }
?>  
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2020 Neno Admin Panel. All Rights Reserved</p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>