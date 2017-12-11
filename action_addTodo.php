<?php
include_once('includes/init.php');
include_once('database/to_dos.php');

$title = $_POST['title'];
$category = $_POST['category'];
$td_date = $_POST['dateofactivity'];
$description= $_POST['description'];
$username = $_SESSION['username'];

if(!createToDo($username, $category, $title, $description, $td_date)){
	$_SESSION['error_messages'][] = "Error: add todo!";
}

header('location:index.php');
exit();

?>