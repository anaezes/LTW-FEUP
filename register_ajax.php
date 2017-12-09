<?php
	include_once('includes/init.php');
	include_once('database/user.php');
	
	$u = $_GET['user'];
	
	try
	{
		if(getUserData($u))
		{
			echo 'Ja existe!';
		}
	}
	catch(Exception $e)
	{
		echo '';
	}
?>