const navigationMenu = document.getElementById('navigationMenu');
const btnBars = document.getElementById('btnBars');
const check = document.getElementById('check');
const navigation = document.getElementById('navigation');
const websiteSection = navigationMenu.querySelectorAll('.website-section');

// Navbar Scroll Effect
window.onscroll = () => {
	if (window.scrollY >= 40) {
		navigationMenu.classList.add('navbar-container_scroll');
	} else {
		navigationMenu.classList.remove('navbar-container_scroll');
	}
};

// Navbar Responsive
btnBars.addEventListener('click', () => {
	check.click();
	if (check.checked) {
		navigation.classList.remove('animate__backOutLeft');
		navigation.classList.add('show-menu');
		navigation.classList.add('animate__backInRight');
	} else {
		navigation.classList.add('animate__backOutLeft');
		navigation.classList.remove('animate__backInRight');
		navigation.classList.remove('show-menu');
	}
});

// Hide Navbar Responsive
if (screen.width <= 980) {
	for (let i = 0; i < websiteSection.length; i++) {
		websiteSection[i].addEventListener('click', () => btnBars.click());
	}
}
