// Getting All Required Elements
const startGame = document.getElementById('startGame');
const startGameButton = document.getElementById('startGameButton');
const infoBox = document.getElementById('infoBox');
const exitButton = infoBox.querySelector('.game-buttons .quit');
const continueButton = infoBox.querySelector('.game-buttons .restart');
const quizBox = document.getElementById('quizBox');
const optionList = document.getElementById('optionList');
const nextBtn = quizBox.querySelector('.next-btn');
const timeCount = quizBox.querySelector('.timer .time-sec');
const timeLine = quizBox.querySelector('.header .time-line');
const resultBox = document.getElementById('resultBox');
const restartGame = resultBox.querySelector('.game-buttons .restart');
const quitGame = resultBox.querySelector('.game-buttons .quit');
const scoreText = resultBox.querySelector('.score-text');
const resultMessage = resultBox.querySelector('.result-message');
const buttonReturn = document.getElementById('buttonReturn');

// Default Values
let questionsCount = 0;
let questionNumber = 1;
let counter;
let counterLine;
let timeValue = 30;
let widthValue = 0;
let userScore = 0;

// Icons
let tickIcon = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIcon = '<div class="icon cross"><i class="fas fa-times"></i></div>';

// Getting Questions And Options From Array
const showQuestions = (index) => {
	const questionText = document.getElementById('questionText');

	let questionTag = `<span>${index + 1}. ${questions[index].question}</span>`;
	let optionTag = `
        <div class='option'>${questions[index].options[0]}<span></span></div>
        <div class='option'>${questions[index].options[1]}<span></span></div>
        <div class='option'>${questions[index].options[2]}<span></span></div>
    `;

	questionText.innerHTML = questionTag;
	optionList.innerHTML = optionTag;

	const options = optionList.querySelectorAll('.option');

	for (let i = 0; i < options.length; i++) {
		options[i].setAttribute('onclick', 'optionSelected(this)');
	}
};

// Validate That The Option Selected Is Correct
const optionSelected = (answer) => {
	clearInterval(counter);
	clearInterval(counterLine);
	let userAnswer = answer.textContent;
	let correctAnswer = questions[questionsCount].answer;
	let allOptions = optionList.children.length;

	if (userAnswer == correctAnswer) {
		userScore += 1;
		answer.classList.add('correct');
		answer.insertAdjacentHTML('beforeend', tickIcon);
	} else {
		answer.classList.add('incorrect');
		answer.insertAdjacentHTML('beforeend', crossIcon);

		// If Answer Is Incorrect Then Automatically Selected The Correct Answer
		for (let i = 0; i < allOptions; i++) {
			if (optionList.children[i].textContent == correctAnswer) {
				optionList.children[i].setAttribute('class', 'option correct');
				optionList.children[i].insertAdjacentHTML('beforeend', tickIcon);
			}
		}
	}

	// Once User Selected Disabled All Options
	for (let i = 0; i < allOptions; i++) {
		optionList.children[i].classList.add('disabled');
	}

	nextBtn.classList.add('show');
};

// Shows The Time Remaining To Answer The Question
const startTimer = (time) => {
	counter = setInterval(timer, 1000);

	function timer() {
		timeCount.textContent = time;
		time--;

		if (time < 9) {
			let addZero = timeCount.textContent;
			timeCount.textContent = `0${addZero}`;
		}
		if (time < 0) {
			clearInterval(counter);
			timeCount.textContent = '0';

			let correctAnswer = questions[questionsCount].answer;
			let allOptions = optionList.children.length;

			for (let i = 0; i < allOptions; i++) {
				if (optionList.children[i].textContent == correctAnswer) {
					optionList.children[i].setAttribute('class', 'option correct');
					optionList.children[i].insertAdjacentHTML('beforeend', tickIcon);
				}
			}

			for (let i = 0; i < allOptions; i++) {
				optionList.children[i].classList.add('disabled');
			}

			nextBtn.classList.add('show');
		}
	}
};

