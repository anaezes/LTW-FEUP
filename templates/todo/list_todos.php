 <div class="todo">
  <div class ="add">
    <a href="../../../addTodo.php">Add To Do</a>
  </div>
  <div class = "todos" id="todos">

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
            <input type="checkbox"  id="check<?=$todo_id?>" name="check" value="check" onchange="changeCheck(event)" 
            <?php if($todo['td_check']) echo 'checked="checked"'; ?> 
          </form>
        </li>
        <li> 
          <a href="#" onclick="deleteTodo(event, <?=$todo_id?>)" > <i  class="fa fa-trash-o"></i> </a>
        </li>
      </ul>

    </article>
    <?php 
  } ?>
</div>

</div>


<script>

function deleteTodo(event, todo_id) {

    if (confirm("Are you sure?")) {
        $.ajax({        
            url: 'action_delete_todo.php',
            type: 'POST',             
            data: {todo_id: todo_id}
        });  
        $("#todos").load(location.href+" #todos>*","");  
    }
}

  function changeCheck(event) {

    var aux_id = (event.target.id).split(/(\d+)/);
    var todo_id = aux_id[1];
    var value = 0;
    if (event.target.checked)
      value = 1;
    
    $.ajax( {
      url: 'action_check_todo.php',
      method: 'POST',
      data: { todo_id: todo_id, chkvalue: value}
    } );
  } 

</script>