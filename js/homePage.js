/*--=====================================================
|-Variables                                     |
=======================================================--*/
let acceder = document.getElementById("login");
let registrar = document.getElementById("registrar");
let EL = document.getElementById("EL");
let recuperarContraseña = document.getElementById("recuperarContraseña");
let colorL = document.getElementById("colorL");
let colorR = document.getElementById("colorR");
let activeEffectNavigation = $('.containerMenu nav ul li a');

/*--=====================================================
|- Animacion Login y Registro                           |
=======================================================--*/
colorL.style.color = "#fff";
colorR.style.color = "#0077ff";

function login() {
    acceder.style.left = "5%";
    acceder.style.top = "20px";
    acceder.style.display = "block";
    registrar.style.left = "105%";
    registrar.style.top = "20px";
    recuperarContraseña.style.top = "105%";
    EL.style.left = "0px";
    colorL.style.color = "#fff";
    colorR.style.color = "#0077ff";
}

function registro() {
    acceder.style.left = "-100%";
    registrar.style.left = "5%";
    acceder.style.top = "20px";
    registrar.style.top = "20px";
    recuperarContraseña.style.top = "100%";
    EL.style.left = "50%";
    colorL.style.color = "#0077ff";
    colorR.style.color = "#fff";
}

function recuperar() {
    acceder.style.top = "-100%";
    acceder.style.display = "none";
    registrar.style.top = "100%";
    recuperarContraseña.style.top = "50px";
}

/*--=====================================================
|-Navbar Effect                                         |
=======================================================--*/
$(window).scroll(function(){

	if ($(window).scrollTop() >= 40) {

		$('.containerMenu').addClass('containerNavbar-scroll');

	}else{

		$('.containerMenu').removeClass('containerNavbar-scroll');

	}

});

/*--=====================================================
|-Navbat Active Effect                                   |
=======================================================--*/
activeEffectNavigation.click(function(){

    if($(this).hasClass('active')){

        $(this).removeClass('active');

    }else{

        activeEffectNavigation.removeClass('active');
        $(this).addClass('active');

    }

});

/*--=====================================================
|-Navbar Responsive                                      |
=======================================================--*/
$("#bars").click(function(){

	$("#bars").after($(".containerMenu nav").slideToggle("slow"));

});