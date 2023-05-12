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
	<title>Manage Receiver</title>
	
</head>
<body >
				
	<br><br>
	<fieldset>
	<legend><h1 class='admin'>Welcome to AdminInfo Management</h1></legend>
	<br><br>

	 <a href="adminchangepassword.php">Change Password</a>
	 <br><br>
		<a href="admineditprofile.php">Update  Profile</a><br><br>
		<a href="../controller/adminviewprofileAction.php">View  Profile</a><br><br>
		<a href="../controller/alladminviewaction.php">View All Admin</a><br><br>
		<a href="../controller/adminlogout.php">Logout</a>
            




	<br><br>
</fieldset>
	<br><br>
	
	


</body>
</html>























<?php include('../controller/footer.php')  ?>