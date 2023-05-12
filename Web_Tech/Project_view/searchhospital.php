<?php 
	include('../controller/searchhospitalaction.php');
	include('../controller/header.php');
	
	include('../controller/authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Operation</title>
	
</head>
<body >
<div >
	<form method="post" action="../controller/searchhospitalaction.php">
		<br><br>
	<fieldset >
	<legend><h1 class="hospital">Search hospital</h1></legend>

				
			Enter Username to search
			<input type="text" name="username">
			<input type="submit" name="submit" value="Search">
			<br><br>
			<a href="hospital.php">Go Back</a>

		</fieldset>
	</form>

</div>

	<br><br>

	<?php 

	if(isset($_SESSION['flagp'])){


		if($_SESSION['flagp']){

				$x = $_SESSION['searchhospital'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Hospital Name</th>";
				echo "<th>User Name:</th>";
				echo "<th>Email</th>";
				echo "<th>Address</th>";
				echo "<th>Phone No</th>";
				echo "<th>Role</th>";
				
				
				echo "</tr>";

				echo "<tr>";
				echo "<td>" . $x[0]['nameofhospital'] . "</td>";
				echo "<td>" . $x[0]['username'] . "</td>";
				echo "<td>" . $x[0]['email'] . "</td>";
				echo "<td>" . $x[0]['address'] . "</td>";
				echo "<td>" . $x[0]['mobile'] . "</td>";
				echo "<td>" . $x[0]['role'] . "</td>";
				echo "</tr>";
			


			echo "</table>";

			echo "<br><br>";
			
		}

		else
		{
			echo "No data Found.";
		}
	}

	if(isset($_SESSION['errordatap'])){
		echo $_SESSION['errordatap'];
		$_SESSION['errordatap']=' ';
	}
	?>


</body>
</html>
<?php

require('../controller/footer.php');

?>
