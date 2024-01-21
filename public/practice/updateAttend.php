<?php
	require 'authenticate.php';

	$ids =$_POST['ids'];
	$attend = $_POST['attend'];

	
	$id = str_replace( array('[', '"', ']', ' '), ' ', $ids);
	$ids = explode(",", $id);

	$att = str_replace( array('[', '"', ']', ' '), ' ', $attend);
	$attends = explode(",", $att);


	for ($i=0; $i < count($ids); $i++) { 
		$mainid = (double)$ids[$i];
		$attend_val = (int)$attends[$i];

		$qry = "UPDATE attendance SET attend = '$attend_val' WHERE attend_id='$mainid';";
 		//s$run= ; 
 		 if (mysqli_query($conn, $qry)) echo "Success";
		else  echo "Error".mysqli_error($conn);
	}

	
  
?>