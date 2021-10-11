<?php

class AdminController {
	// Login As Administrator
	public static function ctrLoginAdministrator() {
		if (isset($_POST["admin"])) {
			$errors = "";

			if (empty($_POST["email"]) || empty($_POST["password"])) {
				$errors = "Por favor rellene todos los campos";

				return $errors;

			} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$errors = "Por favor escriba un correo valido";

				return $errors;

			} else {
				$table = "admin";
				$encrypt = md5($_POST["password"]);
				$data = array(
					"email" => filter_var(strtolower($_POST["email"]), FILTER_SANITIZE_EMAIL), 
					"password" => $encrypt, 
				);

				$response = AdminModel::mdlLoginAdministrator($table, $data);
				
				return $response;
			}
		}
	}

	// Create Questions
	public static function ctrCreateQuestions() {
		if (isset($_POST["createQuestions"])) {
			$errors = "";

			if (empty($_POST["question"]) || empty($_POST["optionA"]) || empty($_POST["optionB"]) || empty($_POST["optionC"]) || empty($_POST["response"])) {
				$errors = "Por favor rellene todos los campos";

				return $errors;

			// Validate That A Valid Response Is Submitted
			} elseif ($_POST["response"] != "a" && $_POST["response"] != "b" && $_POST["response"] != "c" && $_POST["response"] != "A" && $_POST["response"] != "B" && $_POST["response"] != "C") {
				$errors = "El campo de opción correcta es inválido";

				return $errors;

			} else {
				$table = "questions";
				$data = array(
					"question" => $_POST["question"], 
					"optionA" => $_POST["optionA"], 
					"optionB" => $_POST["optionB"], 
					"optionC" => $_POST["optionC"], 
					"response" => $_POST["response"]
				);

				$response = AdminModel::mdlCreateQuestions($table, $data);
				
				return $response;
			}
		}
		
	}

	// List Questions
	public static function ctrListQuestions() {
		$table = "questions";
		$response = AdminModel::mdlListQuestions($table);

		return $response;
	}


	// Delete Questions
	public static function ctrDeleteQuestions($id) {
		$table = "questions";
		$response = AdminModel::mdlDeleteQuestions($table, $id);

		return $response;
	}

	// Bring Data Of The Question To Be Edited
	public static function ctrBringDataToEdit($id){
		$table = "questions";
		$response = AdminModel::mdlBringDataToEdit($table, $id);

		return $response;
	}

	// Edit Question
	public static function ctrEditQuestion($id){
		if (isset($_POST["editQuestion"])) {
			$errors = "";

			if (empty($_POST["question"]) || empty($_POST["optionA"]) || empty($_POST["optionB"]) || empty($_POST["optionC"]) || empty($_POST["response"])) {
				$errors = "Por favor rellene todos los campos";

				return $errors;

			} elseif ($_POST["response"] != "a" && $_POST["response"] != "b" && $_POST["response"] != "c" && $_POST["response"] != "A" && $_POST["response"] != "B" && $_POST["response"] != "C") {
				$errors = "El campo de opción correcta es inválido";

				return $errors;

			} else {
				$table = "questions";
				$data = array(
					"id" => $id,
					"question" => $_POST["question"], 
					"optionA" => $_POST["optionA"], 
					"optionB" => $_POST["optionB"], 
					"optionC" => $_POST["optionC"], 
					"response" => $_POST["response"]
				);

				$response = AdminModel::mdlEditQuestion($table, $data);

				return $response;
			}
		}
	}
}