<!--=====================================================
|-Inicio De Sesion Admin                               |
=======================================================-->
<div class="adminLogin">
	<div class="loginAdminContent">
		<h2 class="titulosPrincipales"><span>Administrador</span></h2>
		<form method="POST" class="formAdmin">
			<input type="text" name="correo" class="inputField" placeholder="Correo" />
			<input type="password" name="password" class="inputField" placeholder="Contarseña" />
			<input type="hidden" name="administrador" value="administrador" />
			<button type="submit" style="margin-top: 20px" class="submitButton">Iniciar</button>
		</form>
	</div>
	<?php 
		$admin = "";
		$errores = "";
	
		if (isset($_POST["administrador"])) {
			$admin = ControladorAdministrador::ctrIniciarSesionAdmin();
	
			if ($admin != "Registro exitoso") {
				$errores = $admin;
			}
		}
	?>
	
	<!-- Validar Si Hay Errores -->
	<?php if(!empty($errores)): ?>
		<!-- Habilitar Modal -->
		<script>
			$( document ).ready(function() {
				$('#errores').modal('toggle')
			});
		</script>
	
		<!-- Modal Donde Se Muestran Los Errores -->
		<div class="modal fade containerModalErrores" id="errores">
			<div class="modal-dialog">
				<div class="modal-content modalContentErrores">
					<div class="modal-header modelHeaderErrore">
						<h2>Surgió Un Error</h2>
						<a class="close" data-dismiss="modal" aria-hidden="true"
							><i class="fas fa-times-circle"></i>
						</a>
					</div>
	
					<div class="modal-body modelBodyErrore">
						<?php echo "<h5>$errores</h5>"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>

