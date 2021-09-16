/*--=====================================================
|-Ubicaion                                       |
=====================================================--*/
let ubicacion = () => {
	Swal.fire({
		title: '<span class="alertUbicacion">Nuestra ubicación</span>',
		html: '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201.71192323612118!2d-75.54614991783896!3d6.2876668599946814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429e1b6b06523%3A0xc1ff958579808a80!2sColegio%20San%20Pablo!5e1!3m2!1ses!2sco!4v1605613766300!5m2!1ses!2sco" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
		confirmButtonText: "Entendido",
		grow: "fullscreen",
		backdrop: true,
		allowOutsideClick: true,
		allowEscapeKey: true,
		allowEnterKey: false,

		showConfirmButton: true,
		confirmButtonColor: "#0077ff",
		confirmButtonAriaLabel: "Entendido",
	});
};
