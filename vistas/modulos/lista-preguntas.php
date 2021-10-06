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

            <tbody>
                <?php
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
                                <td>
                                    <span>Acciones</span>
                                    <a href='$pregunta[0]' class='btn btn-primary'>Editar</a>
                                    <a class='btn btn-danger'>Eliminar</a>
                                </td>
                             </tr>";
                    }
                ?>
            </tbody>
		</table>
    </div>
</div>