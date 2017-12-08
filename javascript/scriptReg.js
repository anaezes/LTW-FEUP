let username = document.querySelector('.form-1 input[name=username]');
username.addEventListener('keyup', validateUsername, false);

let password = document.querySelector('.form-1 input[name=password]');
let repeat = document.querySelector('.form-1 input[name=passwordr]');
password.addEventListener('keyup', validatePassword, false);
repeat.addEventListener('keyup', validateRepeat.bind(repeat, password), false);

let register = document.querySelector('.form-1 form');
register.addEventListener('submit', validateRegister, false);

function validateUsername() {
  if (!/^[a-z]{3,}$/.test(this.value)){
    this.classList.add('invalid');
  }
  else
    this.classList.remove('invalid');
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
