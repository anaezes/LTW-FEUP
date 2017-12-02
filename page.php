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
   <link rel="icon" type="image/png" href="/images/icon.png" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <img src="images/background2.jpg" id="bg" alt="">
  <div class = 'init'>
	<div class ="startButtons">
		  <ul>
          <li><a href="login.php">Login</a></li>
          <li><a href="register_user.php">Register</a></li>
        </ul>
	</div>
</div>
</body>

</html>
<?php
}
?>