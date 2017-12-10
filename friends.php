<?php
include_once('includes/init.php');
include_once('database/category.php');
include_once('database/to_dos.php');
include_once('database/friends.php');
include_once('templates/common/header.php');
include_once('templates/common/logo.php');

$categories = getAllCategories($_SESSION['username']);
$todos = getListToDos($_SESSION['username']);
$friends = getListFriends($_SESSION['username']);
$users = getAllUsers($_SESSION['username']);

include_once('templates/category/list_categories.php');
include_once('templates/user/view_user.php');
include_once('templates/user/view_friends.php');

if(!(isset($_SESSION['username']) && $_SESSION != ''))
  header('location:page.php');
?>