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
		<link rel="stylesheet">
	</head>

	<body>
	
		<div id="title">
			<h2>Todo List</h2>
			<div id="container">
				<form action="action_login.php" method="POST">

					<label for="iuser"> Username: </label>
					<input type="text" id="iuser" name="username"/>

					<label for="ipass"> Password: </label>
					<input type="password" id="ipass" name="password"/>
					
					<div id="lower">
						<input type = "submit" value="Entrar"/>
						<input type = "reset" value="Limpar"/>
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