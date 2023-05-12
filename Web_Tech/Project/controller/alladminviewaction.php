<?php

	session_start();

	include('../model/user.php');

	$_SESSION['info'] = getAll();

	if(isset($_SESSION['info'])){
		header("Location: ../view/alladminview.php");
	}














?>