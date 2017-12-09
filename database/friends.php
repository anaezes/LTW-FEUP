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
?>