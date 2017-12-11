<?php
include_once('includes/init.php');
include_once('database/to_dos.php');
include_once('database/friends.php');

$todo_id = $_POST['todo_id'];
$friend = $_POST['friend'];

try{
	shareTodo($_SESSION['username'], $todo_id, $friend);
	$msg = "Shared!";
	echo json_encode($msg);
} catch(Exception $e){
	$msg = "Already shared! ";
	echo json_encode($msg);
}

exit();

?>