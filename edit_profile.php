<?php
include_once('includes/init.php');
include_once('database/category.php');
include_once('templates/common/header.php');
include_once('templates/common/logo.php');

$categories = getAllCategories($_SESSION['username']);

include_once('templates/category/list_categories.php');
include_once('templates/user/editUser.php');

if(!(isset($_SESSION['username']) && $_SESSION != ''))
  header('location:page.php');
?>
