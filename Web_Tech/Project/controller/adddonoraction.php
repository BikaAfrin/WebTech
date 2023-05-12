<?php 

	session_start();

	include('../model/user.php');
	

	$name = $username = $address = $mobile = $bloodgroup = $gender = $dateofbirth = $lastdonation = "";


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
			$bloodgroup = test_input($_POST['bloodgroup']);
			$gender = test_input($_POST['gender']);
			$dateofbirth = test_input($_POST['dateofbirth']);
			$lastdonation = test_input($_POST['lastdonation']);
		
			

			$message = "";
			if(empty($username)) {

				$message .= "Username is Empty";
				$message .= "<br>";
			}
			if (empty($name)) {
				$message .= "Name not Selected";
				$message .= "<br>";
			}
			if (empty($dateofbirth)) {
				$message .= "Date of birth empty";
				$message .= "<br>";
			}
			if (empty($bloodgroup)) {
				$message .= "Blood Group not Selected";
				$message .= "<br>";
			}
			if (empty($address)) {
				$message .= "Street/House/Road is Empty";
				$message .= "<br>";
			}
			if (empty($mobile)) {
				$message .= "Mobileno is Empty";
				$message .= "<br>";
			}
			if (empty($gender)) {
				$message .= "Gender is Empty";
				$message .= "<br>";
			}
			if (empty($lastdonation)) {
				$message .= "lastdonation is Empty";
				$message .= "<br>";
			}

			

			
			
			if($message == ""){

				$flag1 = adddonor($name , $username , $address, $mobile, $bloodgroup, $gender, $dateofbirth, $lastdonation );

				

				if($flag1) {

					$_SESSION['adddonor'] = "Add Successfully";
					header("Location: ../view/adddonor.php");
				}
			}
			else{
				$_SESSION['adddonor'] = $message; 
				header("Location: ../view/adddonor.php");
			}
			

		
		}
?>
