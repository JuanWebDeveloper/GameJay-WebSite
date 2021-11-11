<?php 
    $id = $routes[1];

    $data = AdminController::ctrBringDataToEdit($id);

?>

<div class="admin-home-content admin-forms">
    <h2 class="main-titles"><span>Editar Pregunta</span></h2>
    <div class="form-contact">
        <form method="POST" class="form-box">
            <div class="input-box width-100">
                <input type="text" name="question" required autocomplete="nope" value="<?php echo $data[1]; ?>" />
                <span>Pregunta</span>
            </div>
            <div class="input-box width-50">
                <input type="text" name="optionA" required autocomplete="nope" value="<?php echo $data[2]; ?>" />
                <span>Opción A</span>
            </div>
            <div class="input-box width-50">
                <input type="text" name="optionB" required autocomplete="nope" value="<?php echo $data[3]; ?>" />
                <span>Opción B</span>
            </div>
            <div class="input-box width-50">
                <input type="text" name="optionC" required autocomplete="nope" value="<?php echo $data[4]; ?>" />
                <span>Opción C</span>
            </div>
            <div class="input-box width-50">
            <input type="text" name="response" required autocomplete="nope" value="<?php echo $data[5]; ?>" />
                <span>Respuesta</span>
            </div>
            <input type="hidden" name="editQuestion" value="editQuestion">
            <div class="form-button_container">
                <button type="submit" class="button form-button"><span>Editar</span></button>
            </div>
        </form>
    </div>
</div>

<?php 
    $editQuestion = "";
    $errors = "";

    if (isset($_POST["editQuestion"])) {
        $editQuestion = AdminController::ctrEditQuestion($id);
        
        if ($editQuestion != "Pregunta Editada") {
            $errors = $editQuestion;
			errorOccurred($errors);

        } elseif ($editQuestion == "Pregunta Editada") {
			$url = Routes::mainRoute();
			$redirection = $url."list-questions";

			successfulQueryRedirection($editQuestion, $redirection);
		}
    }
?>
