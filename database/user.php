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
	
	function updateUser($username, $name, $photo)
	{
		global $dbh;
		$stmt = $dbh->prepare('UPDATE user SET usr_name = :name, usr_photo = :photo WHERE usr_username = :user');
		$stmt->execute([
			':user' => $username,
			':name' => $name,
			':photo' => $photo,
		]);
		return $stmt->fetch() !== false;
	}
	
	function updatePassUser($username, $password)
	{
		global $dbh;
		$stmt = $dbh->prepare('UPDATE user SET usr_password = :pass WHERE usr_username = :user');
		$stmt->execute([
			':user' => $username,
			':pass' => $password,
		]);
		return $stmt->fetch() !== false;
	}
	
?>