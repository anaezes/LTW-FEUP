<?php
include_once('includes/init.php');
include_once('database/friends.php');

$friend = $_POST['friend'];

if(!addFriend($_SESSION['username'], $friend)) {
}

header('location:friends.php');
exit();

?>