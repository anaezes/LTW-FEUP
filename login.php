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
	  <title>Login</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="css/style.css">
	  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
	
		<div id="title">
			<h2>Todo List</h2>
			<h2>Login</h2>
			<div id="container">
				<form action="action_login.php" method="POST">

					<label for="iuser"> Username: </label>
					<input type="text" id="iuser" name="username"/>

					<br>
					<br>
					
					<label for="ipass"> Password: </label>
					<input type="password" id="ipass" name="password"/>
					
					<br>
					<br>
					
					<div id="lower">
						<input type = "submit" value="Login"/>
						<input type = "reset" value="Clear"/>
						<h4><a href="register_user.php">Sign Up</a></h4>
					</div>

				</form>
			</div>
		</div>
	</body>

</html>

<?php
	}
?>