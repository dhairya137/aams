<?php
	require 'authenticate.php';

	$type = $_POST['type'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$topic = $_POST['topic'];
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$sltid = (int)$_POST['id'];


	/*$date = "19-01-2021";
	$time = "15:52";
	$topic = "hiii";
	$room = 10;
	$desc = "good";
	$id = "12";*/

	$time = date("H:i",strtotime($time));
	$date = strtotime($date); 
	$date =  date('Y-m-d',$date );
	$qry = "UPDATE seminar_lecture_test SET type_seminar_lect_test ='$type',
											topic_test_lect ='$topic',
											date_test_lect ='$date',
											desc_lecture ='$desc',
											time_test_lect ='$time',
											lecturer_name = '$name'
											WHERE id = '$sltid';";

	
	if(mysqli_query($conn,$qry)){
		echo "Update Success";
	}
	else{
		echo "Update Failed".mysqli_error($conn);
	}
?>