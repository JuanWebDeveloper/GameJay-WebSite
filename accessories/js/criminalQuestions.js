let criminalQuestionsDescription = document.getElementById('criminalQuestionsDescription');

const descriptionModal = () => {
	const criminalQuestion = Swal.mixin({
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

	criminalQuestion.fire({
		width: 1200,
		title: `<h2 class='main-titles title-popups_sfc'><span>Preguntas Criminales</span></h2>`,
		html: `
            <p class="text-popups_cq"><span>Misión:</span> Fomentar el razonamiento lógico de los jugadores por medio de juegos interactivos que incentiven a un pensamiento autocrítico y reflexivo en los participantes, esto por medio de juegos que tengan como finalidad resolver problemáticas sociales que puedan ser abordadas desde charlas para la concientización de los futuros jugadores y, más importante aún, disminuir el índice de criminalidad en los jóvenes de los barrios. </p>
            <p class="text-popups_cq"><span>Visión:</span> Para el año 2022 duplicaremos a las problemáticas establecidas, logrando un acercamiento social, brindando a la comunidad un mejor ambiente. Buscamos la lealtad del consumidor colombiano, posicionando juegos innovadores de GAMES JAY como preferidos en el segmento de educación y ayuda didáctica para con la sociedad.</p>
            <p class="text-popups_cq"><span>Descripción  del juego:</span> El juego está diseñado con el propósito de dar a conocer al público algunos conceptos básicos de lo que es la ley, paracas y estos puedan identificar cuáles son los delitos que cometen constantemente sin darse cuenta.</p>
            <p class="text-popups_cq">el objetivo general de este juego es concientizar a las masas para que estás sean más precavida hasta el momento de realizar algunos insinuaciones y o realizar algunas acciones.</p>
            <p class="text-popups_cq">Este juego está conformado por un sistema en el cual se le valora a las personas sus capacidades para entender algunos conocimientos previos de la judicialidad por medio de preguntas tipo saber.</p>
        `,
		background: '#13142a',
		allowOutsideClick: false,
		confirmButtonText: '<span>Entendido</span>',
		focusConfirm: false,
	});
};

criminalQuestionsDescription.addEventListener('click', descriptionModal);
