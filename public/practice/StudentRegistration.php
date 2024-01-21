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
	<form action="StudentAccess.php" method="post">
	<h2 align="center"><u>Student Registration</u></h2>
	Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="url" name="name" size="5"><br><br>
	
	Contact:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="tel" name="phn" pattern="[0-9]{10}">&nbsp&nbsp&nbsp&nbsp

	<br><br>	
	
	Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Male<input type="radio" name="gender" value="male">&nbsp&nbsp&nbsp
	Female<input type="radio" name="gender" value="female"><br>
	
	<br>Date of Birth:&nbsp&nbsp&nbsp&nbsp<input type="date" name="birthdate"><br>
	
	<br><label>Qualification: &nbsp&nbsp&nbsp</label>
	<select name="qualify" multiple>
		<option value="SSC" >10th(SSC)</option>
		<option value="HSC">12th(HSC)</option>
		<option value="diploma">Diploma</option>
		<option value="Bachelor"selected>Graduate</option>
	</select>
	<br><br>
	Address:<br>
	<textarea rows="5" cols="60" name="addr" placeholder="Enter permanent address"></textarea><br><br>
	
	Hobbies: &nbsp&nbsp&nbsp
	Reading<input type="checkbox" name="hobby[]" value="reading">
	&nbsp&nbsp&nbsp
	
	Singing<input type="checkbox" name="hobby[]" value="singing">
	&nbsp&nbsp&nbsp
		Help male<input type="radio" name="gender" value="female"><br>Help fesmale<input type="radio" name="gender" value="female"><br>
	Dancing<input type="checkbox" name="hobby[]" value="dancing"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	Drawing<input type="checkbox" name="hobby[]" value="drawing">&nbsp&nbsp
	
	Playing Instruments<input type="checkbox" name="hobby[]" value="Playing Instruments">
	
	<div align="center">
		<br>
		<input class="edit" name="sub" type="submit">
	</div>
	</form>
</div>
</body>
</html>		