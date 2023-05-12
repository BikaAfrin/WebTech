<?php
	include('../controller/adminloginaction.php');
	include('../controller/header.php');
	

	

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	
</head>
<body >

<h1 align=center style="color:#2c463a;"><b> Login Page </b> </h1>
    <br><br>
	<?php 


		if(isset($_SESSION['error'])){
			echo $_SESSION['error'] ;
			$_SESSION['error'] = "";
		}

	 ?>
	<div>
	<form method="post" action="../controller/adminloginaction.php" >
	<table align='center'>
        <td>	
	<fieldset>
			<br><br>
			Username
			<input type="text" name="username" >
			
			<br><br>
			Password
			<input type="password" name="password" >
			
			<br><br>
			
			<p align="right"><input type="submit" value="LogIn" name="submit"></p>
			<p align="right"><a href="../../Welcome.php">Back</a></p>
			<br><br>
			
		</fieldset>
	</td>
	</table>
	
	</form>
	</div>
</body>
</html>
<?php

require('../controller/footer.php');

?>

