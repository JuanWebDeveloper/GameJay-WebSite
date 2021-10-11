<?php 
    $id = $routes[1];

    $data = AdminController::ctrBringDataToEdit($id);

?>

<!--====================-->
<!-- Edit Question Form -->
<!--====================-->
<div class="admin-home-content">
    <h2><span>Editar Pregunta</span></h2>

    <form method="POST" class="mt-3">
        <input type="text" placeholder="Pregunta" name="question" value="<?php echo $data[1]; ?>" class="form-control" >
        <input type="text" placeholder="Opcion A" name="optionA" value="<?php echo $data[2]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion B" name="optionB" value="<?php echo $data[3]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion C" name="optionC" value="<?php echo $data[4]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion Correcta" value="<?php echo $data[5]; ?>" name="response"  maxlength="1" class="form-control mt-2" >
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
<?php elseif($editQuestion == "Pregunta Editada"): ?>
	<script>
		$( document ).ready(function() {
			$('#successful').modal('toggle')
		});
	</script>

	<div class="modal fade" id="successful">
		<div class="modal-dialog">
			<div class="modal-content acceptance-modal_content">
				<div class="modal-header acceptance-modal_header">
					<div class="title-error"><h2><?php echo $editQuestion; ?> </h2></div>
					<a class="close" data-dismiss="modal" aria-hidden="true"
						><i class="fas fa-times-circle"></i>
					</a>
				</div>
			</div>
		</div>

        <script>
            if (document.getElementById("successful").classList.contains("fade")) {
                setTimeout(() => {
                window.location="http://localhost/practices/GameJay/list-questions";
                }, 1500);
            }
        </script>
	</div>
<?php endif; ?>