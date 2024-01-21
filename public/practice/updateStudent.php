<?php
	require 'authenticate.php';
	

	$enrollment = $_POST['enrollment'];
	$username = $_POST['name'];
	$password = $_POST['password'];
	$contact = (Double)$_POST['contact'];
	$email = $_POST['email'];
	$flag= (int)$_POST['flag'];
	$image = $_POST['profileImage'];



	if ($flag==1) {
		$filename = time().".jpg";
		file_put_contents("".$filename,base64_decode($image));
		$qry = "UPDATE student SET std_name='$username',std_pwd='$password',contact_std='$contact',email_std='$email',std_profile='$filename' WHERE enrollment='$enrollment';";

	} else {
		$qry = "UPDATE student SET std_name='$username',std_pwd='$password',contact_std='$contact',email_std='$email' WHERE enrollment='$enrollment';";
	}
	
 	
	
	if(mysqli_query($conn,$qry)){
		echo "Update Success";
	}
	else{
		echo "Update Failed".mysqli_error($conn);
	}
	
?>