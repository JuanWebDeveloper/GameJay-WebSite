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

