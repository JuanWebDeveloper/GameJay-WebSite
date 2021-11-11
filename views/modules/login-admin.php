<div class="login-admin">
	<div class="login-admin-content">
		<h2 class="main-titles"><span>Administrador</span></h2>
		<div class="form-contact">
			<form method="POST" class="form-box">
				<div class="input-box width-100">	
					<input type="text" name="email" required autocomplete="nope" />
					<span>Correo</span>
				</div>
				<div class="input-box width-100">
					<input type="password" name="password" required />
					<span>Contraseña</span>
				</div>
				<input type="hidden" name="admin" value="admin" />
				<div class="form-button_container">
                    <button type="submit" class="button form-button"><span>Iniciar Sesión</span></button>
                </div>
			</form>
		</div>
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

