<?php
	require 'authenticate.php';
	

	$password = $_POST['password'];
	$username = $_POST['username'];

	if(strlen($username)!= 12){
		$qry = "UPDATE student SET std_pwd='$password' WHERE enrollment='$username';";	
	}
	else{
		$qry = "UPDATE faculty SET faculty_pwd='$password' WHERE faculty_id='$username';";
	}

	if(mysqli_query($conn,$qry)){
		echo "Update Success";
	}
	else{
		echo "Update Failed".mysqli_error($conn);
	}
?>