// Show The Timer Line
const startTimerLine = (time) => {
	counterLine = setInterval(timer, 310);

	function timer() {
		time += 1;
		timeLine.style.width = `${time}%`;

		time > 99 && clearInterval(counterLine);
	}
};

// Show The Number Of Questions To Be Answered And The Ones That Have Been Answered
const questionCounter = (index) => {
	const totalQuestions = quizBox.querySelector('.total-que');

	let totalQuestionsCountTag = `<span>${index} De ${questions.length}</span>`;
	totalQuestions.innerHTML = totalQuestionsCountTag;
};

// Show The Final Result Of The Game
const showResultBox = () => {
	infoBox.classList.remove('active-info');
	quizBox.classList.remove('active-quiz');
	resultBox.classList.add('active-result'); // Show The Result Box
	buttonReturn.classList.add('active-return'); // Show The Button Return

	if (userScore >= 6) {
		let scoreTag = `<span>Felicidades has respondido <p>${userScore}</p> preguntas de <p>${questions.length}</p></span>`;
		let messageTag = '<h2 class="winner">¡Ganaste!</h2>';

		scoreText.innerHTML = scoreTag;
		resultMessage.innerHTML = messageTag;
	} else if (userScore == 5) {
		let scoreTag = `<span>Porque poco has respondido <p>${userScore}</p> preguntas de <p>${questions.length}</p></span>`;
		let messageTag = '<h2 class="almost">Mejor suerte para la próxima!</h2>';

		scoreText.innerHTML = scoreTag;
		resultMessage.innerHTML = messageTag;
	} else {
		let scoreTag = `<span>Oops que mal has respondido <p>${userScore} </p> preguntas de <p>${questions.length} </p></span>`;
		let messageTag = '<h2 class="loser">Esfuérzate más la próxima vez</h2>';

		scoreText.innerHTML = scoreTag;
		resultMessage.innerHTML = messageTag;
	}
};

// If Start Quiz Button Clicked
startGameButton.addEventListener('click', () => {
	infoBox.classList.add('active-info'); // Show The Info Box
	startGame.classList.remove('active-start'); // Hide The Start Game Button
});

// If Exit Button Clicked
exitButton.addEventListener('click', () => {
	infoBox.classList.remove('active-info'); // Hide The Info Box
	startGame.classList.add('active-start'); // Show The Start Game Button
});

// If Continue Button Clicked
continueButton.addEventListener('click', () => {
	infoBox.classList.remove('active-info'); // Hide The Info Box
	buttonReturn.classList.remove('active-return'); // Hide The Button Return
	quizBox.classList.add('active-quiz'); // Show The Quiz Box
	showQuestions(0);
	questionCounter(1);
	startTimer(timeValue);
	startTimerLine(widthValue);
});

// If Next Button Clicked
nextBtn.addEventListener('click', () => {
	if (questionsCount < questions.length - 1) {
		questionsCount++;
		questionNumber++;

		showQuestions(questionsCount);
		questionCounter(questionNumber);
		clearInterval(counter);
		startTimer(timeValue);
		clearInterval(counterLine);
		startTimerLine(widthValue);
		nextBtn.classList.remove('show');
	} else {
		clearInterval(counter);
		clearInterval(counterLine);
		showResultBox();
	}
});

// Exit Game
quitGame.addEventListener('click', () => window.location.reload());

// Play Again
restartGame.addEventListener('click', () => {
	resultBox.classList.remove('active-result');
	buttonReturn.classList.remove('active-return');
	quizBox.classList.add('active-quiz');

	questionsCount = 0;
	questionNumber = 1;
	timeValue = 30;
	widthValue = 0;
	userScore = 0;

	showQuestions(questionsCount);
	questionCounter(questionNumber);
	clearInterval(counter);
	startTimer(timeValue);
	clearInterval(counterLine);
	startTimerLine(widthValue);
	nextBtn.classList.remove('show');
});
