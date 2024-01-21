<?php
	require 'authenticate.php';

	$enrollment =$_POST['enrollment'];
	$attend = $_POST['attend'];
	$batch = $_POST['batch_attend'];
	$faculty_name = $_POST['faculty_name'];
	$subject_name = $_POST['subject_name'];
	$type_lect = $_POST['type_lect'];
	$date = $_POST['date'];
	$div = $batch[0];

	/*echo $batch." ".$div;*/
	$len = strlen($batch);

	if ($type_lect == "Lab") {
		$type = 1;
	} else {
		$type = 0;
	}
	
	$enroll = str_replace( array('[', '"', ']', ' '), ' ', $enrollment);
	$enrollment = explode(",", $enroll);

	$att = str_replace( array('[', '"', ']', ' '), ' ', $attend);
	$attends = explode(",", $att);


	for ($i=0; $i < count($enrollment); $i++) { 
		$enrollment_no = (double)$enrollment[$i];
		$attend_val = (int)$attends[$i];

		if ($type_lect == "Lab") {	
			$qry = "INSERT INTO `attendance`(`enrollment`, `attend`, `div_attend`, `batch_attend`, `faculty_name`, `subject_name`, `type_lect`, `date_attend`) 
								VALUES (
									'$enrollment_no','$attend_val',
									'$div',
									'$batch',
									'$faculty_name',
									'$subject_name',
									'$type',
									STR_TO_DATE('$date', '%d-%m-%Y'));";
		} else {
			$qry = "INSERT INTO `attendance`(`enrollment`, `attend`, `div_attend`,`faculty_name`, `subject_name`, `type_lect`,`date_attend`) VALUES ('$enrollment_no','$attend_val',
									'$div',
									'$faculty_name',
									'$subject_name',
									'$type',
									STR_TO_DATE('$date', '%d-%m-%Y'));";
		}
		
 		$run= mysqli_query($conn, $qry); 
	}

	//header('Content-Type: application/json');
    if ($run) echo "Success";
	else  echo "Error".mysqli_error($conn);
?>