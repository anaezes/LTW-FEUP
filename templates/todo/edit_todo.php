<script src="javascript/addtodo.js" defer></script>
<div class="todo">
  <div class="addtodo">
    <form action="action_editTodo.php?id=<?=$todo_id?>" method="POST">
      <p class="field">
        <label for="title"> New title </label>
        <input type="text" id="title" name="title" value="<?php echo $todo_name ?>" required />
        <span class="hint">First letter must be Uppercase. At least 2 characters.</span>
        <br>
        <br>
      </p>
      <p class="field">
        <label for="category">New category</label>
         <select id="category" name="category">

          <?php foreach ($categories as $category) { ?>
            <li><option 
              <?php 
              if($category['cat_name'] == $todo_cat)
                echo 'selected="<?=$todo_cat?>"' ;?>
              value="<?=$category['cat_name']?>"> <?=$category['cat_name']?></li>
              <?php } ?>
            </select>
            <br>
            <br>
            <br>     
          <label id="descrip" for="description">New description</label>
          <p class="description">
            <textarea name="description" id="description" required > <?php echo $todo_description ?>
            </textarea>
          </p>

          <label id="dateofactivitylabel" for="dateofactivity">New date </label>
          <input type="date" name="dateofactivity" id="dateofactivity" value="<?php echo $todo_date ?>" required />

          
          <div class="addToDoBottons">
            <ul>
              <input type = "submit" value="Save"/>
              <input type = "reset" value="Cancel" 
              onclick="window.location='index.php';return false;" />
            </ul>
          </div>
        </p>

      </div>
      
    </div>