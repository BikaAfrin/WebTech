<?php

	session_start();

	include('../model/user.php');

	$_SESSION['info'] = getallhospital();

	if(isset($_SESSION['info'])){
		header("Location: ../view/allhospital.php");
	}

?>