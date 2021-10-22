<?php 

function convertToJSON() {
    $questions = AdminController::ctrConvertQuestionsToJSON();
    $questionsToJSON = array();

    foreach ($questions as $question => $value) {
        array_push(
            $questionsToJSON, 
            "
                {
                    question: '$value[1]',
                    options: ['$value[2]', '$value[3]', '$value[4]'],
                    answer: '$value[5]',
                },
            "
        );
    }

    return $questionsToJSON;
}