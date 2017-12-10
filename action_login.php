<?php

	include_once('includes/init.php');
	include_once('database/user.php');


	if(isLoginCorrect($_POST['username'], $_POST['password']))
	{
		setCurrentUser($_POST['username']);
		$data = getUserData($_POST['username']);
		$_SESSION['usr_name'] = $data[0]['usr_name'];
		header('location:index.php');
	}
	else{
		header('location:login.php');
		//dar print - falha login
	}
	
	exit();

?>