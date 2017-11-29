<?php
	include_once('includes/init.php');
	include_once('database/user.php');
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$photo = $_POST['photo'];
	
	if(createUser($username, $password, $name, $photo))
	{
		header('location:login.php');
		exit();
	}
	
	header('location:login.php');
	exit();
?>