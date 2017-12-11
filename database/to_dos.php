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
	$status = $stmt->execute([
		':title' => $title, 
		':description' => $description, 
		':td_date' => $td_date,
		':category' => $category,
		':user' => $username,
	]);
	return $status;
}

function updateToDo($username, $id ,$cat, $title, $description, $td_date)
{
	global $dbh;
	$stmt = $dbh->prepare('UPDATE todo SET 
		cat_name = :cat,
		td_name = :name,
		td_description = :description,
		td_date = :td_date
		WHERE td_id = :id 
		AND usr_username LIKE :username');
	$status = $stmt->execute([
		':username' => $username,
		':id' => $id,
		':cat' => $cat,
		':name' => $title,
		':description' => $description,
		':td_date' => $td_date,
	]);
	
	return $status;
}

function deleteToDo($username, $td_id) {
	global $dbh;
	$stmt = $dbh->prepare('DELETE FROM todo WHERE td_id = :td_id AND usr_username = :username');
	$status1 = $stmt->execute([
		':td_id' => $td_id,
		':username' => $username,
	]);

	$stmt = $dbh->prepare('DELETE FROM shared_with WHERE todo_id = :td_id AND usr_1 = :username');
	$status2 = $stmt->execute([
		':td_id' => $td_id,
		':username' => $username,
	]);

	return ($status1 && $status2);
}

function changeCheckTodo($username, $td_id, $check_value) {

	global $dbh;
	$stmt = $dbh->prepare('UPDATE todo SET td_check = :check_value WHERE td_id = :td_id AND usr_username = :username');
	$status = $stmt->execute([
		':td_id' => $td_id,
		':check_value' => $check_value,
		':username' => $username,
	]);
	return $status;

}

function getOneTodo($username, $td_id) {
	global $dbh;
	$stmt = $dbh->prepare("SELECT * FROM todo WHERE usr_username LIKE :username AND td_id = :td_id");
	$stmt->execute([
		':username' => $username,
		':td_id' => $td_id,
	]);

	return $stmt->fetchAll();
}

?>