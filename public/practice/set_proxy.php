<?php
require 'authenticate.php';

/*$from_faculty = (int) 1111;
$to_faculty = "Faculty 1";
$date_proxy = "12-02-2020";
$temp_from_time = "14:52";
$temp_to_time = "15:52";
$room = "221 A";
$desc_proxy = "Test 1";*/

$from_faculty = (int) $_POST['from_faculty'];
$to_faculty = $_POST['to_faculty'];
$date_proxy = $_POST['date_proxy'];
$temp_from_time = $_POST['from_time'];
$temp_to_time = $_POST['to_time'];
$room = $_POST['room'];
$desc_proxy = $_POST['desc_proxy'];

$from_time = date("H:i",strtotime($temp_from_time));
$to_time = date("H:i",strtotime($temp_to_time));


$qry = "INSERT INTO proxy_lecture (from_faculty,
									to_faculty,
									date_proxy,
									from_time,
									to_time,
									room_no,
									desc_proxy) 
							VALUES ('$from_faculty',
									'$to_faculty', 
									STR_TO_DATE('$date_proxy', '%d-%m-%Y'),
									'$from_time', 
									'$to_time', 
									'$room',
									'$desc_proxy');";

	if(mysqli_query($conn,$qry)){
	    echo "Insert Success";
	}
	else{
	    echo "Cannot Arrange Proxy";
	}
?>