<?php

	function isLoginCorrect($username, $password) 
	{
		global $dbh;
		$stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ? AND usr_password = ?');
		$stmt->execute(array($username, $password));
		return $stmt->fetch() !== false;
	}
	
	function createUser($username, $password, $name, $photo)
	{
		global $dbh;
		$stmt = $dbh->prepare('INSERT INTO user VALUES(:user, :pass, :name, :photo)');
		$stmt->execute([
			':user' => $username,
			':pass' => $password,
			':name' => $name,
			':photo' => $photo,
		]);
		return $stmt->fetch() !== false;
	}
	
	function updateUser($username, $password, $name, $photo)
	{
		
	}
	
?>