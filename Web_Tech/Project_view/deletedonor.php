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
	<title>DELETE Operation</title>
	
</head>
<body >
<br><br>

	<div>

		<?php 	
			if(isset($_SESSION['deletedonor'])){
					echo $_SESSION['deletedonor'];
					$_SESSION['deletedonor']=' ';
				}
		?>

	</div>
	<a href="donor.php">Go Back</a>
	<br><br><br>
    </body>
</html>
<?php include('../controller/footer.php')  ?>
