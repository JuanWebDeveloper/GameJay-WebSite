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
                    function getQuestions() {
                        $questions = AdminController::ctrListQuestions();
    
                        foreach($questions as $question) {
                            echo "<tr>
                                    <td>
                                        <span>Pregunta</span>
                                        $question[1]
                                    </td>
                                    <td>
                                        <span>Opcion A</span>
                                        $question[2]
                                    </td>
                                    <td>
                                        <span>Opcion B</span>
                                        $question[3]
                                    </td>
                                    <td>
                                        <span>Opcion C</span>
                                        $question[4]
                                    </td>
                                    <td>
                                        <span>Opcion Correcta</span>
                                        $question[5]
                                    </td>
                                    <td class='d-flex justify-content-center'>
                                        <span>Acciones</span>
                                        
                                        <a href='edit-question/$question[0]' class='btn btn-primary'>Editar</a>

                                        <form method='POST' class='ml-3'>
                                            <input type='hidden' name='delete' value='$question[0]' />
                                            <input type='submit' value='Eliminar' class='btn btn-danger' />
                                        </form>
                                    </td>
                                 </tr>";
                        }
                    }

                    getQuestions();

                ?>

                <?php 
                    $delete = "";

                    if (isset($_POST["delete"])) {
                        $id = $_POST["delete"];
                        $delete = AdminController::ctrDeleteQuestions($id);
                    }
                ?>

                <?php if($delete === "La pregunta se elimino"): ?>
                    <script>
                        document.getElementById("listBody").innerHTML = "";
                    </script>

                    <?php getQuestions(); ?>
                <?php endif; ?>
            </tbody>
		</table>
    </div>

    <!-- Validate If There Are Errors -->
    <?php if($delete === "Ocurrio un error al tratar de eliminar la pregunta"): ?>
        <!-- Enable Modal -->
        <script>
            $( document ).ready(function() {
                $('#errors').modal('toggle')
            });
        </script>

        <!-- Modal Where Errors Are Displayed -->
        <div class="modal error-modal_container" id="errors">
            <div class="modal-dialog">
                <div class="modal-content error-modal_content">
                    <div class="modal-header modal-header_error">
                        <div class="title-error"><h2 class="text-center">Surgió Un Error</h2></div>
                        <a class="close" data-dismiss="modal" aria-hidden="true"
                            ><i class="fas fa-times-circle"></i>
                        </a>
                    </div>
                    
                    <div class="modal-body modal_body_error">
                        <?php echo "<h5>$delete</h5>"; ?>

                    </div>
                    
                </div>
            </div>
        </div>
    <?php elseif($delete === "La pregunta se elimino"): ?>
        <script>
            $( document ).ready(function() {
                $('#successful').modal('toggle')
            });
        </script>

        <div class="modal fade" id="successful">
            <div class="modal-dialog">
                <div class="modal-content acceptance-modal_content">
                    <div class="modal-header acceptance-modal_header">
                        <div class="title-error"><h2><?php echo $delete; ?> </h2></div>
                        <a class="close" data-dismiss="modal" aria-hidden="true"
                            ><i class="fas fa-times-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>