<?php
	include_once('includes/init.php');
	include_once('database/user.php');
	
	$u = $_GET['user'];
	// $Obj->existe = false;
	// $Obj->string = '';

	$obj = array(
		"existe" => false, 
		"string" => "",
		);
	
	
	if(getUserData($u))
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