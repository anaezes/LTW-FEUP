 <div class="todo">
  <div class ="add">
    <a href="../../../addTodo.php">Add To Do</a>
  </div>
  <div class = "todos">

  <?php foreach ($todos as $todo) { 
    ?>
    <article class="dynamic-content" id="<?=$todo['cat_name']?><?=$todo['td_id']?>" >
      <p class="name">       <?=$todo['td_name']?> </p>
      <p class="description"><?=$todo['td_description']?></p>
      <p class="date"><?=$todo['td_date']?></p>
      <p class="categorie"><?=$todo['cat_name']?></p>
    </article>
    <?php 
  } ?>
</div>
    
</div>