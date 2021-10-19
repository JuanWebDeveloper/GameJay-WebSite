<?php

// Database Connection
require_once "connection.php";

class UserModel {
	//  User Registration
	public static function mdlUserRegistration($table, $data){
		// Query To Verify That The Mail Is Not Registered
		$statement = Connection::connect()->prepare("SELECT * FROM $table WHERE email = :email LIMIT 1");
		$statement->bindParam(":email", $data["email"], PDO::PARAM_STR);
		$statement->execute();
		
		// Response To The Query That Verifies That The Email Is Not Registered
		$response = $statement->fetch(); 
		
		// In Case The Mail Is Registered Notify The User
		if ($response != false) {
			return "El correo de $data[email] ya esta registrado";
		
		// If The Email Is Not Registered, We Proceed With The Registration
		} else {
			// Query To Register The User
			$query = Connection::connect()->prepare("INSERT INTO $table (name, email, password, terms) VALUES (:name, :email, :password, :terms)");

			// We Indicate The Values And Types Of Data That Will Be Sent In The Query
			$query->bindParam(":name", $data["name"], PDO::PARAM_STR);
			$query->bindParam(":email", $data["email"], PDO::PARAM_STR);
			$query->bindParam(":password", $data["password"], PDO::PARAM_STR);
			$query->bindParam(":terms", $data["terms"], PDO::PARAM_BOOL);

			if ($query->execute()) {
				return "Successful";
			} else {
				return "No Se Pudo Completar El Registro";
			}

			$query = null;
		}
		
		$statement = null;
		die();
		
	}

	// Login
	public static function mdlLogin($table, $data){
		// Request To Verify That The Username And Password Exist In The Database And Match
		$statement = Connection::connect()->prepare("SELECT * FROM $table WHERE email = :email AND password = :password");

		$statement->bindParam(":email", $data["email"], PDO::PARAM_STR);
		$statement->bindParam(":password", $data["password"], PDO::PARAM_STR);

		$statement->execute();

		$response = $statement->fetch();

		// In The Event That The Email And Password Exist And Coincide, We Proceed To Create The Session
		if ($response !== false) {
			$_SESSION["user"] = $response;
			echo "<script>location.reload();</script>";

		// In The Event That The Email And Password Do Not Exist Or Do Not Match, We Notify The User
		} else {
			return "Datos Incorrectos";
		}

		$statement = null;
		die();
	}
}