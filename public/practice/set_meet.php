<?php
	require 'authenticate.php';
	 
	/*$date = "19-01-2021";
	$time = "15:52";
	$topic = "hiii";
	$room = 10;
	$desc = "good";
	$fac_id = "1111";*/
	 

	$date = $_POST['date'];
	$time = $_POST['time'];
	$topic = $_POST['topic'];
	$room = (int) $_POST['room'];
	$desc = $_POST['desc'];
	$fac_id = $_POST['id'];
	 
	$time = date("H:i",strtotime($time));
	 

	$qry = "INSERT INTO `meeting`(`faculty_id`, `topic_meet`, `room_no`, `date_meet`, `desc_meet`, `time_meet`) VALUES('$fac_id','$topic','$room',STR_TO_DATE('$date', '%d-%m-%Y'),'$desc','$time');";
	
	if(mysqli_query($conn,$qry)){
	    echo "Insert Success";
	}
	else{
	    echo "Insert Failed".mysqli_error($conn);
	}
?>