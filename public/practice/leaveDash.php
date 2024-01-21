<?php

	require 'authenticate.php';

	//$enrollment = $_POST['id']; 
	//$enrollment = "186230307001"; 

	$qry = "SELECT * FROM stdleave order by leave_id DESC";
	$ans = mysqli_query($conn,$qry);

	
	while(($row=mysqli_fetch_assoc($ans))){
		$data[]=$row;
 	}
 	echo json_encode($data);


?>
