<!--======================-->
<!-- Create Question Form -->
<!--======================-->
<div class="admin-home-content">
    <h2><span>Crear Pregunta</span></h2>

    <form method="POST" class="mt-3">
        <input type="text" placeholder="Pregunta" name="question" class="form-control" >
        <input type="text" placeholder="Opcion A" name="optionA" class="form-control mt-2" >
        <input type="text" placeholder="Opcion B" name="optionB" class="form-control mt-2" >
        <input type="text" placeholder="Opcion C" name="optionC" class="form-control mt-2" >
        <input type="text" placeholder="Opcion Correcta" name="response" class="form-control mt-2" >
        <input type="hidden" name="createQuestions" value="createQuestions">
        <button type="submit"  class="btn btn-outline-primary mt-2 px-5 float-right">Crear</button>
    </form>

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
