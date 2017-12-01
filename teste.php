<?php

	include_once('database/connection.php');
	include_once('database/user.php');
	
	$username = 'berna';
	$name = 'Bernardo';
	$photo = 'Perfil';
	$password = '123';
	function cena()
	{
		global $dbh;
		$stmt = $dbh->prepare('SELECT * FROM user');
		//$stmt->execute(array($username, $password));
		$stmt->execute(array());
		$r = $stmt->fetchAll();
		
		print_r($r);		
	}
	
	function update($username, $name, $photo)
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
	
	
	//updatePassUser($username, $password);
	//update($username, $name, $photo);
	cena();
	
?>