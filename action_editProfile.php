<?php
	include_once('includes/init.php');
	include_once('database/user.php');
if (isset($_POST['submit'])) {

	$username = $_SESSION['username'];
	$name = $_POST['name'];
	$cpassword = $_POST['cipass'];
	$npassword = $_POST['ipass'];
	$photo = $_POST['iphoto'];

	$errorEmpty = false;
	$errorEmail = false;

	if (empty($name) || empty($cpassword) || empty($npassword) || !isLoginCorrect($username, $cpassword) ) {
		echo "<span class='form-error'>Fill in all fields!</span>";
		$errorEmpty = true;
	}
	else {
		updateUser($username, $name, $photo);
		updatePassUser($username, $npassword);
		exit();
		header('location: login.php'); 
		echo "<span class='form-success'>All changes saved!</span>";
	}

}
?>

<script>
	$("#name, #cipass, #ipass, #iphoto").removeClass( "input-error");

	var errorEmpty = "<?php echo $errorEmpty; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";

	if (errorEmpty == true){
	    $("#name, #cipass, #ipass").addClass("input-error");
	}
	if (errorEmpty == false){
	    $("#name, #cipass, #ipass, #iphoto").val('');
	}

$( "button" ).click(function() {
  $( "p" ).empty();
});
</script>