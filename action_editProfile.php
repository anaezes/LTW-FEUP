<?php
	include_once('includes/init.php');
	include_once('database/user.php');


	// if (isset($_POST['submit'])) 
	// {

		$username = $_SESSION['username'];
		$name = $_POST['name'];
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
			echo "<span class='form-error'>Fill in all fields!</span>";
			$errorEmpty = true;
			exit();
		}
		else 
		{
			// echo $file_tmp.'<br>';
			// echo $final_dest.'<br>';
			move_uploaded_file($file_tmp, $final_dest);
			updateUser($username, $name);
			updatePassUser($username, $npassword);
			header('location: index.php'); 
			exit();
		}

	//}
?>

<!--<script>
	// $("#name, #cipass, #ipass, #iphoto").removeClass( "input-error");

	// var errorEmpty = "";
	// var errorEmail = "";

	// if (errorEmpty == true){
	    // $("#name, #cipass, #ipass").addClass("input-error");
	// }
	// if (errorEmpty == false){
	    // $("#name, #cipass, #ipass, #iphoto").val('');
	// }

// $( "button" ).click(function() {
  // $( "p" ).empty();
// });
</script>
>>>>>>> Stashed changes
