<?php
include_once('includes/init.php');
include_once('database/friends.php');

$friend = $_POST['friend'];

if(!addFriend($_SESSION['username'], $friend))
	$_SESSION['error_messages'][] = "Error: add Friend!";

header('location:friends.php');
exit();

?>