<?php
include_once('includes/init.php');
include_once('database/category.php');

$category = $_POST['NewCategory'];
$color = $_POST['Color'];


if(!addCategory($_SESSION['username'], $category, $color)) {
	$_SESSION['error_messages'][] = "Error: add category!";
}

header('location:index.php');
exit();

?>