<?php
function getListToDos($username)
{
	global $dbh;
	$stmt = $dbh->prepare("SELECT * FROM todo WHERE usr_username LIKE :username GROUP BY td_name
		ORDER BY td_date");
	$stmt->execute([
		':username' => $username,
	]);

	return $stmt->fetchAll();
}

function createToDo($username, $category, $title, $description, $td_date)
{
	global $dbh;

	$stmt = $dbh->prepare('INSERT INTO todo VALUES(NULL, :title, :description, :td_date, :category, :user, 0)');
	$stmt->execute([
		':title' => $title, 
		':description' => $description, 
		':td_date' => $td_date,
		':category' => $category,
		':user' => $username,
	]);
	return $stmt->fetch() !== false;
}

function updateToDos($username, $id_cat, $id_todo, $name, $description, $date)
{

}

function deleteToDo($username, $td_id) {
	global $dbh;
	$stmt = $dbh->prepare('DELETE FROM todo WHERE td_id = :td_id AND usr_username = :username');
	$stmt->execute([
		':td_id' => $td_id,
		':username' => $username,
	]);
	return $stmt->fetch() !== false;
}

function changeCheckTodo($username, $td_id, $check_value) {

	global $dbh;
	$stmt = $dbh->prepare('UPDATE todo SET td_check = :check_value WHERE td_id = :td_id AND usr_username = :username');
	$stmt->execute([
		':td_id' => $td_id,
		':check_value' => $check_value,
		':username' => $username,
	]);
	return $stmt->fetch() !== false;

}

?>