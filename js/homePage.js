/*--=====================================================
|-Variables                                     |
=======================================================--*/
let acceder = document.getElementById("acceder");
let registro = document.getElementById("registro");
let olvido = document.getElementById("olvido");
let EL = document.getElementById("EL");
let recuperarContraseña = document.getElementById("recuperarContraseña");
let login = document.getElementById("login");
let registrar = document.getElementById("registrar");
let activeEffectNavigation = $(".containerMenu nav ul li a");
let containerMenu = document.getElementById("containerMenu");
let bars = document.getElementById("bars");
let navbar = document.getElementById("navbar");

/*--=====================================================
|- Animacion Login y Registro                           |
=======================================================--*/
acceder.style.color = "#fff";
registro.style.color = "#0077ff";

registrar.classList.add("ocultar-registro");
recuperarContraseña.classList.add("ocultar-recuperar");

acceder.addEventListener("click", () => {
	acceder.style.color = "#fff";
	registro.style.color = "#0077ff";
	EL.style.left = "0%";

	registrar.classList.remove("mostrar-registro");
	registrar.classList.add("ocultar-registro");

	recuperarContraseña.classList.remove("mostrar-recuperar");
	recuperarContraseña.classList.add("ocultar-recuperar");

	login.classList.remove("ocultar-iniciar");
	login.classList.add("mostrar-iniciar");
});

registro.addEventListener("click", () => {
	acceder.style.color = "#0077ff";
	registro.style.color = "#fff";
	EL.style.left = "40%";

	recuperarContraseña.classList.remove("mostrar-recuperar");
	recuperarContraseña.classList.add("ocultar-recuperar");

	login.classList.remove("mostra-iniciar");
	login.classList.add("ocultar-iniciar");

	registrar.classList.remove("ocultar-registro");
	registrar.classList.add("mostrar-registro");
});

olvido.addEventListener("click", () => {
	recuperarContraseña.classList.remove("ocultar-recuperar");
	recuperarContraseña.classList.add("mostrar-recuperar");

	login.classList.remove("mostra-iniciar");
	login.classList.add("ocultar-iniciar");

	registrar.classList.remove("mostra-registro");
	registrar.classList.add("ocultar-registro");
});

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
