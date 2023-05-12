<?php

require ('connection.php');

function getalldonor(){
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM donor";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}

	function adddonor($name , $username , $address, $mobile, $bloodgroup, $gender, $dateofbirth, $lastdonation ){
		$conn = connect();
		if($conn){

			$stmt = $conn->prepare("Insert INTO donor (name , username , address, mobile, bloodgroup, gender, dateofbirth, lastdonation ) VALUES(?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssss", $name , $username , $address, $mobile, $bloodgroup, $gender, $dateofbirth, $lastdonation );
			
			
			$stmt->execute();
			// die($stmt->error);
			return true;
		}
		else{
			return false;
		}
	}

	function deletedonor( $user){
		$conn = connect();

		if($conn){
			$sql = "DELETE FROM `donor` WHERE `username` = '$user'";
			mysqli_query($conn, $sql);
			return true;
		}
		
			else{
				$_SESSION['deletedonor'] = "No data found";
				//$_SESSION['flagp'] = false;
				return false;
				
				header("Location: ../view/deletedonor.php");
			}
			
		
	}

	function searchdonor($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT * FROM donor WHERE `username` = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			//echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['flagp'] = false;
				
				header("Location: ../view/searchdonor.php");
			}
		}
	}

	function getallreceiver(){
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM reciver";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}

	function addreceiver($name , $username , $address , $mobile , $gender , $dateofbirth , $role){
		$conn = connect();
		if($conn){

			$stmt = $conn->prepare("Insert INTO reciver (name , username , address , mobile , gender , dateofbirth , role) VALUES(?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssss", $name , $username , $address , $mobile , $gender , $dateofbirth , $role);
			
			$stmt->execute();
			// die($stmt->error);
			return true;
		}
		else{
			return false;
		}
	}

	function searchreceiver($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT * FROM reciver WHERE `username` = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			//echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['flagp'] = false;
				
				header("Location: ../view/searchreceiver.php");
			}
		}
	}

	function getallhospital(){
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM `hospital`";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}

	function searchhospital($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT * FROM hospital WHERE `username` = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			//echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['flagp'] = false;
				
				header("Location: ../view/searchhospital.php");
			}
		}
	}

	function deletehospital( $username){
		$conn = connect();

		if($conn){
			$sql = "Delete FROM hospital WHERE `username` = '$username'";

			mysqli_query($conn, $sql);
			return true;
		}
		
			else{
				$_SESSION['deletehospital'] = "No data found";
				//$_SESSION['flagp'] = false;
				return false;
				
				header("Location: ../view/deletehospital.php");
			}
			
		
	}

	function passwordchange($username, $oldpass, $newpass){

		$conn = connect();
		if($conn){
			$sql = "UPDATE `admininfo` SET `password` = '$newpass' WHERE username = '" . $username . "' and password = '" . $oldpass . "'";
			mysqli_query($conn, $sql);

			return true;
		}

		return false;
	}

	function updateprofile($fname, $lname, $add, $mail, $ph, $qu, $wo, $uname){
		$conn = connect();

		if($conn){
			$sql = "UPDATE `admininfo` SET `firstname` = '$fname' , `lastname` = '$lname' , `address` = '$add' , `email` = '$mail' , `phone` = '$ph' , `qua` = '$qu' , `work` = '$wo' WHERE `username` = '$uname'";

			mysqli_query($conn, $sql);
			return true;
		}
		else{
			return false;
		}
	}

	function search($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, qua, work, role FROM admininfo WHERE username = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				
				$_SESSION['searcha'] = "No data found. Please insert correct username";
				$_SESSION['fl'] = false;
				return false;
				//("Location: ../view/adminsearch.php");
			}
		}
		//return array();
	}
	function getAll() {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM admininfo";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}
	function viewprofile($username, $password) {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, qua, work, role  FROM admininfo WHERE username = '" . $username . "' and password = '" . $password . "'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}
	function checklogin($username, $password) {
		$conn = connect();
		if ($conn) {

			$sql = "SELECT id FROM admininfo WHERE username = '" . $username . "' and password = '" . $password . "'";

			$res = mysqli_query($conn, $sql);

			if ($res->num_rows === 1)
				return true;
			return false;
		}
	}

?>