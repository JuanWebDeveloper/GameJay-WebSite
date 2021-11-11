<?php 
    $questions = convertToJSON();
    $convertToString = "";

    foreach ($questions as $question) {
      $convertToString .= $question;
    }

    echo "
        <script>
            let questions = [$convertToString];
        </script>
    ";
 ?>

<div class="criminal-questions_game" id="particles-js">
    <!-- Start Game Button -->
    <div class="start-game_btn active-start" id="startGame">
        <h2>Preguntas Criminales</h2>
        <button class="button default" id="startGameButton"><span>Empezar Juego</span></button>
    </div>

    <!-- Rules Info Box -->
    <div class="info-box" id="infoBox">
        <div class="info-title">
            <span>Reglas Del Juego</span>
        </div>
        <div class="info-list">
            <div class="info">1. Tendrás solo <span>30 segundos</span> por cada pregunta.</div>
            <div class="info">2. Una vez que seleccione su respuesta, no se puede deshacer.</div>
            <div class="info">3. No puede seleccionar ninguna opción una vez que el tiempo se acaba.</div>
            <div class="info">4. No puedes salir del Quiz mientras juegas.</div>
            <div class="info">5. Tu puntuación final dependerá de tus respuestas correctas.</div>
        </div>
        <div class="game-buttons">
            <button class="button default quit"><span>Salir</span></button>
            <button class="button form-button restart"><span>Continuar</span></button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz-box" id="quizBox">
        <div class="header">
            <div class="title">Preguntas Criminales</div>
            <div class="timer">
                <div class="time-left_text">Tiempo Restante</div>
                <div class="time-sec">30</div>
            </div>
            <div class="time-line"></div>
        </div>

        <section class="section-questions">
            <div class="que-text" id="questionText">
                <!-- Here I'Ve Inserted Question From JavaScript -->
            </div>
            <div class="option-list" id="optionList">
                <!-- Here I'Ve Inserted Options From JavaScript -->
            </div>
        </section>

        <div class="footer-game">
            <div class="total-que">
                <!-- Here I'Ve Inserted Question Count Number From JavaScript -->
            </div>
            <button class="button form-button next-btn"><span>Siguiente Pregunta</span></button>
        </div>
    </div>

    <!-- Result Box -->
    <div class="result-box" id="resultBox">
        <div class="complete-text">¡Has Completado El Juego!</div>
        <div class="score-text">
            <!-- Here I'Ve Inserted Score Result From JavaScript -->
        </div>
        <div class="result-message">
            <!-- Here I'Ve Inserted Result Message From JavaScript -->
        </div>
        <div class="game-buttons game-buttons-result">
            <button class="button default restart"><span>Volver A Jugar</span></button>
            <button class="button form-button quit"><span>Salir</span></button>
        </div>
    </div>
    <a href="<?php echo $url; ?>criminal-questions" class="button-return game active-return" id="buttonReturn" title="Regresar"><i class="fas fa-undo-alt"></i></a>
</div>