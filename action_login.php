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
	$_SESSION['error_messages'][] = "Error: login";
	header('location:login.php');
}

exit();

?>