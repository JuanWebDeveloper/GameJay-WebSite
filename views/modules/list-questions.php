<div class="list-container">
    <div class="list-content">
        <h2 class="main-titles"><span>Preguntas</span></h2>
        <table>
            <thead>
                <tr>
                    <th>Pregunta</th>
                    <th>Opción A</th>
                    <th>Opción B</th>
                    <th>Opción C</th>
                    <th>Respuesta</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody id="listBody">
                <?php
                    getQuestions();

                    $delete = "";

                    if (isset($_POST["delete"])) {
                        $id = $_POST["delete"];
                        $delete = AdminController::ctrDeleteQuestions($id);
                    }

                    if($delete === "La pregunta se elimino") {
                        getQuestions();
                        successfulQuery($delete);

                    } elseif ($delete === "Ocurrio un error al tratar de eliminar la pregunta") {
                        errorOccurred($delete);
                    }
                ?>
            </tbody>
		</table>
    </div>
</div>