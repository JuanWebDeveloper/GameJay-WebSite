let activeEffectNavigation = $(".containerMenu nav ul li a");
let containerMenu = document.getElementById("containerMenu");
let bars = document.getElementById("bars");
let navbar = document.getElementById("navbar");

/*--=====================================================
|-Navbar Effect                                         |
=======================================================--*/
window.onscroll = () => {
	if (window.scrollY >= 40) {
		containerMenu.classList.add("containerNavbar-scroll");
	} else {
		containerMenu.classList.remove("containerNavbar-scroll");
	}
};

/*--=====================================================
|-Navbat Active Effect                                   |
=======================================================--*/
activeEffectNavigation.click(() => navbar.classList.remove("show-menu"));

/*--=====================================================
|-Navbar Responsive                                      |
=======================================================--*/
bars.addEventListener("click", () => {
	if (navbar.classList.contains("show-menu")) {
		navbar.classList.remove("show-menu");
	} else {
		navbar.classList.add("show-menu");
	}
});
