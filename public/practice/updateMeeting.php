<?php
	require 'authenticate.php';

	$date = $_POST['date'];
	$time = $_POST['time'];
	$topic = $_POST['topic'];
	$room = (int) $_POST['room'];
	$desc = $_POST['desc'];
	$meetid = $_POST['id'];


	/*$date = "19-01-2021";
	$time = "15:52";
	$topic = "hiii";
	$room = 10;
	$desc = "good";
	$id = "12";*/

	$time = date("H:i",strtotime($time));
	$date = strtotime($date); 
	$date =  date('Y-m-d',$date );
	$qry = "UPDATE meeting SET topic_meet='$topic',room_no='$room',date_meet='$date',desc_meet='$desc',time_meet='$time' WHERE meet_id='$meetid';";

	
	if(mysqli_query($conn,$qry)){
		echo "Update Success";
	}
	else{
		echo "Update Failed".mysqli_error($conn);
	}
?>