	<!DOCTYPE html>
	<html>
	<head>
		<title>ToDo List</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		  <link rel="icon" type="image/png" href="/images/icon.png" sizes="16x16">
		<link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		<img src="images/background2.jpg" id="bg" class="stretch" alt="">
		<section id="messages">
			<?php $errors = getErrorMessages();
			foreach ($errors as $error) { ?>
				<article class="error">
					<?php
					echo "<script type='text/javascript'>alert('$error');</script>";
					?> 
				</article>
				<?php } 
				clearMessages(); 
				?>
			</section>