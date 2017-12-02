 <div class="todo">
      <div class ="add">
    <a href="../../../addTodo.php">Add To Do</a>
  </div>

<?php foreach ($todos as $todo) { ?>
    <article>
      <h2><?=$todo['td_name']?></h2>
      <p class="description"><?=$todo['td_description']?></p>
      <p class="date"><?=$todo['td_date']?></p>
      <p class="categorie"><?=$todo['cat_id']?></p>
      <p class="user"><?=$todo['usr_username']?></p>
    </article>
<?php } ?>
    
  </div>