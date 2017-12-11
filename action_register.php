<?php
	include_once('includes/init.php');
	include_once('database/user.php');
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$passwordr = $_POST['passwordr'];
	$name = $_POST['name'];
	
	$file_name = $_FILES['photo']['name'];
	$file_type = $_FILES['photo']['type'];
	$file_size = $_FILES['photo']['size'];
	$file_tmp = $_FILES['photo']['tmp_name'];
	$final_dest = 'img/' . $username . '.png';
	
	
	preg_match('/^[a-z]{3,}$/', $username, $matches);
	
	if(empty($matches))
	{
		header('location:register_user.php');
		exit();;
	}
	
	if(!($username == '' || $password == '' || $passwordr == '' || $name == '' || $file_name == ''))
	{
		if($file_size < 500000 && $file_type == 'image/png')
		{
			move_uploaded_file($file_tmp, $final_dest);
			if(!createUser($username, $password, $name)){
				
			}
				
		}
		else
		{
			header('location:register_user.php');
			exit();
		}		
			}
	}
	else
	{
		header('location:register_user.php');
		exit();
	}
	
	if(isLoginCorrect($username, $password))
	{
		setCurrentUser($username);
		$data = getUserData($username);
		$_SESSION['usr_name'] = $data[0]['usr_name'];
		if(addFirstCategories($username)){
			header('location:register_user.php');
			exit();
		}

	}

	header('location:index.php');
	exit();
		
?>