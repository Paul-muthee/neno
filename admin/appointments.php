<?php include '../includes/header.php'; ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Manage</h3>
				


					<div class="table-responsive bs-example widget-shadow">
						<h4>Appointments:</h4>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Name</th> 
									<th>Email</th>
									 <th>Phone</th> 
									 <th>Gender</th> 
									 <th>Category</th> 
									 <th>Date</th> 
									 <th>Membership</th> 
									 <th>About</th>
									 <th>Seen</th>
									 <th></th> 
									 <th></th> 

								</tr> 

							</thead> 

							<tbody>

							<?php
                      $count = 1;
                      $sel_query = "SELECT * FROM appointments  ORDER BY id Desc; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?> 							
							 <tr>
							<th scope="row"><?php echo $count; ?></th> 
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["phone"]; ?></td>
							<td><?php echo $row["gender"]; ?></td>
							<td><?php echo $row["category"]; ?></td>
							<td><?php echo $row["date"]; ?></td>
							<td><?php echo $row["membership"]; ?></td>
							<td><?php echo $row["about"]; ?></td>
							<td><?php echo $row["done"]; ?></td>
					
                       
                        <td id="noPrint"><a href="complete.php?id=<?php echo $row["id"]; ?>"class="btn btn-flat btn-pri btn-primary"> <i class="fa fa-pencil"></i> Complete</a> </td>
                        <td id="noPrint"><a href="delete_appointment.php?id=<?php echo $row["id"]; ?>"class="btn btn-flat btn-pri btn-danger"> <i class="fa fa-trash"></i> Delete </a> </td>
        </tr>
        <?php $count++;
                    } ?> 
						</tbody> 
					</table> 
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