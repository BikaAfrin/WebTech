<?php 

	include('../controller/deletedonoraction.php');
	include('../controller/header.php');
	
	include('../controller/authentication.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DELETE Operation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body >

	<div>
		<form method="post" action="../controller/deletehospitalaction.php" >
			<br><br>
		<fieldset>
		<legend><h1 class="hospital">Delete Hospital</h1></legend>
				Enter Username to delete
				<input type="text" name="username">
				<input type="submit" name="submit" value="Delete">
				

				<br><br>
                <a href="hospital.php">Go Back </a>
			</fieldset>
		</form>
		


		<?php 	
			if(isset($_SESSION['deletehospital'])){
					echo $_SESSION['deletehospital'];
					$_SESSION['deletehospital']=' ';
				}
		?>

		


	</div>
	<br><br>
    </body>
</html>
<?php include('../controller/footer.php')  ?>
