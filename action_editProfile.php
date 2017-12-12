<?php
	include_once('includes/init.php');
	include_once('database/user.php');


	$username = $_SESSION['username'];
	$name = $_POST['thename'];
	$cpassword = $_POST['cpass'];
	$npassword = $_POST['pass'];
	$npasswordr = $_POST['passr'];
	
	$file_name = $_FILES['photo']['name'];
	$file_type = $_FILES['photo']['type'];
	$file_size = $_FILES['photo']['size'];
	$file_tmp = $_FILES['photo']['tmp_name'];
	$final_dest = 'img/' . $username . '.png';
	
	$errorEmpty = false;
	$errorEmail = false;
	$errorMessage = false;

	//alterar só pass : se nome==vazio && cpassword!=vazio && npassword!=vazio && npasswordr!=vazio && $file_name=vazio
	if (empty($name) && !empty($cpassword) && !empty($npassword) && !empty($npasswordr) && isLoginCorrect($username, $cpassword) && empty($file_name) )
	{
		updatePassUser($username, $npassword);
		header('location: index.php'); 
		exit();
	}

	//alterar só nome: se nome!=vazio && cpassword!=vazio && npassword==vazio && npasswordr==vazio && $file_name=vazio
	else if (!empty($name) && !empty($cpassword) && empty($npassword) && empty($npasswordr) && isLoginCorrect($username, $cpassword) && empty($file_name) )
	{
		updateUser($username, $name);
		header('location: index.php'); 
		exit();
	}

	//alterar nome & pass: se nome!=vazio && cpassword!=vazio && npassword!=vazio && npasswordr!=vazio && $file_name=vazio
	else if (!empty($name) && !empty($cpassword) && !empty($npassword) && !empty($npasswordr) && isLoginCorrect($username, $cpassword) && empty($file_name) )
	{
		updateUser($username, $name);
		updatePassUser($username, $npassword);
		header('location: index.php'); 
		exit();
	}

	//alterar só imagem: sse nome=vazio && cpassword!=vazio && npassword=vazio && npasswordr=vazio && $file_name!=vazio
	else if (empty($name) && !empty($cpassword) && empty($npassword) && empty($npasswordr) && isLoginCorrect($username, $cpassword) && ($file_size < 500000 && $file_type == 'image/png') )
	{
		move_uploaded_file($file_tmp, $final_dest);
		header('location: index.php'); 
		exit();
	}

	//alterar nome & imagem: se nome!=vazio && cpassword!=vazio && npassword=vazio && npasswordr=vazio && $file_name!=vazio
	else if (!empty($name) && !empty($cpassword) && empty($npassword) && empty($npasswordr) && isLoginCorrect($username, $cpassword) && ($file_size < 500000 && $file_type == 'image/png') )
	{
		updateUser($username, $name);
		move_uploaded_file($file_tmp, $final_dest);
		header('location: index.php'); 
		exit();
	}

	//alterar imagem & pass: se nome==vazio && cpassword!=vazio && npassword!=vazio && npasswordr!=vazio && $file_name!=vazio
	else if (empty($name) && !empty($cpassword) && !empty($npassword) && !empty($npasswordr) && isLoginCorrect($username, $cpassword) && ($file_size < 500000 && $file_type == 'image/png') )
	{
		updatePassUser($username, $npassword);
		move_uploaded_file($file_tmp, $final_dest);
		header('location: index.php'); 
		exit();
	}

	//alterar tudo: se nome!=vazio && cpassword!=vazio && npassword!=vazio && npasswordr!=vazio && $file_name!=vazio
	else if (!empty($name) && !empty($cpassword) && !empty($npassword) && !empty($npasswordr) && isLoginCorrect($username, $cpassword) && ($file_size < 500000 && $file_type == 'image/png') )
	{
		updateUser($username, $name);
		updatePassUser($username, $npassword);
		move_uploaded_file($file_tmp, $final_dest);
		header('location: index.php'); 
		exit();
	}

	else {
		header('location:edit_profile.php');
		$errorEmpty = true;
		$_SESSION['error_messages'][] = "Error: Invalid Credentials";
		exit();
	}


?>
