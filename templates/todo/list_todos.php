 <script src="javascript/scriptSetTodos.js" defer></script>

 <div class="todo">
  <div class ="add">
    <a href="addTodo.php">Add To Do</a>
  </div>
  <div class = "todos" id="todos">

    <?php foreach ($todos as $todo) { 
      $todo_id = $todo['td_id'];
      $todo_cat = $todo['cat_name'];
      $todo_check = $todo['td_check'];
      $todo_date = $todo['td_date'];
      ?>
      <article class="dynamic-content" id="<?=$todo_cat?><?=$todo_id?>" 
        <?php 
        if($todo['td_check'] == 1)
         echo "<body style='background-color:#F8F8FF'>";
       else if($todo['td_date'] < (new \DateTime())->format('Y-m-d'))
         echo "<body style='background-color:#c8c8ce; border:3px solid red'>";
       else  echo "<body style='background-color: #DFDFE5'>"; 
       ?>
       <p class="name">       <?=$todo['td_name']?> </p>
       <p class="description"><?=$todo['td_description']?></p>
       <p class="date"><?=$todo['td_date']?></p>
       <p class="categorie"><?=$todo['cat_name']?></p>

       <ul>
        <li>
         <form name="checkbox" action="javascript:void(0);" method="POST"> 
          <label> Done </label>
          <input type="checkbox"  id="check<?=$todo_id?>" name="check" value="check" onchange="changeCheck(event)" 
          <?php if($todo['td_check']) echo 'checked="checked"'; ?> 
        </form>
      </li>
      <li>  
       <a href="editTodo.php?id=<?=$todo_id?>" > <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
     </li>
     <li>
       <div class="dropdown" >
        <button class="dropbtn"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
        <div class="dropdown-content" style="left:0;">
                  <?php foreach ($friends as $friend) { ?>
                      <a href="#" onclick="shareTodo(event, <?=$todo_id?>)" id="<?=$friend['usr_2']?>"><?=$friend['usr_2']?> </a>
                      <?php } ?>
        </div>
      </div>
    </li>
    <li> 
      <button class="delBtn" onclick="deleteTodo(event)" id="del<?=$todo_id?>"> <i  class="fa fa-trash-o" ></i> </button>
    </li>
  </ul>

</article>
<?php 
} ?>
</div>

</div>