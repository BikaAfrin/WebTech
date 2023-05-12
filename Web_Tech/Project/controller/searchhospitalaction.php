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
				$message .= "Insert username to search";
				$message .= "<br>";
			}

			if($message === "")
			{	
				$_SESSION['searchhospital'] = searchhospital($username);
				// echo searchhospital($name);
				// echo "<br>";
				// echo $_SESSION['searchhospital'];

				if(isset($_SESSION['searchhospital'])){
					$_SESSION['flagp']=true;
					header("Location: ../view/searchhospital.php");
				}
			}
			else
			{
				$_SESSION['errordatap'] = $message;
				header("Location: ../view/searchhospital.php");
			}
	}

?>