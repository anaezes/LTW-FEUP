<?php
function getListToDos($username)
{
		global $dbh;
		$stmt = $dbh->prepare("SELECT * FROM todo WHERE usr_username LIKE :username GROUP BY td_name");
		$stmt->execute([
    		':username' => $username,
  		]);

		return $stmt->fetchAll();
}

function createToDo($username, $category, $title, $description, $td_date)
{
		global $dbh;

		$stmt = $dbh->prepare('INSERT INTO todo VALUES(NULL, :title, :description, :td_date, :cat_name, :user)');
		$stmt->execute([
			':title' => $title, 
			':description' => $description, 
			':td_date' => $td_date,
			':cat_name' => $category,
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