<?php

// Database Connection
require_once "connection.php";

class AdminModel {
	// Login As Administrator
	public static function mdlLoginAdministrator($table, $data){
		$statement = Connection::connect()->prepare("SELECT * FROM $table WHERE email = :email AND password = :password");

		$statement->bindParam(":email", $data["email"], PDO::PARAM_STR);
		$statement->bindParam(":password", $data["password"], PDO::PARAM_STR);

		$statement->execute();

		$response = $statement->fetch();

		if ($response !== false) {
			$_SESSION["admin"] = $data["email"];
			echo "<script>location.reload();</script>";

		} else {
			return "Datos Incorrectos";
		}

		$statement = null;
		die();
	}

	// Create Questions
	public static function mdlCreateQuestions($table, $data){
		// Query To Register The Question
		$statement = Connection::connect()->prepare("INSERT INTO $table (question, option_a, option_b, option_c, answer) VALUES (:question, :optionA, :optionB, :optionC, :answer)");

		$statement->bindParam(":question", $data["question"], PDO::PARAM_STR);
		$statement->bindParam(":optionA", $data["optionA"], PDO::PARAM_STR);
		$statement->bindParam(":optionB", $data["optionB"], PDO::PARAM_STR);
		$statement->bindParam(":optionC", $data["optionC"], PDO::PARAM_STR);
		$statement->bindParam(":answer", $data["response"], PDO::PARAM_STR);

		if ($statement->execute()) {
			return "Pregunta Creada";
		} else {
			return "No se pudo guardar la pregunta";
		}

		$statement = null;
		die();
	}

	// List Questions
	public static function mdlListQuestions($table){
		// Consultation To Bring Questions
		$statement = Connection::connect()->prepare("SELECT * FROM $table");
		$statement->execute();

		$response = $statement->fetchAll();

		return $response;

		$statement = null;
		die();
	}

	// Delete questions
	public static function mdlDeleteQuestions($table, $id){
		// Query To Delete Questions
		$statement = Connection::connect()->prepare("DELETE FROM $table WHERE id = :id");
		
		$statement->bindParam(":id", $id, PDO::PARAM_INT);

		$response = $statement->execute();

		if ($response) {
			return "La pregunta se elimino";
		} else {
			return "Ocurrio un error al tratar de eliminar la pregunta";
		}

		$statement = null;
		die();
	}

	// Bring Data Of The Question To Be Edited
	public static function mdlBringDataToEdit($table, $id){
		// Query To Bring The Data Of The Question To Be Edited
		$statement = Connection::connect()->prepare("SELECT * FROM $table WHERE id = :id");
		
		$statement->bindParam(":id", $id, PDO::PARAM_INT);

		$statement->execute();

		$response = $statement->fetch();


		if ($response !== false) {
			return $response;
		} else {
			$url = Routes::mainRoute();
			$redirection = $url."list-questions";
			
			header("Location: $redirection");
		}
		

		$statement = null;
		die();
	}

	// Edit Question
	public static function mdlEditQuestion($table, $data){
		$id = $data["id"];
		$question = $data["question"];
		$optionA = $data["optionA"];
		$optionB = $data["optionB"];
		$optionC = $data["optionC"];
		$answer = $data["response"];
		
		// Query To Edit The Question
		$statement = Connection::connect()->prepare("UPDATE $table SET question='$question', option_a='$optionA', option_b='$optionB', option_c='$optionC', answer='$answer' WHERE id='$id'");
		

		if ($statement->execute()) {
			return "Pregunta Editada";
		} else {
			return "No se pudo editar la pregunta";
		}

		$statement = null;
		die();
	}

	// Convert questions to JSON
	public static function mdlConvertQuestionsToJSON($table) {
		// Consultation To Bring Questions
		$statement = Connection::connect()->prepare("SELECT * FROM $table");
		$statement->execute();

		$response = $statement->fetchAll();

		return $response;

		$statement = null;
		die();
	}
}