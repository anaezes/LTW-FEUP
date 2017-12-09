<script src="javascript/addtodo.js" defer></script>
<link rel="stylesheet" href="css/style.css">
<div class="todo">

  <div class="addtodo">


    <form action="action_addTodo.php" method="POST">
      <p class="field">
        <label for="title"> Title </label>
        <input type="text" id="title" name="title" required />
        <span class="hint">Please, type a valid Title: First letter must be Uppercase.</span>
        <br>
        <br>
      </p>
      <p class="field">
        <label for="category">Category</label>
        <select id="category" name="category">

          <?php foreach ($categories as $category) { ?>
            <li><option value="<?=$category['cat_name']?>"> <?=$category['cat_name']?></li>
              <?php } ?>
            </select>
            <br>
            <br>
            <br>     
          <label id="descrip" for="description">Description</label>
          <p class="description">
            <textarea name="description" id="description" required ></textarea>
          </p>

          <label id="dateofactivitylabel" for="dateofactivity">Date </label>
          <input type="date" name="dateofactivity" id="dateofactivity" required />

          
          <div class="addToDoBottons">
            <ul>
              <input type = "submit" value="Add"/>
              <input type = "reset" value="Cancel" 
              onclick="window.location='index.php';return false;" />
            </ul>
          </div>
        </p>

      </div>
      
    </div>