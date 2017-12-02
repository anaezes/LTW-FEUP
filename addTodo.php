<?php
  include_once('includes/init.php');
  include_once('database/category.php');
  include_once('templates/common/header.php');

  $categories = getAllCategories();

  include_once('templates/category/list_categories.php');
    if(isset($_SESSION['username']) && $_SESSION != '') {
?>


<div class="todo">

    <div class="addtodo">


        <form action="action_addTodo.php" method="POST">
        <p class="field">
            <label for="title"> Title </label>
            <input type="text" id="title" name="title"/>
            <br>
            <br>
        </p>
        <p class="field">
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
        </p>

       <label for="description">Description</label>
        <p class="field">
          <textarea name="description" id="description" >
          </textarea>
        </p>

          <label for="dateofactivity">Date Of Activity</label>
          <input type="date" name="dateofactivity" id="dateofactivity"/>

          
          <div class="addToDoBottons">
            <ul>
              <input type = "submit" value="Add"/>
              <input type = "reset" value="Cancel"/>
            </ul>

          </div>


      </form>

  </div>
	
</div>
 <?php
} else
    header('location:page.php');
?>
