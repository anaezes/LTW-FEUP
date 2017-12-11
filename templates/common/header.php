<?php
include_once('includes/init.php');

if(!isset($_SESSION['username']))
{
	header('location:page.php');
	exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title> ToDo List</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="/images/icon.png" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
      <section id="messages">
      <?php $errors = getErrorMessages();foreach ($errors as $error) { ?>
      <article class="error">
        <?php echo '<script type="text/javascript">alert("' . $error . '")</script>'; ?>
      </article>
      <?php }
      clearMessages(); ?>
    </section>