<?php
	include_once('includes/init.php');
	session_unset();
	session_destroy();
	session_write_close();
	header('location:login.php'); 
?>