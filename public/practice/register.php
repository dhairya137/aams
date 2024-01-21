<?php
	require 'startDB.php';

	$u_name=$_POST['name'];
	$u_contact=$_POST['password'];
	$u_country=$_POST['contact'];
	$u_password=$_POST['country'];
	$qry="INSERT INTO register VALUES('$u_name','$u_contact','$u_country','$u_password')";

	if(mysqli_query($conn,$qry)){
		echo "Insert Success";
	}
	else{
		echo "Insert Failed";
	}


?>