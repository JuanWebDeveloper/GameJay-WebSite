let cm = document.getElementById('cm');
let modalLogin = document.getElementById('modalLogin');
let modalRegistration = document.getElementById('modalRegistration');
let recoverPasswordLink = document.getElementById('recoverPasswordLink');

let recoverPassword = document.getElementById('recoverPassword');
let login = document.getElementById('login');
let registration = document.getElementById('registration');

modalLogin.style.color = '#fff';
modalRegistration.style.color = '#0077ff';

registration.classList.add('hide-registration');
recoverPassword.classList.add('hide-recover_password');

// Functions
modalLogin.addEventListener('click', () => {
	modalLogin.style.color = '#fff';
	modalRegistration.style.color = '#0077ff';
	cm.style.left = '0%';

	registration.classList.remove('show-registration');
	registration.classList.add('hide-registration');

	recoverPassword.classList.remove('show-recover_password');
	recoverPassword.classList.add('hide-recover_password');

	login.classList.remove('hide-login');
	login.classList.add('mostrar-login');
});

modalRegistration.addEventListener('click', () => {
	modalLogin.style.color = '#0077ff';
	modalRegistration.style.color = '#fff';
	cm.style.left = '40%';

	recoverPassword.classList.remove('mostrar-recover_password');
	recoverPassword.classList.add('hide-recover_password');

	login.classList.remove('show-login');
	login.classList.add('hide-login');

	registration.classList.remove('hide-registration');
	registration.classList.add('mostrar-registration');
});

recoverPasswordLink.addEventListener('click', () => {
	recoverPassword.classList.remove('hide-recover_password');
	recoverPassword.classList.add('mostrar-recover_password');

	login.classList.remove('show-login');
	login.classList.add('hide-login');

	registration.classList.remove('show-registration');
	registration.classList.add('hide-registration');
});
