<?php 
	include('../controller/adminupdateprofileaction.php');
	include('../controller/header.php');
	include('../controller/authentication.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		
</head>
<body>
	<div>
		<form method="post" action="../controller/adminupdateprofileaction.php">
			<br><br>
			<fieldset>
				<legend><h1 class ="hospital">Edit Profile</h1></legend>
			<table>
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="Number" name="phone"></td>
				</tr>
				<tr>
					<td>Qualification:</td>
					<td><input type="text" name="qua"></td>
				</tr>
				<tr>
					<td>Work Experience</td>
					<td><input type="text" name="work"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="username" name="username" value = "<?php echo $_SESSION['username']; ?>" ></td>
				</tr>
			</table>
				<input type="submit" name="submit" value="Update">
				<br><br>
				<a href="adminportal.php">Back </a><br>
				<a href="../controller/adminviewprofileaction.php">View profile </a>
			</fieldset>
		</form>
	</div>
	<br><br>
	<?php 
		if(isset($_SESSION['update'])){
			echo $_SESSION['update'] ;
			$_SESSION['update']=' ';

		}
	?>
</body>
</html>
<?php include('../controller/footer.php')  ?>