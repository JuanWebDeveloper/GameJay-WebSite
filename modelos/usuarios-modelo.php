<?php

// Conexion Con La Base De Datos
require "conexion.php";

class ModeloUsuarios{
	/*=============================================
	 Registro De Usuarios
	=============================================*/
	public static function mdlRegistroUsuarios($tabla, $datos){

		// Consulta Para Comprobar Que El Correo No Este Registrado
		$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :email LIMIT 1");
		$statement->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$statement->execute();
		
		// Respuesta De La Consulta Que Comprueba Que El Correo No Este Registrado
		$resultado = $statement->fetch(); 
		
		// En Caso De Que El Correo Este Registrado Notificamos Al Usuario
		if ($resultado != false) {
			return "El correo de $datos[email] ya esta registrado";
		
		// Si El Correo No Esta Registrado Procedemos Con El Registro
		} else {
			// Consulta Para Registrar Al Usuario
			$query = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, password, terminos) VALUES (:nombre, :email, :password, :terminos)");

			// Indicamos Los Valores Y Tipos De Datos Que Se Enviaran En La Consulta
			$query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$query->bindParam(":email", $datos["email"], PDO::PARAM_STR);
			$query->bindParam(":password", $datos["password"], PDO::PARAM_STR);
			$query->bindParam(":terminos", $datos["terminos"], PDO::PARAM_BOOL);

			if ($query->execute()) {
				return "Correcto";
			} else {
				return "No Se Pudo Completar El Registro";
			}

			$query = null;
		}
		
		$statement = null;
		die();
		
	}

	/*=============================================
	 Inicio De Sesion
	=============================================*/
	public static function mdlIniciarSesion($tabla, $datos){

		// Peticion Para Comprobar Que El Usuario Y La Contraseña Existan En La Base De Datos Y Conincidan
		$statement = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");

		// Indicamos Los Valores Y Tipos De Datos Que Se Enviaran En La Consulta
		$statement->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$statement->bindParam(":password", $datos["password"], PDO::PARAM_STR);

		$statement->execute();

		// Respuesta De La Consulta Que Comprueba Que El Usuario Y La Contraseña Existan En La Base De Datos Y Coninciden
		$resultado = $statement->fetch();

		// En Caso De Que El Correo Y La Contraseña Existan Y Coincidan Procedemos A Crear La Sesion
		if ($resultado !== false) {
			$_SESSION["user"] = $datos["email"];
			echo "<script>location.reload();</script>";

		// En Caso De Que El Correo Y La Contraseña No Existan O No Coincidan Notificamos Al Usuario
		} else {
			return "Datos Incorrectos";
		}

		$statement = null;
		die();

	}
}