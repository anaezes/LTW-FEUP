<?php

	function isLoginCorrect($username, $password) 
	{
		global $dbh;
		$stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ? AND usr_password = ?');
		$stmt->execute(array($username, $password));
		return $stmt->fetch() !== false;
	}
	
?>