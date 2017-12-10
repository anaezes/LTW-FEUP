
var modal2 = document.getElementById('myModal2');
var addFriend = document.getElementById("addFriend");
var span2 = document.getElementsByClassName("close2")[0];

addFriend.onclick = function() {
  modal2.style.display = "block";
}

span2.onclick = function() {
  modal2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}



var modal3 = document.getElementById('myModal3');
var friendTodos = document.getElementById("friendTodos");
var span3 = document.getElementsByClassName("close3")[0];

friendTodos.onclick = function() {
  modal3.style.display = "block";
}

span3.onclick = function() {
  modal3.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}