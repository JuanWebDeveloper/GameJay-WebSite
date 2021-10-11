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
        <input type="text" placeholder="Opcion Correcta" name="response"  maxlength="1" class="form-control mt-2" >
        <input type="hidden" name="createQuestions" value="createQuestions">
        <button type="submit"  class="btn btn-outline-primary mt-2 px-5 float-right">Crear</button>
    </form>

</div>

<?php 
    $createQuestions = "";
    $errors = "";

    if (isset($_POST["createQuestions"])) {
        $createQuestions = AdminController::ctrCreateQuestions();

        if ($createQuestions != "Pregunta Guardada") {
            $errors = $createQuestions;
        }
    }
?>

<!-- Validate If There Are Errors -->
<?php if(!empty($errors)): ?>
	<!-- Enable Modal -->
	<script>
		$( document ).ready(function() {
			$('#errors').modal('toggle')
		});
	</script>

	<!-- Modal Where Errors Are Displayed -->
	<div class="modal error-modal_container" id="errors">
		<div class="modal-dialog">
			<div class="modal-content error-modal_content">
				<div class="modal-header modal-header_error">
					<div class="title-error"><h2 class="text-center">Surgió Un Error</h2></div>
					<a class="close" data-dismiss="modal" aria-hidden="true"
						><i class="fas fa-times-circle"></i>
					</a>
				</div>
				
				<div class="modal-body modal_body_error">
					<?php echo "<h5>$errors</h5>"; ?>

				</div>
				
			</div>
		</div>
	</div>
<?php elseif($createQuestions == "Pregunta Guardada"): ?>
	<script>
		$( document ).ready(function() {
			$('#successful').modal('toggle')
		});
	</script>

	<div class="modal fade" id="successful">
		<div class="modal-dialog">
			<div class="modal-content acceptance-modal_content">
				<div class="modal-header acceptance-modal_header">
					<div class="title-error"><h2><?php echo $createQuestions; ?> </h2></div>
					<a class="close" data-dismiss="modal" aria-hidden="true"
						><i class="fas fa-times-circle"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>