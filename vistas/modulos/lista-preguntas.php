<div class="ListContainer">
    <div class="listContent">
        <h2>Lista de preguntas</h2>
            
        <table>
            <thead>
                <tr>
                    <th>Pregunta</th>
                    <th>Opción A</th>
                    <th>Opción B</th>
                    <th>Opción C</th>
                    <th>Opción Correcta</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody id="listBody">
                <?php
                    function TraerPreguntas() {
                        $preguntas = ControladorAdministrador::ctrListarPreguntas();
    
                        foreach($preguntas as $pregunta) {
                            echo "<tr>
                                    <td>
                                        <span>Pregunta</span>
                                        $pregunta[1]
                                    </td>
                                    <td>
                                        <span>Opcion A</span>
                                        $pregunta[2]
                                    </td>
                                    <td>
                                        <span>Opcion B</span>
                                        $pregunta[3]
                                    </td>
                                    <td>
                                        <span>Opcion C</span>
                                        $pregunta[4]
                                    </td>
                                    <td>
                                        <span>Opcion Correcta</span>
                                        $pregunta[5]
                                    </td>
                                    <td class='d-flex justify-content-center'>
                                        <span>Acciones</span>
                                        <form method='GET' class='mr-3'>
                                            <input type='hidden' name='editar' value='$pregunta[0]' />
                                            <input type='submit' value='Editar' class='btn btn-primary' />
                                        </form>
                                        <form method='POST'>
                                            <input type='hidden' name='eliminar' value='$pregunta[0]' />
                                            <input type='submit' value='Eliminar' class='btn btn-danger' />
                                        </form>
                                    </td>
                                 </tr>";
                        }
                    }

                    TraerPreguntas();

                ?>

                <?php 
                    $eliminar = "";

                    if (isset($_POST["eliminar"])) {
                        $id = $_POST["eliminar"];
                        $eliminar = ControladorAdministrador::ctrEliminarPregunta($id);
                    }
                ?>

                <?php if($eliminar === "La pregunta se elimino"): ?>
                    <script>
                        document.getElementById("listBody").innerHTML = "";
                    </script>

                    <?php TraerPreguntas(); ?>
                <?php endif; ?>
            </tbody>
		</table>
    </div>

    <!-- Validar Si Hay Errores -->
	<?php if($eliminar === "Ocurrio un error al tratar de eliminar la pregunta"): ?>
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
						<?php echo "<h5>$eliminar</h5>"; ?>
					</div>
				</div>
			</div>
		</div>
    <?php elseif ($eliminar === "La pregunta se elimino"): ?>
        <!-- Habilitar Modal -->
		<script>
			$( document ).ready(function() {
				$('#correcto').modal('toggle')
			});
		</script>
	
		<!-- Modal Donde Se Muestran Los Errores -->
		<div class="modal fade" id="correcto">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modelHeaderCorrecto">
                        <h2><?php echo $eliminar; ?> </h2>
                        <a class="close" data-dismiss="modal" aria-hidden="true"
                            ><i class="fas fa-times-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	<?php endif; ?>
</div>