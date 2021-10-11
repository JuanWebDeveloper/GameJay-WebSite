let activeEffectNavigation = $('.navbar-container nav ul li a');
let navbarContainer = document.getElementById('navbarContainer');
let bars = document.getElementById('bars');
let navigation = document.getElementById('navigation');

// Navbar Effect
window.onscroll = () => {
	if (window.scrollY >= 40) {
		navbarContainer.classList.add('navbar-container_scroll');
	} else {
		navbarContainer.classList.remove('navbar-container_scroll');
	}
};

// Navbat Active Effect
activeEffectNavigation.click(() => navigation.classList.remove('show-menu'));

// Navbar Responsive
bars.addEventListener('click', () => {
	if (navigation.classList.contains('show-menu')) {
		navigation.classList.remove('show-menu');
	} else {
		navigation.classList.add('show-menu');
	}
});
