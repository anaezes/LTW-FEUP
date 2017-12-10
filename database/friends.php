<?php
function getListFriends($username)
{
	global $dbh;
	$stmt = $dbh->prepare("SELECT usr_2 FROM friends_with WHERE usr_1 LIKE :username GROUP BY usr_2");
	$stmt->execute([
		':username' => $username,
	]);

	return $stmt->fetchAll();
}

function getAllUsers($username) {
	global $dbh;
	$stmt = $dbh->prepare('SELECT usr_username FROM user
		WHERE usr_username NOT IN (
		SELECT usr_2 FROM friends_with WHERE usr_1 LIKE :username) AND usr_username <> :username');
	$stmt->execute([
		':username' => $username,
	]);
	return $stmt->fetchAll();
}

function addFriend($username, $friend) {

  global $dbh;
  $stmt = $dbh->prepare('INSERT OR IGNORE INTO friends_with VALUES(:username, :friend)');
  $stmt->execute([
    ':username' => $username,
    ':friend' => $friend, 
  ]);

  $stmt = $dbh->prepare('INSERT OR IGNORE INTO friends_with VALUES(:friend, :username)');
  $stmt->execute([
    ':friend' => $friend, 
    ':username' => $username,
  ]);

  return $stmt->fetchAll();
}

function getSharedTodos($username) {
	global $dbh;
	$stmt = $dbh->prepare("SELECT * FROM shared_with, todo 
		WHERE todo_id LIKE td_id
		AND usr_username LIKE usr_1
		AND usr_2 LIKE :username
		GROUP BY todo_id");
	$stmt->execute([
		':username' => $username,
	]);

	return $stmt->fetchAll();
}

function shareTodo($username, $todo_id, $friend) {
	global $dbh;
	$stmt = $dbh->prepare('INSERT INTO shared_with VALUES(:username, :todo_id, :friend)');
	$stmt->execute([
		':username' => $username,
		':todo_id' => $todo_id,
		':friend' => $friend,
		
	]);

	return $stmt->fetchAll();
}
?>