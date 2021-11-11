<div class="admin-home-content admin-forms">
    <h2 class="main-titles"><span>Crear Pregunta</span></h2>
    <div class="form-contact">
        <form method="POST" class="form-box">
            <div class="input-box width-100">
                <input type="text" name="question" required autocomplete="nope" />
                <span>Pregunta</span>
            </div>
            <div class="input-box width-50">
                <input type="text" name="optionA" required autocomplete="nope" />
                <span>Opción A</span>
            </div>
            <div class="input-box width-50">
                <input type="text" name="optionB" required autocomplete="nope" />
                <span>Opción B</span>
            </div>
            <div class="input-box width-50">
                <input type="text" name="optionC" required autocomplete="nope" />
                <span>Opción C</span>
            </div>
            <div class="input-box width-50">
            <input type="text" name="response" required autocomplete="nope" />
                <span>Respuesta</span>
            </div>
            <input type="hidden" name="createQuestions" value="createQuestions">
            <div class="form-button_container">
                <button type="submit" class="button form-button"><span>Crear</span></button>
            </div>
        </form>
    </div>
</div>

<?php 
    $createQuestions = "";
    $errors = "";

    if (isset($_POST["createQuestions"])) {
        $createQuestions = AdminController::ctrCreateQuestions();

        if ($createQuestions != "Pregunta Creada") {
            $errors = $createQuestions;
        }
    }

	// Validate If There Are Errors
	if (!empty($errors)) {
		errorOccurred($errors);

	} elseif($createQuestions == "Pregunta Creada") {
		$url = Routes::mainRoute();
		$redirection = $url."list-questions";

		successfulQueryRedirection($createQuestions, $redirection);
	}
?>
