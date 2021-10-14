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

		// Validate If There Are Errors
		if (!empty($errors)) {
			errorOccurred($errors);
		} 
	?>
</div>

