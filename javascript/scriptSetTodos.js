
function deleteTodo(event) {

  if (confirm("Are you sure?")) {
    let aux_id = (event.target.id).split(/(\d+)/);
    let todo_id = aux_id[1];

    let http = new XMLHttpRequest();
    let params = "todo_id=" + todo_id;
    http.open("POST", "action_delete_todo.php", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(params);
    $("#todos").load(location.href+" #todos>*",""); 
  }
}

function changeCheck(event) {

  let aux_id = (event.target.id).split(/(\d+)/);
  let todo_id = aux_id[1];
  let chkvalue = 0;
  if (event.target.checked)
    chkvalue = 1;

  let http = new XMLHttpRequest();
  let params = "todo_id=" + todo_id + "&" + "chkvalue=" + chkvalue ;
  http.open("POST", "action_check_todo.php", true);
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.send(params);
  $("#todos").load(location.href+" #todos>*",""); 
} 


function shareTodo(event, todo_id) {

  if (confirm("Are you sure?")) {
    let friend = event.target.id;
    let request = new XMLHttpRequest();
    let params = "todo_id=" + todo_id + "&" + "friend=" + friend;
    request.open("POST", "action_share_todo.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send(params);
  }
}