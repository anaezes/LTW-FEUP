<?php

	include_once('database/connection.php');
	session_start();

	$username = 'johnSnow';
	$password = '7110eda4d09';
	
	global $dbh;
	$stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ? AND usr_password = ?');
	$stmt->execute(array($username, $password));
	$r = $stmt->fetch();
	
	print_r($r);


?>