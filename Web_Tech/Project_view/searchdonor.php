<?php 
	include('../controller/searchdonoraction.php');
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
	<form method="post" action="../controller/searchdonoraction.php" >
		<br><br>
		<fieldset>
			<legend><h1 class="donor">Search Donor</h1></legend>



			Enter Username to search
			<input type="text" name="username">
			<input type="submit" name="submit" value="Search">
			<br><br>
			<a href="donor.php">Go Back</a>
		</fieldset>
	</form>

</div>

	<br><br>

	<?php 

	if(isset($_SESSION['flagp'])){


		if($_SESSION['flagp']){

				$x = $_SESSION['searchdonor'];
				
				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>User Name</th>";
				echo "<th>Address</th>";
				echo "<th>Mobile No</th>";
				echo "<th>Blood Group</th>";
				echo "<th>Gender</th>";
				echo "<th>Date of Birth</th>";
				echo "<th>Last Donation</th>";
				
				
				echo "</tr>";

				echo "<tr>";
				echo "<td>" . $x[0]['name'] . "</td>";
				echo "<td>" . $x[0]['username'] . "</td>";
				echo "<td>" . $x[0]['address'] . "</td>";
				echo "<td>" . $x[0]['mobile'] . "</td>";
				echo "<td>" . $x[0]['bloodgroup'] . "</td>";
				echo "<td>" . $x[0]['gender'] . "</td>";
				echo "<td>" . $x[0]['dateofbirth'] . "</td>";
				echo "<td>" . $x[0]['lastdonation'] . "</td>";
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
