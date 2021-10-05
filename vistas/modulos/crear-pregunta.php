<div class="containerContentHomeA">
    <h2><span>Crear Pregunta</span></h2>

    <form method="POST" class="mt-3">
        <input type="text" placeholder="Pregunta" name="pregunta" class="form-control" >
        <input type="text" placeholder="Opcion A" name="opcionA" class="form-control mt-2" >
        <input type="text" placeholder="Opcion B" name="opcionB" class="form-control mt-2" >
        <input type="text" placeholder="Opcion C" name="opcionC" class="form-control mt-2" >
        <input type="text" placeholder="Opcion Correcta" name="respuesta"  maxlength="1" class="form-control mt-2" >
        <input type="hidden" name="crearPregunta" value="crearPregunta">
        <button type="submit"  class="btn btn-outline-primary mt-2 px-5 float-right">Crear</button>
    </form>

</div>

<?php 
    $crearPregunta = "";
    $errores = "";

    if (isset($_POST["crearPregunta"])) {
        $crearPregunta = ControladorAdministrador::ctrCrearPregunta();

        if ($crearPregunta != "Pregunta Creada") {
            $errores = $crearPregunta;
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
    <?php elseif($crearPregunta == "Pregunta Creada"): ?>
    <!-- Validar Si Se Registro -->

        <!-- Habilitar Modal -->
        <script>
            $( document ).ready(function() {
                $('#correcto').modal('toggle')
            });
        </script>

        <!-- Modal Donde Se Muestran Que Registro Correctamente -->
        <div class="modal fade" id="correcto">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modelHeaderCorrecto">
                        <h2><?php echo $crearPregunta; ?> </h2>
                        <a class="close" data-dismiss="modal" aria-hidden="true"
                            ><i class="fas fa-times-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
