<?php 
session_start(); 
include '../includes/functions.php';
include '../includes/db_connection.php';
$_id=$_REQUEST["id"];



$query="UPDATE appointments SET done=1 where id='{$_id}' ";
$result = mysqli_query($con,$query);
confirm_query($result);

if ($result) {
    redirect_to("appointments.php");
    
} else {
	echo "failed to update status";
}


 ?>