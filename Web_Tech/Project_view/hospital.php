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
	<title>Manage Hospital</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
				
	<br><br>
	<fieldset>
	<legend><h1 class="hospital">Hospital Management</h1></legend>
	<br><br>

	<a href="../controller/allhospitalaction.php">hospital info</a>
	<br><br>
	

	<a href="deletehospital.php">Delete hospital</a>
	<br><br>
</fieldset>
	<br><br>
	
	


</body>
</html>

<?php include('../controller/footer.php')  ?>