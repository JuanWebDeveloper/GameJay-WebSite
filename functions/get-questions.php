<?php 

function getQuestions() {
    $questions = AdminController::ctrListQuestions();

    echo "<script>
            document.getElementById('listBody').innerHTML = '';
         </script>";

    foreach($questions as $question) {
        echo "<tr>
                <td>
                    <span class='field-question'>Pregunta</span>
                    $question[1]
                </td>
                <td>
                    <span class='field-question'>Opcion A</span>
                    $question[2]
                </td>
                <td>
                    <span class='field-question'>Opcion B</span>
                    $question[3]
                </td>
                <td>
                    <span class='field-question'>Opcion C</span>
                    $question[4]
                </td>
                <td>
                    <span class='field-question'>Respuesta</span>
                    $question[5]
                </td>
                <td class='d-flex justify-content-center flex-lg-column'>
                    <span class='field-question'>Acciones</span>
                    
                    <a href='edit-question/$question[0]' class='button default my-lg-3'><span>Editar</span></a>

                    <form method='POST' class='ml-3 ml-lg-0'>
                        <input type='hidden' name='delete' value='$question[0]' />
                        <button type='submit' class='button form-button'><span>Eliminar</span></button>
                    </form>
                </td>
             </tr>";
    }
}