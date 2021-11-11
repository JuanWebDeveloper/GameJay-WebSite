const buyGame = document.getElementById('buyGame');
const diceVirtual = document.getElementById('diceVirtual');

const handleButtonSFC = (message) => {
	const successAlert = Swal.mixin({
		customClass: {
			confirmButton: 'button default',
		},
		buttonsStyling: false,
		showClass: {
			popup: 'animate__animated animate__backInDown',
		},
		hideClass: {
			popup: 'animate__animated animate__backOutUp',
		},
	});

	successAlert.fire({
		icon: 'info',
		title: '<h2 class="main-titles title-popups_sfc"><span>Surgió un inconveniente</span></h2>',
		html: `<p class="text-popups_sfc">${message}</p>`,
		confirmButtonText: '<span>Entendido</span>',
		width: 900,
		backdrop: true,
		background: '#13142a',
		allowOutsideClick: false,
		allowEscapeKey: false,
		allowEnterKey: false,
		showConfirmButton: true,
		confirmButtonAriaLabel: 'Entendido',
	});
};

buyGame.addEventListener('click', () => handleButtonSFC('En este momento el juego esta agotado, intentelo de nuevo mas tarde.'));
diceVirtual.addEventListener('click', () => handleButtonSFC('El dado virtual estará disponible pronto.'));
