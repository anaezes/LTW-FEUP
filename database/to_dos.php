<?php
function getListToDos($username, $id_cat)
{
	global $dbh;
	$stmt = $dbh->prepare("SELECT * FROM todo 
		--WHERE usr_username = '%$username%'-- 
		GROUP BY td_name");
	$stmt->execute();
	return $stmt->fetchAll();
}

function createToDos($username, $id_cat, $id_todo, $name, $description, $date)
{

}

function updateToDos($username, $id_cat, $id_todo, $name, $description, $date)
{

}

function deleteToDos($username, $id_cat, $id_todo)
{

}


?>