<?php
	include_once('includes/init.php');
	include_once('database/user.php');
	
	$cuser = $_GET['user'];

	$obj = array(
		"existe" => false, 
		"string" => "",
		);
	
	$data = getUserData($cuser);
	if(!empty($data))
	{
		$obj['existe'] = true;
		$obj['string'] = 'This username already exists!';
		$json = json_encode($obj);
		echo $json;
	}
	else
	{
		$obj['existe'] = false;
		$obj['string'] = '';
		$json = json_encode($obj);
		echo $json;
	}
?>