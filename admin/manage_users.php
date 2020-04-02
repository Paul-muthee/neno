<?php include '../includes/header.php'; ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Manage</h3>
				


					<div class="table-responsive bs-example widget-shadow">
						<h4>System Users:</h4>
                        <input type="text" id="myInput" placeholder="Search..." title="Type in  something" class="noPrint" >
<button type="button" class="btn btn-primary btn-flat btn-pri" onclick="window.print()" id="noPrint"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                        <a href="add_user.php"class="btn btn-primary btn-flat btn-pri" id="noPrint"> <i class="fa fa-user"></i> Add User</a>
                        <br>
                        <br>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Name</th> 
									<th>Email</th>
									 <th>Added by</th> 
									 <th>Date</th> 
									
							
									 <th></th> 

								</tr> 

							</thead> 

							<tbody id="myTable">

							<?php
                      $count = 1;
                      $sel_query = "SELECT * FROM admin  ORDER BY id Desc; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?> 							
							 <tr>
							<th scope="row"><?php echo $count; ?></th> 
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["added_by"]; ?></td>
							<td><?php echo $row["date_"]; ?></td>

					
                       
                        
                        <td id="noPrint"><a href="delete_user.php?id=<?php echo $row["id"]; ?>"class="btn btn-flat btn-pri btn-danger"> <i class="fa fa-trash"></i> Delete </a> </td>
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