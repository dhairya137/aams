<?php

	require 'authenticate.php';

	$qry = "SELECT * FROM student ORDER BY enrollment;";
	$ans = mysqli_query($conn,$qry);

	while(($row=mysqli_fetch_assoc($ans))){
		$data[] = $row;
 	}
 	header('Content-Type: application/json');
 	echo json_encode($data);


?>
