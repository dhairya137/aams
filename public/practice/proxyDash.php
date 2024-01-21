<?php

	require 'authenticate.php';

	//$enrollment = $_POST['id']; 
	//$enrollment = "186230307001"; 

	$qry = "SELECT * FROM proxy_lecture WHERE date_proxy >= CURDATE()";
	$ans = mysqli_query($conn,$qry);

	
	while(($row=mysqli_fetch_assoc($ans))){
		$data[]=$row;
 	}
 	echo json_encode($data);
?>