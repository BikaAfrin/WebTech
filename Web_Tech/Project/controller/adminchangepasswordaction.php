
<?php

	include('../model/user.php');

	session_start();

	include('authentication.php');
	
	$username = "";

	if($_SERVER['REQUEST_METHOD'] === "POST"){

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$username = test_input($_POST['username']);
		$password = test_input($_POST['oldpass']);
		$newpass = test_input($_POST['newpass']);

		$_SESSION['newpass']=$newpass;

		$message = "";
		if(empty($username)){
				$message .= "Fillup username";
				$message .= "<br>";
			}

		if(empty($password)){
			$message .= "Fillup old password";
			$message .= "<br>";
		}

		if(empty($newpass)){
			$message .= "Fillup new password";
			$message .= "<br>";
		}
		

		if($message == ""){
			
			$check = passwordchange($username , $password, $newpass);
			if($check){
				$_SESSION['pas'] = "Password updated";
				$_SESSION['password']=$_SESSION['newpass'];
				header("Location: ../view/adminchangepassword.php");
			}
		}
		else{
			$_SESSION['pas'] = $message;

			header("Location: ../view/adminchangepassword.php");
		}	
	}
	


?>