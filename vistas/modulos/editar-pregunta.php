<?php 
    $id = $rutas[1];

    $datos = ControladorAdministrador::ctrTraerDatosParaEditar($id);

?>

<div class="containerContentHomeA">
    <h2><span>Editar Pregunta</span></h2>

    <form method="POST" class="mt-3">
        <input type="text" placeholder="Pregunta" name="pregunta" value="<?php echo $datos[1]; ?>" class="form-control" >
        <input type="text" placeholder="Opcion A" name="opcionA" value="<?php echo $datos[2]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion B" name="opcionB" value="<?php echo $datos[3]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion C" name="opcionC" value="<?php echo $datos[4]; ?>" class="form-control mt-2" >
        <input type="text" placeholder="Opcion Correcta" value="<?php echo $datos[5]; ?>" name="respuesta"  maxlength="1" class="form-control mt-2" >
        <input type="hidden" name="editarPregunta" value="editarPregunta">
        <button type="submit"  class="btn btn-outline-primary mt-2 px-5 float-right">Editar</button>
    </form>

</div>

<?php 
    $editarPregunta = "";
    $errores = "";

    if (isset($_POST["editarPregunta"])) {
        $editarPregunta = ControladorAdministrador::ctrEditarPregunta($id);
        
        if ($editarPregunta != "Pregunta Editada") {
            $errores = $editarPregunta;
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
    <?php elseif($editarPregunta == "Pregunta Editada"): ?>
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
                        <h2><?php echo $editarPregunta; ?> </h2>
                        <a class="close" data-dismiss="modal" aria-hidden="true"
                            ><i class="fas fa-times-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <script>
                if (document.getElementById("correcto").classList.contains("fade")) {
                   setTimeout(() => {
                    window.location="http://localhost/practices/GameJay/lista-preguntas";
                   }, 1500);
                }
            </script>
        </div>
    <?php endif; ?>


