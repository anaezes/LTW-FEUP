<?php
include_once('includes/init.php');

if(isset($_SESSION['username']) && $_SESSION != '')
{
	header('location:index.php');
}
else
{

	include_once('templates/init/common.php');
	include_once('templates/init/login.php');
}
?>