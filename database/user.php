<?php

function isLoginCorrect($username, $password) 
{
	global $dbh;
	$stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ? AND usr_password = ?');
	$stmt->execute(array($username, $password));
	return $stmt->fetch() !== false;
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
	global $dbh;
	$stmt = $dbh->prepare('INSERT INTO user VALUES(:user, :pass, :name)');
	$stmt->execute([
		':user' => $username,
		':pass' => $password,
		':name' => $name,
	]);
	return $stmt->fetch() !== false;
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
	global $dbh;
	$stmt = $dbh->prepare('UPDATE user SET usr_password = :pass WHERE usr_username = :user');
	$stmt->execute([
		':user' => $username,
		':pass' => $password,
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