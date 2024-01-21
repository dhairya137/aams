<?php

	require 'authenticate.php';

	$qry = "SELECT * FROM student;";
	$ans = mysqli_query($conn,$qry);

	while($row=mysqli_fetch_array($ans)){
		$data[] = $row;
 	}
 	echo "json_encode($data)";


?>