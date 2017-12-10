<?php
	include_once('database/connection.php');
	
	$user = 'sdfsdf';
	
	
	global $dbh;
	$stmt = $dbh->prepare('DELETE FROM user WHERE usr_username = ?');
	$stmt2 = $dbh->prepare('DELETE FROM user_cat WHERE usr = ?');
	$stmt->execute(array($user));
	$stmt2->execute(array($user));
	
	include_once('teste.php');
?>