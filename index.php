
<?php
	include_once('includes/init.php');
  include_once('database/category.php');
  include_once('templates/common/header.php');


  $categories = getAllCategories();

  include_once('templates/category/list_categories.php');

if(isset($_SESSION['username']) && $_SESSION != '') {
?>

  <div class="todo">
      <div class ="add">
    <a href="addTodo.php">Add To Do</a>
  </div>
  
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

<?php
} else
    header('location:page.php');
?>