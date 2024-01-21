<?php
	$conn = mysqli_connect("localhost:3307","root","","practice");
	if(!$conn){
		//die("Connection Failed".mysqli_connect_error());
	}
	
	
	$qry = "SELECT * FROM userdetails;";
	$ans = mysqli_query($conn,$qry);


	while(($row=mysqli_fetch_assoc($ans))){
		$data[] = $row;
	}
 	header('Content-Type: application/json');
 	echo json_encode($data);

?>