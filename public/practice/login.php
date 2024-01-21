<?php
	require 'authenticate.php';


	$username = $_POST['id'];
	$password = $_POST['password'];
	/*$username = '186230307004';
	$password = '123';*/
	
	/*$password = password_hash($r, PASSWORD_BCRYPT);
	echo $password;*/
	$length = 0;
	$flag=0;

	if(($length =  strlen($username))!=12){
		$qry = "SELECT * FROM faculty WHERE faculty_id like '$username';";
		$flag = 1;
	}
	else{
		$qry = "SELECT * FROM student WHERE enrollment like '$username';";
		$flag =2;
	}
	$ans = mysqli_query($conn,$qry);
	
	
	foreach ($ans as $value){
		if($flag == 1){
			$ch = password_verify($password, $value['faculty_pwd']);
		}else{
			$ch = password_verify($password, $value['std_pwd']);
		}
	}
	
	//var_dump($ans);
	
	
	if((mysqli_num_rows($ans))>0){
		
		if($ch){
			echo "Login Success";
		}else{
			echo "User not Found ";
		}
		
	}
	else{
		echo "User not Found ";
	}
?>
