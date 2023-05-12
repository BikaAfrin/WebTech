<?php 
	include('../controller/addreceiveraction.php');
    include('../controller/header.php');
    include('../controller/authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Receiver</title>

</head>
<body>
</head>
<body>
	<div>
		<form method="post" action="../controller/addreceiveraction.php" >
			<fieldset>
				<legend><h1 class="receiver">Add Receiver</h1></legend>
				<table>
				<tr>	
					<td>Name:</td>
					<td><input type="text" name="name" ></td>
				</tr>
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="username"></td>
				</tr>	
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address"></td>
				</tr>
				<tr>
					<td>Mobile no:</td>
					<td><input type="text" name="mobile" ></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender">Female</td>
					<td><input type="radio" name="gender">Male</td>
                </tr>
                <tr>
					<td>Date of Birth:</td>
					<td><input type="date" name="dateofbirth"></td>
				</tr>
				<tr>
					<td>Role:</td>
					<td><select name="role" >
						<option>Admin</option>
						<option>Receiver</option>
						<option>Hospital</option>
						<option>Donor</option>
					</select>
					</td>
				</tr>	
			</table>
				
				<input type="submit" name="submit" value="Add">
				<br>
				<a href="adminhome.php">Go to dashboard </a><br>
                <a href="receiver.php">Go Back </a>
                <br>
                </form>
			</fieldset>
		
	</div>
	<?php 
		if(isset($_SESSION['addreceiver'])){
			echo $_SESSION['addreceiver'] ;
			$_SESSION['addreceiver']=' ';

		}
	?>
	<br><br>
</body>
</html>
<?php include('../controller/footer.php')  ?>