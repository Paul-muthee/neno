<?php include '../includes/header.php'; ?>
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Unique</h5>
							<h4>Visitors</h4>
						</div>
						<div class="stats-right">
							<label> 
							 <?php 
								$query="SELECT COUNT(DISTINCT email) AS total 
								FROM appointments";

								$results=mysqli_query($con,$query);
								confirm_query($results);
								$data=mysqli_fetch_assoc($results);
								echo $data['total'];
								?> </label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>Compelete</h5>
							<h4>Appointments</h4>
						</div>
						<div class="stats-right">
							<label> 			<?php 
										$query="SELECT count(*) as total from appointments WHERE done=1";
										$result=mysqli_query($con,$query);
										confirm_query($result);
										$data=mysqli_fetch_assoc($result);
										echo $data['total'];
										?>
										</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Users</h4>
						</div>
						<div class="stats-right">
							<label>		<?php 
										$query="SELECT count(*) as total from admin";
										$result=mysqli_query($con,$query);
										confirm_query($result);
										$data=mysqli_fetch_assoc($result);
										echo $data['total'];
										?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>

				<div class="row">
					<div class="col-md-4 stats-info widget">
						<div class="stats-title">
							<h4 class="title">Browser Stats</h4>
						</div>
						<div class="stats-body">
							<ul class="list-unstyled">
								<li>GoogleChrome <span class="pull-right">85%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar green" style="width:85%;"></div> 
									</div>
								</li>
								<li>Firefox <span class="pull-right">35%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar yellow" style="width:35%;"></div>
									</div>
								</li>
								<li>Internet Explorer <span class="pull-right">78%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar red" style="width:78%;"></div>
									</div>
								</li>
								<li>Safari <span class="pull-right">50%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar blue" style="width:50%;"></div>
									</div>
								</li>
								<li>Opera <span class="pull-right">80%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar light-blue" style="width:80%;"></div>
									</div>
								</li>
								<li class="last">Others <span class="pull-right">60%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar orange" style="width:60%;"></div>
									</div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-8 stats-info stats-last widget-shadow">
						<table class="table stats-table ">
							<thead>
								<tr>
									<th>S.NO</th>
									<th>Name</th>
									<th>Seen</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
							<?php
                      $count = 1;
                      $sel_query = "SELECT * FROM appointments  ORDER BY id Desc LIMIT 6; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?>
								<tr>
									<th scope="row"><?php echo $count; ?></th>
									<td><?php echo $row["name"]; ?></td>
									<td><span class="label label-success"><?php echo $row["done"]; ?></span></td>
									<td><h5><?php echo $row["date"]; ?> <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<?php $count++;
                    } ?> 

							</tbody>
						</table>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="row">

	
					<div class="clearfix"> </div>
				</div>
				<div class="row calender widget-shadow">
					<h4 class="title">Calender</h4>
					<div class="cal1">
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2020 Neno. All Rights Reserved</p>
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