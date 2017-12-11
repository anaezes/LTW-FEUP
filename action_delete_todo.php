<?php
include_once('includes/init.php');
include_once('database/to_dos.php');

$todo_id = $_POST['todo_id'];

if(!deleteToDo($_SESSION['username'], $todo_id)) {
}

header('location:index.php');
exit();

?>