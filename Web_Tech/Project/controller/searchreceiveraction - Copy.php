<?php  

	include('../model/user.php');
	session_start();
	include('authentication.php');

	$name = "";

	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$name = test_input($_POST['name']);

			$message = "";
			if(empty($name)){
				$message .= "Insert name to search";
				$message .= "<br>";
			}

			if($message === "")
			{	
				$_SESSION['searchreceiver'] = searchreceiver($name);
				echo searchreceiver($name);
				echo "<br>";
				echo $_SESSION['searchreceiver'];

				if(isset($_SESSION['searchreceiver'])){
					$_SESSION['flagp']=true;
					header("Location: ../view/searchreceiver.php");
				}
			}
			else
			{
				$_SESSION['errordatap'] = $message;
				header("Location: ../view/searchreceiver.php");
			}
	}

?>