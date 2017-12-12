let title = document.querySelector('.addtodo input[name=title]');
title.addEventListener('keyup', validateTitle, false);

let textarea = document.querySelector('.addtodo textarea[name=description]');
textarea.addEventListener('keyup', validateTextArea, false);

let addsometodo = document.querySelector('.addtodo form');
addsometodo.addEventListener('submit', validateTodo, false);

let descripttext = document.querySelector('.addtodo form');
descripttext.addEventListener('submit', validateTodoDescript, false);

function validateTitle() {
  if (/^\w+( +\w+)*$/.test(this.value)){
    this.classList.remove('invalid');
  }
  else
    this.classList.add('invalid');
}

function validateTextArea() {
  if (/^[a-zA-Z0-9._-]+([ a-zA-Z0-9._-\s\S]+)*$/.test(this.value)){
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


function validateTodoDescript(event) {
  let textareas = this.querySelectorAll('textarea');
  for (let j = 0; j < textareas.length; j++)
    if (textareas[j].classList.contains('invalid'))
     event.preventDefault();
  }