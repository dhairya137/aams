<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.use{	
		background: Azure;
		width: 40%;
		border: 1px solid black;
		border-radius: 20px;
		margin-left: 30%;
		padding: 10px;	
		font-size: 16px;		
	}
	.edit{
		height: 45px;
		width: 30%;
		font-size: 20px;	
	}
	</style>		
	<title>
		Student Registration Form	
	</title>
</head>
<body>
<div class="use">
	<form action="setAttend.php" method="post">
	<h2 align="center"><u>Student Registration</u></h2>
	
	Hobbies: &nbsp&nbsp&nbsp
	186230307001<input type="checkbox" name="enrollment[]" value="186230307001">
	&nbsp&nbsp&nbsp
	
	Singing<input type="checkbox" name="enrollment[]" value="186230307002">
	&nbsp&nbsp&nbsp
	Help male<input type="radio" name="gender" value="186230307011"><br>Help fesmale<input type="radio" name="gender" value="female"><br>

	Dancing<input type="checkbox" name="enrollment[]" value="186230307003"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	Drawing<input type="checkbox" name="enrollment[]" value="186230307004">&nbsp&nbsp
	
	Playing Instruments<input type="checkbox" name="enrollment[]" value="186230307012">
	
	<div align="center">
		<br>
		<input class="edit" name="sub" type="submit">
	</div>
	</form>
</div>
</body>
</html>		