<?php
function getListToDos($username)
{
	global $dbh;

	echo($username);
	$stmt = $dbh->prepare("SELECT * FROM todo 
		WHERE usr_username LIKE '%$username%'
		GROUP BY td_name");
	$stmt->execute();
	return $stmt->fetchAll();
}

function createToDo($username, $category, $title, $description, $td_date)
{
		global $dbh;
		$id_cat = $dbh->exec("SELECT cat_id FROM category
			WHERE cat_name LIKE '%category%'");

		$stmt = $dbh->prepare('INSERT INTO todo VALUES(NULL, :title, :description, :td_date, :id_cat, :user)');
		$stmt->execute([
			':title' => $title, 
			':description' => $description, 
			':td_date' => $td_date,
			':id_cat' => $id_cat,
			':user' => $username,
		]);
		return $stmt->fetch() !== false;
}

function updateToDos($username, $id_cat, $id_todo, $name, $description, $date)
{

}

function deleteToDos($username, $id_cat, $id_todo)
{

}


?>