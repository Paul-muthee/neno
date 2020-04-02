<?php 
//to confirm db queries
function confirm_query($results_set){

  if (!$results_set) {
    global $con;
    die("failled to query the database ".mysqli_error($con));
  }  
} 

//escape the string
function mysqli_prep($string)
{
  global $con;
  $escaped_string=mysqli_real_escape_string($con,$string);
  return $escaped_string;
}

//for redirecting to different pages
function redirect_to($new_location)
{
	header("Location: $new_location");
	exit;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}

function generate_num($mn,$mx){
  $num = mt_rand($mn,$mx);
  return $num;
}
?>
 