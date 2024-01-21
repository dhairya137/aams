<?php
	require 'authenticate.php';
	$id= (int)$_POST['id'];
	$qry = "DELETE FROM meeting WHERE meet_id='$id';";
	$ans = mysqli_query($conn,$qry);
	if($ans) echo "Delete Success";
	else echo "Delete Failed".mysqli_error($conn);
?>