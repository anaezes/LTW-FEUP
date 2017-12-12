
let category = document.querySelector('.addCat input[name=NewCategory]');
category.addEventListener('keyup', validateCategory, false);

let catform = document.querySelector('.addCat form');
catform.addEventListener('submit', validateCat, false);

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

  if(window.location.pathname !== "/index.php")
    window.location.href = "index.php";
  
  // Give the parameter a variable name
  let cat = event.target.innerText;
  
  let x = document.getElementsByClassName("dynamic-content");

  if(cat == 'All')
    for(var i = 0; i < x.length; i++)
      $('#'+x[i].id).show();
    else {
      for(var i = 0; i < x.length; i++){
        if ((x[i].id).indexOf(cat) !== -1)
          $('#'+x[i].id).show();
        else
          $('#'+x[i].id).hide();
     }
   }
 }

 function validateCategory() {
  if (/^[A-Z][A-Za-z0-9_-]{1,19}$/.test(this.value))
    this.classList.remove('invalid');
  else
    this.classList.add('invalid');
}


function validateCat(event) {
  let inputs = this.querySelectorAll('input');
  for (let i = 0; i < inputs.length; i++)
    if (inputs[i].classList.contains('invalid'))
     event.preventDefault();
 }

