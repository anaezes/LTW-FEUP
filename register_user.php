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
	  <title>Sign Up</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="css/style.css">
	  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
	
		<div id="title">
			<h2>Todo List</h2>
			<h2>Sign Up</h2>
			<div id="container">
				<form action="action_register.php" method="POST">

					<label for="iuser"> Username: </label>
					<input type="text" id="iuser" name="username"/>
					<br>
					<br>
			
					<label for="ipass"> Password: </label>
					<input type="password" id="ipass" name="password"/>
					<br>
					<br>
					
					<label for="iname"> Name: </label>
					<input type="text" id="iname" name="name"/>
					<br>
					<br>
			
					<label for="iphoto"> Photo: </label>
					<input type="text" id="iphoto" name="photo"/>
					
					<br>
					<br>
					
					<div id="lower">
						<input type = "submit" value="Sign Up"/>
						<input type = "reset" value="Clear"/>
						<h4><a href="login.php">Login</a></h4>
					</div>

				</form>
			</div>
		</div>
	</body>

</html>


<?php
	}
?>