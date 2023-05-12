<?php 
	include('../controller/adminloginaction.php');
	include('../controller/header.php');
	
	include('../controller/authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body >
<br><br>

        <h1 align='center' class="donor">All Donor </h1>
		<div align="center">
			
			<form method="post" action="../controller/deletedonoraction.php">
			<?php 

				$x = $_SESSION['info'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>User Name</th>";
				echo "<th>Address</th>";
				echo "<th>Mobile</th>";
				echo "<th>Blood Group</th>";
				echo "<th>Gender</th>";
				echo "<th>Date of birth</th>";
				echo "<th>Last Donation</th>";
				echo "<th>Option</th>";
				
				
				
				echo "</tr>";

				for($i=0; $i<sizeof($x);$i++)
				{

					echo "<tr>";
					echo "<td>" . $x[$i]['name'] . "</td>";
					echo "<td>" . $x[$i]['username'] . "</td>";
					echo "<td>" . $x[$i]['address'] . "</td>";
					echo "<td>" . $x[$i]['mobile'] . "</td>";
					echo "<td>" . $x[$i]['bloodgroup'] . "</td>";
					echo "<td>" . $x[$i]['gender'] . "</td>";
					echo "<td>" . $x[$i]['dateofbirth'] . "</td>";
					echo "<td>" . $x[$i]['lastdonation'] . "</td>";
					echo "<td>" . "<button name='delete' value='<?php echo {$x[$i]['username']}; ?>'>Delete</button></td>";
					
					echo "</tr>";
				}


			echo "</table>";
			


			
			?>
			<br><br>

			<a href="searchdonor.php">Search Donor</a>
			<br><br>
			<a href="donor.php">Go Back</a>
			<br>
			</form>

		</div>
			<br><br>
		


</body>
</html>
<?php

require('../controller/footer.php');

?>

