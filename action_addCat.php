<?php
include_once('includes/init.php');
include_once('database/category.php');

$category = $_POST['NewCategory'];


if(!addCategory($_SESSION['username'], $category)) {
}

header('location:index.php');
exit();

?>