<?php
include_once('includes/init.php');

if(isset($_SESSION['username']) && $_SESSION != '')
{
	header('location:index.php');
}
else
{
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>ToDo List</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		<img src="images/background2.jpg" id="bg" alt="">
		<div id="register">
			<div class="form-1">

				<form action="action_register.php" method="POST">
					<p class="field">
						<label for="iuser"> Username: </label>
						<input type="text" id="iuser" name="username"/>
						<br>
						<br>
					</p>
					<p class="field">
						<label for="ipass"> Password: </label>
						<input type="password" id="ipass" name="password"/>
						<br>
						<br>
					</p>
					<p class="field">
						<label for="iname"> Name: </label>
						<input type="text" id="iname" name="name"/>
						<br>
						<br>
					</p>
					<p class="field">
						<label for="iphoto"> Choose Photo: </label>
						<input type="file" id="iphoto" name="photo"/>
						<br>
						<br>
					</p>
					
					<div class="regBottons">
						<ul>
							<input type = "reset" value="Clear"/>
							<input type = "submit" value="Register"/>
						</ul>
						<!--<a id="reg" href="registar.php">REGISTAR</a>-->
					</div>
			</form>
		</div>
	</div>
</body>

</html>


<?php
}
?>