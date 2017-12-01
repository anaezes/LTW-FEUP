<?php
	include_once('includes/init.php');
	include_once('database/user.php');
	
	$title = $_POST['title'];
	$category = $_POST['category'];
	$date = $_POST['dateofactivity'];
 	$description= $_POST['description'];
	
/*	
Inserir na Base de Dados

	if(createTodo($title, $category, $date, $description))
	{
		header('location:addTodo.php');
		exit();
	}
	
	header('location:addTodo.php');
	exit();
*/

?>