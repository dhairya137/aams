<!DOCTYPE html>
<html>
<head>
	<style>
		table {
			  border-collapse: collapse;
			  font-family: Cambria;
		}
		tr:nth-child(odd) {
		  background: ghostwhite;
		}

		tr:nth-child(even) {
		  background: azure;
		}
		td {
			text-align: center;
			width: 170px;
		}
	</style>
	<title>Access Page Student Registration</title>
</head>
<body>

	<h1><u>Student Details:</u></h1>
	<?php
		if(isset($_POST['sub']))
		{
			echo "<table border = 1 cellpadding=10>";
			echo "<tr><th>Name</th>";
			echo "<td>".$_POST['name']."</td></tr>";

			echo "<tr><th>Contact</th>";
			echo "<td>".$_POST['phn']."</td></tr>";

			echo "<tr><th>Date of Birth</th>";
			echo "<td>".$_POST['birthdate']."</td></tr>";

			echo "<tr><th>Gender</th>";
			echo "<td>".$_POST['gender']."</td></tr>";
			
			echo "<tr><td>Qualification</b></td>";
			echo "<td>".$_POST['qualify']."</td></tr>";
			
			echo "<tr><td>Address</td>";
			echo "<td>".$_POST['addr']."</td></tr>";
			
			echo "<tr><td>Hobbies</td>";
			echo "<td>";
			foreach ($_POST['hobby'] as $hob){
			 echo $hob." ";
			}
			echo "</td></tr></table>";
		}
		else{
			echo "Fill all the details in Form.";
		}
	?>
</body>
</html>