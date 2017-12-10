<?php

function isLoginCorrect($username, $password) 
{
	global $dbh;
	$stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ?');
	$stmt->execute(array($username));
	$user = $stmt->fetch();
	if ($user !== false && password_verify($password, $user['usr_password'])) 
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getUserData($username)
{
	global $dbh;
	$stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ?');
	$stmt->execute(array($username));
	$data = $stmt->fetchAll();
	return $data;
}

function createUser($username, $password, $name)
{
	$options = ['cost' => 12];
	global $dbh;
	try
	{
		$stmt = $dbh->prepare('INSERT INTO user VALUES(:user, :pass, :name)');
		$stmt->execute([
			':user' => $username,
			':pass' => password_hash($password, PASSWORD_DEFAULT, $options),
			':name' => $name,
		]);
		return $stmt->fetch() !== false;
	}
	catch(Exception $e)
	{
		header('location:register_user.php');
		exit();
	}
}

function updateUser($username, $name)
{
	global $dbh;
	$stmt = $dbh->prepare('UPDATE user SET usr_name = :name WHERE usr_username = :user');
	$stmt->execute([
		':user' => $username,
		':name' => $name,
	]);
	
	return $stmt->fetch() !== false;
}

function updatePassUser($username, $password)
{
	$options = ['cost' => 12];
	global $dbh;
	$stmt = $dbh->prepare('UPDATE user SET usr_password = :pass WHERE usr_username = :user');
	$stmt->execute([
		':user' => $username,
		':pass' => password_hash($password, PASSWORD_DEFAULT, $options),
	]);
	return $stmt->fetch() !== false;
}

function addFirstCategories($username) {

	global $dbh;
	$stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Home', :username)");
	$stmt->execute([':username' => $username]);

	$stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Work', :username)");
	$stmt->execute([':username' => $username]);

	$stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Finances', :username)");
	$stmt->execute([':username' => $username]);

	$stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Sport', :username)");
	$stmt->execute([':username' => $username]);

	$stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Leisure', :username)");
	$stmt->execute([':username' => $username]);

	$stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Beauty', :username)");
	$stmt->execute([':username' => $username]);

	$stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Other', :username)");
	$stmt->execute([':username' => $username]);

	return $stmt->fetch() !== false;
}

?>