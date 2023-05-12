<?php 
	include('../controller/adminchangepasswordaction.php');
	include('../controller/header.php');

	include('../controller/authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
	
</head>
<body >
<br><br>
				
<h1 align="center" class='admin'>All Admin</h1>
				


		<div align="center">


			<?php 

				$x = $_SESSION['info'];
				echo "<table border=1 align=center>";
				
					
					echo "<tr>";
					echo "<th>Firstname</th>";
					echo "<th>LastName</th>";
					echo "<th>Gender</th>";
					echo "<th>Date of Birth</th>";
					echo "<th>Blood Group</th>";
					echo "<th>Address</th>";
					echo "<th>Email</th>";
					echo "<th>Phone No</th>";
					echo "<th>Qualification</th>";
					echo "<th>Work Experience</th>";
					echo "<th>Type</th>";
					
					echo "</tr>";

				for($i=0; $i<sizeof($x);$i++)
				{
				
					echo "<tr>";
					echo "<td>" . $x[$i]['firstname'] . "</td>";
					echo "<td>" . $x[$i]['lastname'] . "</td>";
					echo "<td>" . $x[$i]['gender'] . "</td>";
					echo "<td>" . $x[$i]['dob'] . "</td>";
					echo "<td>" . $x[$i]['bg'] . "</td>";
					echo "<td>" . $x[$i]['address'] . "</td>";
					echo "<td>" . $x[$i]['email'] . "</td>";
					echo "<td>" . $x[$i]['phone'] . "</td>";
					echo "<td>" . $x[$i]['qua'] . "</td>";
					echo "<td>" . $x[$i]['work'] . "</td>";
					echo "<td>" . $x[$i]['role'] . "</td>";
					echo "</tr>";
				
				}

			echo "</table>";

			


			
			?>

		
			<br><br>
			<a href="adminportal.php">back </a>			<br>

		</div>

			<br><br>


</body>
</html>

<?php

require('../controller/footer.php');

?>
