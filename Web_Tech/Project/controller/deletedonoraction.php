<?php  

	include('../model/user.php');
	session_start();
	include('authentication.php');

	$username = "";

	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$username = test_input($_POST['username']);
		$result=deletedonor( $username);
		echo $username;
		if($result){
			$_SESSION['deletedonor']='Delete successfully';
			header("Location: ../view/deletedonor.php");
		}
		else{
			$_SESSION['deletedonor']='Delete unsuccessfully';
			header("Location: ../view/deletedonor.php");
		}
	
		
	}
?>