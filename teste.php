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
		$stmt2 = $dbh->prepare('SELECT * FROM category');
		$stmt3 = $dbh->prepare('SELECT * FROM todo');
		$stmt4 = $dbh->prepare('SELECT * FROM user_cat');
		//$stmt->execute(array($username, $password));
		$stmt->execute(array());
		$stmt2->execute(array());
		$stmt3->execute(array());
		$stmt4->execute(array());
		$r = $stmt->fetchAll();
		$r1 = $stmt2->fetchAll();
		$r2 = $stmt3->fetchAll();
		$r3 = $stmt4->fetchAll();
		
		echo 'User:';
		print_r($r);		
		echo 'cat:';
		print_r($r1);		
		echo 'todo:';
		print_r($r2);		
		echo 'usercat:';
		print_r($r3);		
	}
	
	function update($username, $name)
	{
		global $dbh;
		$stmt = $dbh->prepare('UPDATE user SET usr_name = :name WHERE usr_username = :user');
		$stmt->execute([
			':user' => $username,
			':name' => $name,
		]);
		return $stmt->fetch() !== false;
	}
	$options = ['cost' => 12];
	$p = password_hash($password, PASSWORD_DEFAULT, $options);
	
	//updatePassUser($username, $password);
	//update($username, $name, $photo);
	cena();
	//echo $p; 	
?>