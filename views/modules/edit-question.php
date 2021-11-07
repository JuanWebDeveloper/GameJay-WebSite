<?php 
    $id = $routes[1];

    $data = AdminController::ctrBringDataToEdit($id);

?>

<div class="admin-home-content">
    <h2><span>Editar Pregunta</span></h2>

    <form method="POST" class="mt-3">
        <input type="text" placeholder="Pregunta" name="question" value="<?php echo $data[1]; ?>" class="form-control" >
        <input type="text" placeholder="Opcion A" name="optionA" value="<?php echo $data[2]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion B" name="optionB" value="<?php echo $data[3]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion C" name="optionC" value="<?php echo $data[4]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion Correcta" value="<?php echo $data[5]; ?>" name="response" class="form-control mt-2" >
        <input type="hidden" name="editQuestion" value="editQuestion">
        <button type="submit"  class="btn btn-outline-primary mt-2 px-5 float-right">Editar</button>
    </form>

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
