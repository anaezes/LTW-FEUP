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

          <?php foreach ($categories as $category) { ?>
            <li><option value=$category['cat_name']> <?=$category['cat_name']?></li>
              <?php } ?>
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