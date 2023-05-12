<?php 
	include('../controller/adminloginaction.php');
    include('../controller/header.php');
    include('../controller/authentication.php');
?>





<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<br><br>
	<table width=100%>

	
		<tr >
			<br><br><br><br><br>
		</tr>
		<tr>

			<td align=center><a href="donor.php"><img src="css/donor.jpg" alt="logo" width="150" height="130"></a></td>
			<td align=center><a href="receiver.php"> <img src="css/receiver.jpg" alt="logo" width="130" height="100"> </a></td>
			<td align=center><a href="hospital.php"> <img src="css/hospital1.png" alt="logo" width="110" height="120"> </a></td>
			<td align=center><a href="adminportal.php"> <img src="css/admin.jpg" alt="logo" width="120" height="140"> </a></td>
		</tr>
		<tr>
			<td><h5 align="center">Donor</h5></td>
			<td><h5 align="center">Receiver</h5></td>
			<td><h5 align="center">Hospital</h5></td>
			<td><h5 align="center">Admin Portal</h5></td>
		</tr>
	</table>
	<br><br>
	<br><br>

</body>
</html>

<?php include('../controller/footer.php')  ?>