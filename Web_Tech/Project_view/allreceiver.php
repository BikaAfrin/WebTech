<?php 
	include('../Controller/adminchangepasswordaction.php');
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
				


    
        <h1 align='center' class="receiver">All Receiver </h1>
		<div align="center">
			

			<?php 

				$x = $_SESSION['info'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>User Name</th>";
				echo "<th>Address</th>";
				echo "<th>Mobile no</th>";
				echo "<th>Gender</th>";
				echo "<th>Date of birth</th>";
				echo "<th>Role</th>";
				
				
				
				echo "</tr>";

				for($i=0; $i<sizeof($x);$i++)
				{

					echo "<tr>";
					echo "<td>" . $x[$i]['name'] . "</td>";
					echo "<td>" . $x[$i]['username'] . "</td>";
					echo "<td>" . $x[$i]['address'] . "</td>";
					echo "<td>" . $x[$i]['mobile'] . "</td>";
					echo "<td>" . $x[$i]['gender'] . "</td>";
					echo "<td>" . $x[$i]['dateofbirth'] . "</td>";
					echo "<td>" . $x[$i]['role'] . "</td>";
					
					echo "</tr>";
				}


			echo "</table>";

			


			
			?>
			<br><br>

			<a href="searchreceiver.php">Search Receiver</a>
			<br><br>
			<a href="receiver.php">Go Back</a>
			<br>

		</div>
			
			<br><br>


</body>
</html>
<?php

require('../controller/footer.php');

?>

