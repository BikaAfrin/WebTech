<?php

	session_start();

	include('../model/user.php');

	$_SESSION['info'] = viewprofile($_SESSION['username'], $_SESSION['password']);

	if(isset($_SESSION['info'])){
		header("Location: ../view/adminviewprofile.php");
	}

	














?>