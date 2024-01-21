<?php
	require 'authenticate.php';

	  /*$date = "19-01-2021";
		$time = "15:52";
		$topic = "hiii";
		$room = 10;
		$desc = "good";
		$id = "12";*/

	$id = $_POST['id'];
	$to_faculty = $_POST['to_faculty'];
	$date = $_POST['date_proxy'];
	$temp_from_time = $_POST['from_time'];
	$temp_to_time = $_POST['to_time'];
	$room = $_POST['room'];
	$desc_proxy = $_POST['desc_proxy'];

	$from_time = date("H:i",strtotime($temp_from_time));
	$to_time = date("H:i",strtotime($temp_to_time));

	$date = strtotime($date); 
	$date =  date('Y-m-d',$date );
	$qry = "UPDATE proxy_lecture SET 	to_faculty='$to_faculty',
										date_proxy='$date',
										from_time='$from_time',
										to_time='$to_time',
										room_no='$room',
										desc_proxy='$desc_proxy' 

										WHERE 
										proxy_id='$id';";

	
	if(mysqli_query($conn,$qry)){
		echo "Update Success";
	}
	else{
		echo "Update Failed".mysqli_error($conn);
	}
?>