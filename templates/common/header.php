<!DOCTYPE html>
<html>

<head>
  <title> ToDo List</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="/images/icon.png" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <header>
    <div id="info">
      <img src="images/logo2_s.png">
    </div>
    <div class="logout">
	  <?php
		echo '<h4>'.$_SESSION['usr_name'].'</h4>'.'<img src="img/'.$_SESSION['username'].'.png" width="50" height="50">';
	  ?>
	  <br>
      <a href="action_logout.php">Log Out</a>
    </div>
    <div class="editProfile">
      <a href="edit_profile.php">Edit Profile</a>
    </div>
  </header>