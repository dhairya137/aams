<?php
	require 'authenticate.php';

	$id = $_POST['id'];
	$status = $_POST['status'];
	$qry = "UPDATE stdleave SET status='$status' WHERE leave_id='$id';";
	if(mysqli_query($conn,$qry)){
		echo "Update Success";
	}
	else{
		echo "Update Failed";
	}
	
?>