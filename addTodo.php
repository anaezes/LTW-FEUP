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

<div>
  <form action="index.php">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="Title...">

    <label for="description">Description</label>
	<textarea id="description" rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
</textarea>

    <label for="category">Category</label>
    <select id="category" name="category">
      <option value="home">Home</option>
      <option value="work">Work</option>
      <option value="finances">Finances</option>
	  <option value="sport">Sport</option>
	  <option value="leisure">Leisure</option>
	  <option value="beauty">Beauty</option>
	  <option value="other">Other</option>
    </select>
  
    <!--input type="submit" value="Submit" href="index.php"--> 
  </form>
</div>

	<div class ="Buttons">
		  <ul>
          <li><a href="index.php">Save</a></li>
          <li><a href="index.php">Return</a></li>
        </ul>
	</div>
	
</div>
  <footer>
    &copy; 2017 ToDo List
  </footer>

</body>
</html>
