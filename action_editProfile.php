<?php
	include_once('includes/init.php');
	include_once('database/user.php');
	
	$username = $_SESSION['username'];
	$name = $_POST['name'];
	$cpassword = $_POST['cpassword'];
	$npassword = $_POST['password'];
	$photo = $_POST['photo'];

	//Caso a Password esteja errada
	if(!isLoginCorrect($username, $cpassword) || $name=="" || $cpassword="" || npassword=="")
	{
		header('location:edit_profile.php'); 

	}
	//Altera as definições
	else{

			if(!updateUser($username, $name, $photo))
			{
				//Neste momento não faz nada dentro do if
			}

			if(!updatePassUser($username, $npassword))
			{
				//Neste momento não faz nada dentro do if
			}

			header('location:login.php');

	}
	
	exit();
?>