<?php

class UserController {
	//  User Registration
	public static function ctrUserRegistration() {
		if (isset($_POST["registration"])) {
			$errors = ""; 

			// Validate That The Fields Are Not Empty
			if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["passwordTwo"])) {
				$errors = "Por favor rellene todos los campos";

				return $errors;
			
			// Validate That A Valid Email Is Sent
			} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				 $errors = "Por favor escriba un correo valido";

				return $errors;
			
			// Validate That Passwords Are The Same
			} elseif (md5($_POST["password"]) != md5($_POST["passwordTwo"])) {
				$errors = "Las contraseñas no coinciden";

				return $errors;
				
			// Validate That Terms And Conditions Are Accepted	
			} elseif (empty($_POST["terms"])) {
				$errors = "Debe aceptar los términos y condiciones";

				return $errors;
				
			} else {
				$table = "users";
				$encrypt = md5($_POST["password"]);
				// Get The Data Sent By The Form
				$data = array(
					"name" => filter_var(strtolower($_POST["name"]), FILTER_SANITIZE_STRING), 
					"email" => filter_var(strtolower($_POST["email"]), FILTER_SANITIZE_EMAIL), 
					"password" => $encrypt, 
					"terms" => $_POST["terms"], 
				);

				// Query Response To Model
				$response = UserModel::mdlUserRegistration($table, $data);
				
				if ($response == "Successful") {
					$response = "Registro exitoso";

					return $response;
					
				} else {
					$errors = $response;
					
					return $errors;
				}	
			}
		}

	}

	// Login
	public static function ctrLogin(){
		if (isset($_POST["login"])) {
			$errors = "";

			if (empty($_POST["email"]) || empty($_POST["password"])) {
				$errors = "Por favor rellene todos los campos";

				return $errors;

			} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$errors = "Por favor escriba un correo valido";

				return $errors;

			} else {
				$table = "users";
				$encrypt = md5($_POST["password"]);
				$data = array(
					"email" => filter_var(strtolower($_POST["email"]), FILTER_SANITIZE_EMAIL), 
					"password" => $encrypt, 
				);

				$response = UserModel::mdlLogin($table, $data);
				
				return $response;
			}
		}
		
	}

}