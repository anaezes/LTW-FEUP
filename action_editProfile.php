<?php
	include_once('includes/init.php');
	include_once('database/user.php');


	$username = $_SESSION['username'];
	$name = $_POST['thename'];
	$cpassword = $_POST['cpass'];
	$npassword = $_POST['pass'];
	
	$file_name = $_FILES['photo']['name'];
	$file_type = $_FILES['photo']['type'];
	$file_size = $_FILES['photo']['size'];
	$file_tmp = $_FILES['photo']['tmp_name'];
	$final_dest = 'img/' . $username . '.png';
	
	$errorEmpty = false;
	$errorEmail = false;
	

	
	if (empty($name) || empty($cpassword) || empty($npassword) || !isLoginCorrect($username, $cpassword) || !($file_size < 500000 && $file_type == 'image/png')) {
		header('location:edit_profile.php');
		$errorEmpty = true;
		exit();
	}
	else 
	{
		move_uploaded_file($file_tmp, $final_dest);
		updateUser($username, $name);
		updatePassUser($username, $npassword);
		header('location: index.php'); 
		exit();
	}
?>
