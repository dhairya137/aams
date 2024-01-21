<?php

	require 'authenticate.php';

	
	$qry = "SELECT * FROM timetable;";
	$ans = mysqli_query($conn,$qry);

	while(($row=mysqli_fetch_assoc($ans))){
		$data[]=$row;
 	}
 	echo json_encode($data);


?>
