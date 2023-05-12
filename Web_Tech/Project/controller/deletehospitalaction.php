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

			$message = "";
			if(empty($username)){
				$message .= "Insert username to delete";
				$message .= "<br>";
			}

			if($message === "")
			{
				$result=deletehospital( $username);
				if($result){
					$_SESSION['deletehospital']='Delete successfully';
					header("Location: ../view/deletehospital.php");
				}
			}
			else
			{
				$_SESSION['deletehospital'] = $message;
				header("Location: ../view/deletehospital.php");
			}
	}

?>