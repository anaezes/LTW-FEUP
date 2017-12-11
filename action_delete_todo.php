<?php
include_once('includes/init.php');
include_once('database/to_dos.php');

$todo_id = $_POST['todo_id'];

try{
	deleteToDo($_SESSION['username'], $todo_id);
	$msg = "Sucess!";
	echo json_encode($msg);
} catch(Exception $e){
	$msg = "An error has occurred..";
	echo json_encode($msg);
}

exit();

?>