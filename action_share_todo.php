<?php
include_once('includes/init.php');
include_once('database/to_dos.php');
include_once('database/friends.php');

$todo_id = $_POST['todo_id'];
$friend = $_POST['friend'];
if(!shareTodo($_SESSION['username'], $todo_id, $friend)) {
	echo "JÁ PARTILHADO";
}

header('location:index.php');
exit();

?>