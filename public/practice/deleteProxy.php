<?php
	require 'authenticate.php';
	$id= (int)$_POST['id'];
	$qry = "DELETE FROM proxy_lecture WHERE proxy_id='$id';";
	$ans = mysqli_query($conn,$qry);
	if($ans) echo "Delete Success";
	else echo "Delete Failed".mysqli_error($conn);
?>