<?php
include_once('includes/init.php');
include_once('database/to_dos.php');

$id_todo = $_GET['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$td_date = $_POST['dateofactivity'];
$description= $_POST['description'];
$username = $_SESSION['username'];

if(!updateToDo($username, $id_todo, $category, $title, $description, $td_date)){
	$_SESSION['error_messages'][] = "Error: edit todo!";
}

header('location:index.php');
exit();

?>