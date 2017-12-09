let username = document.querySelector('.form-1 input[name=username]');
let msg = document.querySelector('.form-1 span[id=msg]');
username.addEventListener('keyup', validateUsername, false);

let password = document.querySelector('.form-1 input[name=password]');
let repeat = document.querySelector('.form-1 input[name=passwordr]');
password.addEventListener('keyup', validatePassword, false);
repeat.addEventListener('keyup', validateRepeat.bind(repeat, password), false);

let register = document.querySelector('.form-1 form');
register.addEventListener('submit', validateRegister, false);

function validateUsername() {
	
	let ajaxRequest = new XMLHttpRequest();
	ajaxRequest.onreadystatechange = function()
	{
		if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200)
		{
			let obj = JSON.parse(ajaxRequest.responseText);
			if(!/^[a-z]{3,}$/.test(username.value))
			{
				username.classList.add('invalid');
				msg.innerHTML = 'Only lowercase, at least 3 characters';
			}
			else if(obj.existe)
			{
				username.classList.add('invalid');
				msg.innerHTML = obj.string;
			}
			else
			{
				username.classList.remove('invalid');
			}
		}
	};
	
	// if (!/^[a-z]{3,}$/.test(this.value)){
	// this.classList.add('invalid');
	// }
	// else
	// {
	// this.classList.remove('invalid');
	// }


	ajaxRequest.open("GET", "register_ajax.php?user=" + username.value, true);
	ajaxRequest.send();
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
