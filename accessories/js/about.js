const navbarButtons = document.querySelectorAll('.navigation-about li a');
const aboutBoxText = document.querySelectorAll('.about-us_section-text');

const handleActive = (e) => {
	const clickedItem = e.target.parentNode;

	for (let i = 0; i < navbarButtons.length; i++) {
		navbarButtons[i].classList.contains('active') && navbarButtons[i].classList.remove('active');
		aboutBoxText[i].classList.contains('active') && aboutBoxText[i].classList.remove('active');
		aboutBoxText[i].classList.contains('animate__bounceInLeft') && aboutBoxText[i].classList.remove('animate__bounceInLeft');

		if (navbarButtons[i].textContent == clickedItem.textContent) {
			aboutBoxText[i].classList.toggle('active');
			aboutBoxText[i].classList.toggle('animate__bounceInLeft');
			clickedItem.classList.toggle('active');
		}
	}
};

for (let i = 0; i < navbarButtons.length; i++) {
	navbarButtons[i].addEventListener('click', (e) => handleActive(e));
}
