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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body >
<br><br>
				

<form method="post" action="../controller/deletehospitalaction.php">
        <h1 align='center' class="hospital">All hospital </h1>
		<div align="center">
			

			<?php 

				$x = $_SESSION['info'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Name of hospital</th>";
				echo "<th>User Name</th>";
				echo "<th>Email</th>";
				echo "<th>Address</th>";
				echo "<th>Mobile</th>";
				echo "<th>Role</th>";
				echo "<th>Option</th>";
				
				
				
				echo "</tr>";

				for($i=0; $i<sizeof($x);$i++)
				{

					echo "<tr>";
					echo "<td>" . $x[$i]['nameofhospital'] . "</td>";
					echo "<td>" . $x[$i]['username'] . "</td>";
					echo "<td>" . $x[$i]['email'] . "</td>";
					echo "<td>" . $x[$i]['address'] . "</td>";
					echo "<td>" . $x[$i]['mobile'] . "</td>";
					echo "<td>" . $x[$i]['role'] . "</td>";
					echo "<td ><button name='delete' value='{$x[$i]['username']}'>Delete</button></td>";
					echo "</tr>";
				}


			echo "</table>";

			


			
			?>
			<br><br>

			<a href="searchhospital.php">Search hospital</a>
			<br><br>
			<a href="hospital.php">Go Back</a>
			<br>

		</div>
			<br><br>


</body>
</html>
<?php

require('../controller/footer.php');

?>

