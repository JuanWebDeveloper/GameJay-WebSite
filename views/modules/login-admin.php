<!--=============-->
<!-- Login Admin -->
<!--=============-->
<div class="login-admin">
	<div class="login-admin-content">
		<h2 class="main-titles"><span>Administrador</span></h2>
		<form method="POST" class="form-admin">
			<input type="text" name="email" class="input-field" placeholder="Correo" />
			<input type="password" name="password" class="input-field" placeholder="Contarseña" />
			<input type="hidden" name="admin" value="admin" />
			<button type="submit" style="margin-top: 20px" class="submit-button">Iniciar</button>
		</form>
	</div>
	<?php 
		$admin = "";
		$errors = "";
	
		if (isset($_POST["admin"])) {
			$admin = AdminController::ctrLoginAdministrator();
	
			if ($admin != "Registro exitoso") {
				$errors = $admin;
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
					<?php 
						echo "<h5>$errors</h5>";
					?>

				</div>
				
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>

