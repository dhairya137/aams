<?php
	$conn = mysqli_connect("127.0.0.1:3306","root","password","attendance_and_academia");
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