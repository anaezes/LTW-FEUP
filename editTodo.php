<?php
include_once('includes/init.php');
include_once('database/category.php');
include_once('database/to_dos.php');
include_once('templates/common/header.php');
include_once('templates/common/logo.php');

$categories = getAllCategories($_SESSION['username']);
$todo_aux = getOneTodo($_SESSION['username'], $_GET['id']);
$todo = $todo_aux[0];

$todo_id = $todo['td_id'];
$todo_name = $todo['td_name'];
$todo_cat = $todo['cat_name'];
$todo_description = $todo['td_description'];
$todo_date = $todo['td_date'];

include_once('templates/category/list_categories.php');
include_once('templates/todo/edit_todo.php');

if(!(isset($_SESSION['username']) && $_SESSION != ''))
  header('location:page.php');
?>