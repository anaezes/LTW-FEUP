<?php

	include_once('includes/init.php');
	include_once('database/user.php');


	if(isLoginCorrect($_POST['username'], $_POST['password']))
	{
		setCurrentUser($_POST['username']);
	}
	else
	{
		echo 'Dados Errados!';
	}
	
	header('location:index.php');
	exit();

?>