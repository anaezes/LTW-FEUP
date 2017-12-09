let title = document.querySelector('.addtodo input[name=title]');
title.addEventListener('keyup', validateTitle, false);

let textarea = document.querySelector('.addtodo textarea[name=description]');
textarea.addEventListener('keyup', validateTextArea, false);

let register = document.querySelector('.addtodo form');
register.addEventListener('submit', validateTodo, false);

function validateTitle() {
  if (/^[A-Z][A-Za-z0-9_-]{3,19}$/.test(this.value)){
    this.classList.remove('invalid');
  }
  else
    this.classList.add('invalid');
}

function validateTextArea() {
  if (/^[A-Z][A-Za-z0-9_-]{3,19}$/.test(this.value)){
    this.classList.remove('invalid');
  }
  else
    this.classList.add('invalid');
}


function validateTodo(event) {
  let inputs = this.querySelectorAll('input');
  for (let i = 0; i < inputs.length; i++)
    if (inputs[i].classList.contains('invalid'))
     event.preventDefault();
}
