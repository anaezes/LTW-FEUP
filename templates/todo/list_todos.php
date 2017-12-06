 <div class="todo">
  <div class ="add">
    <a href="../../../addTodo.php">Add To Do</a>
  </div>
  <div class = "todos">

    <?php foreach ($todos as $todo) { 
      $todo_id = $todo['td_id'];
      ?>
      <article class="dynamic-content" id="<?=$todo['cat_name']?><?=$todo['td_id']?>" >
        <p class="name">       <?=$todo['td_name']?> </p>
        <p class="description"><?=$todo['td_description']?></p>
        <p class="date"><?=$todo['td_date']?></p>
        <p class="categorie"><?=$todo['cat_name']?></p>

        <ul>
          <li>
           <form name="checkbox" action="action_check_todo.php" method="POST"> 
            <label> Done </label>
            <input type="checkbox" name="check" value="check" size="20" 
            <?php if($todo['td_check']) echo 'checked="checked"'; ?> 
          </form>
        </li>
        <li> 
          <i class="fa fa-trash-o" aria-hidden="true"></i>        </li>
        </ul>

      </article>
      <?php 
    } ?>
  </div>

</div>