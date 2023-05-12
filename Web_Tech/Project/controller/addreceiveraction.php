<?php 

	session_start();

	include('../model/user.php');
	

	$name = $username = $address = $mobile = $gender = $dateofbirth = $role = "";


		if ($_SERVER['REQUEST_METHOD'] === "POST"){

			function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$name = test_input($_POST['name']);
			$username = test_input($_POST['username']);
			$address = test_input($_POST['address']);
			$mobile = test_input($_POST['mobile']);
			$gender = test_input($_POST['gender']);
			$dateofbirth = test_input($_POST['dateofbirth']);
			$role = test_input($_POST['role']);	

			$message = "";
			if(empty($name)) {

				$message .= "Name is Empty";
				$message .= "<br>";
			}
			if(empty($username)) {

				$message .= "User Name is Empty";
				$message .= "<br>";
			}
			if (empty($address)) {
				$message .= "Street/House/Road is Empty";
				$message .= "<br>";
			}
			if (empty($mobile)) {
				$message .= "Mobile no is Empty";
				$message .= "<br>";
			}
			if (empty($gender)) {
				$message .= "Gender not Selected";
				$message .= "<br>";
			}
			if (empty($dateofbirth)) {
				$message .= "Date of birth empty";
				$message .= "<br>";
			}
			if (empty($role)) {
				$message .= "Role empty";
				$message .= "<br>";
			}
			
			
			if($message == ""){

				$flag1 = addreceiver($name , $username , $address , $mobile , $gender , $dateofbirth , $role);

				

				if($flag1) {

					$_SESSION['addreceiver'] = "Add Successfully";
					header("Location: ../view/addreceiver.php");
				}
			}
			else{
				$_SESSION['addreceiver'] = $message; 
				header("Location: ../view/addreceiver.php");
			}
			

		
		}
?>