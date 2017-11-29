<?php
	include_once('includes/init.php');


	if(!(isset($_SESSION['username']) && $_SESSION != ''))
	{
		header('location:login.php');
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

  <header>
    <div id="info">
      <!--img src="images/site/logo.svg"-->
      <h1><a href="index.php">ToDo List</a></h1>
	  <h2><a href="action_logout.php">Log Out</a></h2>
    </div>
  </header>

  <div class="vertical-menu">
    <h2>Categories</h2>
    <ul>
      <li><a href="?cat_id=1">Home</a></li>
      <li><a href="?cat_id=2">Work</a></li>
      <li><a href="?cat_id=3">Finances</a></li>
      <li><a href="?cat_id=4">Sport</a></li>
      <li><a href="?cat_id=5">Leisure</a></li>
      <li><a href="?cat_id=6">Beauty</a></li>
      <li><a href="?cat_id=7">Other</a></li>
    </ul>
  </div>

  <div class="todo">
    <article>
      <h2>Homework</h2>
      <p class="description">Computer network class</p>
      <p class="date">2017-11-23</p>
      <p class="categorie">Work</p>
      <p class="user">johnSnow</p>
    </article>
    <article>
      <h2>Ltw Project</h2>
      <p class="description">Make project for ltw class</p>
      <p class="date">2017-12-10</p>
      <p class="categorie">Work</p>
      <p class="user">johnSnow</p>
    </article>
      <article>
      <h2>Tax</h2>
      <p class="description">Pay the tax on finances</p>
      <p class="date">2017-11-31</p>
      <p class="categorie">Finances</p>
      <p class="user">johnSnow</p>
    </article>
    <article>
      <h2>Homework</h2>
      <p class="description">Computer network class</p>
      <p class="date">2017-11-29</p>
      <p class="categorie">Work</p>
      <p class="user">peterDink</p>
    </article>
    <article>
       <h2>Hair</h2>
      <p class="description">Go to the hairdresser</p>
      <p class="date">2017-11-23</p>
      <p class="categorie">Beauty</p>
      <p class="user">anaXpto</p>
    </article>
  </div>

  <footer>
    &copy; 2017 ToDo List
  </footer>

</body>
</html>


<?php
	}
?>