let username = document.querySelector('#editProfile input[name=thename]');
username.addEventListener('keyup', validateUsername, false);

let password = document.querySelector('#editProfile input[name=pass]');
let repeat = document.querySelector('#editProfile input[name=passr]');
password.addEventListener('keyup', validatePassword, false);
repeat.addEventListener('keyup', validateRepeat.bind(repeat, password), false);

let register = document.querySelector('#editProfile form');
register.addEventListener('submit', validateRegister, false);

function validateUsername() {
  if (/^\w+( +\w+)*$/.test(this.value)){
    this.classList.remove('invalid');
  }
  else
    this.classList.add('invalid');
}

function validatePassword(other) {
  if (!/^.*(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9]).{8,}$/.test(this.value))
    this.classList.add('invalid');
  else
    this.classList.remove('invalid');
}

function validateRepeat(password) {
  if (this.value !== password.value)
    this.classList.add('invalid');
  else
    this.classList.remove('invalid');
}

function validateRegister(event) {
  let inputs = this.querySelectorAll('input');
  for (let i = 0; i < inputs.length; i++)
    if (inputs[i].classList.contains('invalid'))
     event.preventDefault();
}
