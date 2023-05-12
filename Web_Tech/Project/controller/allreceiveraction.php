<?php

	session_start();

	include('../model/user.php');

	$_SESSION['info'] = getallreceiver();

	if(isset($_SESSION['info'])){
		header("Location: ../view/allreceiver.php");
	}

?>