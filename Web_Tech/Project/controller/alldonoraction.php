<?php

	session_start();

	include('../model/user.php');

	$_SESSION['info'] = getalldonor();

	if(isset($_SESSION['info'])){
		header("Location: ../view/alldonor.php");
	}














?>