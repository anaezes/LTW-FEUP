
function deleteTodo(event) {

  if (confirm("Are you sure?")) {
    let aux_id = (event.target.id).split(/(\d+)/);
    let todo_id = aux_id[1];

    let request = new XMLHttpRequest();
    let params = "todo_id=" + todo_id;
    request.open("POST", "action_delete_todo.php", true);

    request.onreadystatechange = function(){
      if (request.readyState == 4 && request.status == 200){
        try {
          JSON.parse(this.responseText);
          alert(this.responseText);
        } catch (e) {
        console.log("Error: Json parse " + e);
    }         
  }
};

request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
request.send(params);
$("#todos").load(location.href+" #todos>*",""); 
  }
}

function changeCheck(event) {

  let aux_id = (event.target.id).split(/(\d+)/);
  let todo_id = aux_id[1];
  let chkvalue = 0;
  if (event.target.checked)
    chkvalue = 1;

  let request = new XMLHttpRequest();
  let params = "todo_id=" + todo_id + "&" + "chkvalue=" + chkvalue ;
  request.open("POST", "action_check_todo.php", true);

  request.onreadystatechange = function(){
    if (request.readyState == 4 && request.status == 200){
      try {
        JSON.parse(this.responseText);
        alert(this.responseText);
      } catch (e){
      //sucess - do noting
    }         
  }
};

request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
request.send(params);
$("#todos").load(location.href+" #todos>*",""); 
} 


function shareTodo(event, todo_id) {

  if (confirm("Are you sure?")) {
    let friend = event.target.id;
    let request = new XMLHttpRequest();
    let params = "todo_id=" + todo_id + "&" + "friend=" + friend;
    request.open("POST", "action_share_todo.php", true);

    request.onreadystatechange = function(){
      if (request.readyState == 4 && request.status == 200){
        try { //error
          JSON.parse(this.responseText);
          alert(this.responseText);
        } catch (e) {
         console.log("Error: Json parse " + e);
       }         
     }
   };

   request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   request.send(params);
 }
}