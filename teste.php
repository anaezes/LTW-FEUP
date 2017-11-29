<?php

	include_once('database/connection.php');
	session_start();

	$username = 'qwerty';
	// $password = '7110eda4d09';
	
	global $dbh;
	$stmt = $dbh->prepare('SELECT * FROM user');
	//$stmt->execute(array($username, $password));
	$stmt->execute(array());
	$r = $stmt->fetchAll();
	
	print_r($r);


?>