<?php
include_once('includes/init.php');
include_once('database/to_dos.php');

$value = $_POST['chkvalue'];
$todo_id = $_POST['todo_id'];

try{
	changeCheckTodo($_SESSION['username'], $todo_id, $value);
} catch(Exception $e){
	echo json_encode($e);
}

exit();

?>