const loginButton = document.getElementById('loginButton');
const registerButton = document.getElementById('registerButton');
const loginAndRegisterContent = document.querySelector('.login-and_register-content');

registerButton.addEventListener('click', () => {
	loginAndRegisterContent.classList.add('register-mode');
});

loginButton.addEventListener('click', () => {
	loginAndRegisterContent.classList.remove('register-mode');
});
