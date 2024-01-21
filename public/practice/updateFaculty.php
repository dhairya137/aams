<?php
	require 'authenticate.php';
	
/*
	$fac_id = "1111";
	$username = "Faculty 1";
	$password = "123";
	$contact = 1236547890;
	$email = "faculty69";*/
	$fac_id = $_POST['fac_id'];
	$username = $_POST['name'];
	$contact = (Double)$_POST['contact'];
	$email = $_POST['email'];
	$image = $_POST['profileImage'];
	$flag = (int)$_POST['flag'];

	if ($flag==1) {
		$filename = time().".jpg";
		file_put_contents("".$filename,base64_decode($image));
		$qry = "UPDATE faculty SET faculty_name='$username',contact_faculty='$contact',email_faculty='$email', faculty_profile='$filename' WHERE faculty_id='$fac_id';";

		$qu = "SELECT faculty_name from faculty WHERE faculty_id='$fac_id';";

		$result = mysqli_query($conn,$qu);
		$re	= mysqli_fetch_assoc($result);
		$id =$re['faculty_name'];
		
		$res = "UPDATE attendance SET faculty_name='$username' WHERE faculty_name='$id'";
		$res = mysqli_query($conn,$res);
		$res = "UPDATE timetable SET faculty_name='$username' WHERE faculty_name='$id'";
		$res = mysqli_query($conn,$res);
		$res = "UPDATE timetable SET lfaculty_name='$username' WHERE faculty_name='$id'";
		$res = mysqli_query($conn,$res);
		

	} else {
		$qry = "UPDATE faculty SET faculty_name='$username',contact_faculty='$contact',email_faculty='$email' WHERE faculty_id='$fac_id';";

		$qu = "SELECT faculty_name from faculty WHERE faculty_id='$fac_id';";

		$result = mysqli_query($conn,$qu);
		$re	= mysqli_fetch_assoc($result);
		$id =$re['faculty_name'];
		
		$res = "UPDATE attendance SET faculty_name='$username' WHERE faculty_name='$id'";
		$res = mysqli_query($conn,$res);
		$res = "UPDATE timetable SET faculty_name='$username' WHERE faculty_name='$id'";
		$res = mysqli_query($conn,$res);
		$res = "UPDATE stdleave SET leave_faculty='$username' WHERE leave_faculty='$id'";
		$res = mysqli_query($conn,$res);

	}
	
	

	
	if(mysqli_query($conn,$qry)){
		echo "Update Success";
	}
	else{
		echo "Update Failed".mysqli_error($conn);
	}
	
?>