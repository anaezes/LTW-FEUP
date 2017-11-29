<?php
	include_once('database/connection.php');
	
	$user = 'dbjgçwd';
	
	
	global $dbh;
	$stmt = $dbh->prepare('DELETE FROM user WHERE usr_username = ?');
	$stmt->execute(array($user));
	
	include_once('teste.php');
?>