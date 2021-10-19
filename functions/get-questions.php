<?php 

function getQuestions() {
    $questions = AdminController::ctrListQuestions();

    echo "<script>
            document.getElementById('listBody').innerHTML = '';
         </script>";

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
                <td class='text-uppercase'>
                    <span class='text-capitalize'>Opcion Correcta</span>
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