 <div class="todo">
  <div class ="add">
    <a href="../../../addTodo.php">Add To Do</a>
  </div>
  <div class = "todos">

    <?php foreach ($todos as $todo) { 
      $todo_id = $todo['td_id'];
      $todo_cat = $todo['cat_name'];
      ?>
      <article class="dynamic-content" id="<?=$todo_cat?><?=$todo_id?>" >
        <p class="name">       <?=$todo['td_name']?> </p>
        <p class="description"><?=$todo['td_description']?></p>
        <p class="date"><?=$todo['td_date']?></p>
        <p class="categorie"><?=$todo['cat_name']?></p>

        <ul>
          <li>
           <form name="checkbox" action="action_check_todo.php" method="POST"> 
            <label> Done </label>
            <input type="checkbox"  id="<?=$todo_id?>" name="check" value="check" onchange="changeCheck(event)" 
            <?php if($todo['td_check']) echo 'checked="checked"'; ?> 
          </form>
        </li>
        <li> 
          <i class="fa fa-trash-o" aria-hidden="true"></i>        
        </li>
      </ul>

    </article>
    <?php 
  } ?>
</div>

</div>


<script>

  function changeCheck(event) {

    var todo_id = event.target.id;

    var check_value = event.target;
    var value = 0;
    if (check_value.checked)
      value = 1;
    
    $.ajax( {
      url: 'action_check_todo.php',
      method: 'POST',
      data: { todo_id: todo_id, chkvalue: value}
    } );

  } 

</script>