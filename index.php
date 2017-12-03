
<?php
include_once('includes/init.php');
include_once('database/category.php');
include_once('database/to_dos.php');
include_once('templates/common/header.php');

$categories = getAllCategories($_SESSION['username']);
$todos = getListToDos($_SESSION['username']);

include_once('templates/category/list_categories.php');
include_once('templates/todo/list_todos.php');

if(!(isset($_SESSION['username']) && $_SESSION != ''))
  header('location:page.php');
?>