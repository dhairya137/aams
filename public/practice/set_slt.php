<?php
require 'authenticate.php';



/*$type = "Test";
$date = "12-2-2020";
$time = "15:52";
$topic = "abcd";
$lec_name = "qwerty";
$desc = "alphabet";
$fac_id = "1112";
$time = date("H:i",strtotime($time));*/

$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['time'];
$topic = $_POST['topic'];
$lec_name = $_POST['lect'];
$desc = $_POST['desc'];
$fac_id = (int)$_POST['id'];
$time = date("H:i",strtotime($time));


$qry = "INSERT INTO seminar_lecture_test(	`type_seminar_lect_test`,
											`date_test_lect`,
											`topic_test_lect`,
											`lecturer_name`,
											`faculty_id`,
											`time_test_lect`,
											`desc_lecture`) 

											VALUES(	'$type',
													STR_TO_DATE('$date', '%d-%m-%Y'),
													'$topic',
													'$lec_name',
													'$fac_id',
													'$time',
													'$desc'
													);";
if(mysqli_query($conn,$qry)){
	echo "Insert Success";
}
else{
	echo "Insert Failed".mysqli_error($conn);
}
?>