<!--===============-->
<!-- List Question -->
<!--===============-->
<div class="list-container">
    <div class="list-content">
        <h2>Lista de questions</h2>
            
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