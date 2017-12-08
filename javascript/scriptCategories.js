
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("AddCatBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function selectCat(event){

  // Give the parameter a variable name
  var cat = event.target.innerText;
  
  var x = document.getElementsByClassName("dynamic-content");

  console.log(x);
  console.log(x.length);

  if(cat == 'All'){
    for(var i = 0; i < x.length; i++)
    {
      console.log(x[i].id);
      $('#'+x[i].id).show();
    }
  }
  else {
    for(var i = 0; i < x.length; i++){
      if ((x[i].id).indexOf(cat) !== -1)
        $('#'+x[i].id).show();
      else
       $('#'+x[i].id).hide();
   }

 }
}
