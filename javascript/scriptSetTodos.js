
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
  $("#todos").load(location.href+" #todos>*","");  
} 


function shareTodo(event, todo_id) {
  if (confirm("Are you sure?")) {
  var friend = event.target.id;
    $.ajax({        
      url: 'action_share_todo.php',
      type: 'POST',             
      data: {todo_id: todo_id, friend: friend},
      error: function (request, error) {
        alert("já partilhado!!!!");
    },
   });  
  }
}