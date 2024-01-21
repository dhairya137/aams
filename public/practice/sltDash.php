<?php

	require 'authenticate.php';

	//$username= '186230307011';
	//$username= $_GET['username'];
	//$name = $_GET['k'];
	$qry = "SELECT * FROM seminar_lecture_test WHERE date_test_lect >= CURDATE() ORDER BY date_test_lect , time_test_lect DESC;";
	$ans = mysqli_query($conn,$qry);

	while(($row=mysqli_fetch_assoc($ans))){
		$data[] = $row;
 	}
 	header('Content-Type: application/json');
 	echo json_encode($data);


?>
