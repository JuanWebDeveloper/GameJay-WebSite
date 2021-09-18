<?php

class ControladorUsuarios{
	/*=============================================
	 Registro De Usuarios
	=============================================*/
	public static function ctrRegistroUsuarios(){

		if (isset($_POST["registro"])) {
			$errores = ""; 

			// Validar Que Los Campos No Esten Vacios
			if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["password"]) || empty($_POST["passwordTwo"])) {
				$errores = "Por favor rellene todos los campos";

				return $errores;
			
			// Validar Que Se Envie Un Correo Valido
			} elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
				 $errores = "Por favor escriba un correo valido";

				return $errores;
			
			// Validar Que Las Contraseñas Sean Iguales
			} elseif (md5($_POST["password"]) != md5($_POST["passwordTwo"])) {
				$errores = "Las contraseñas no coinciden";

				return $errores;
				
			// Validar Que Se Acepten Los Terminos Y Condiciones	
			} elseif (empty($_POST["terminos"])) {
				$errores = "Debe aceptar los términos y condiciones";

				return $errores;
				
			} else {
				// Obtener Los Datos Que Se Enviaron
				$tabla = "usuarios";
				$encriptar = md5($_POST["password"]);
				$datos = array(
					"nombre" => filter_var(strtolower($_POST["nombre"]), FILTER_SANITIZE_STRING), 
					"email" => filter_var(strtolower($_POST["correo"]), FILTER_SANITIZE_EMAIL), 
					"password" => $encriptar, 
					"terminos" => $_POST["terminos"], 
				);

				// Respuesta De La Consulta Al Modelo
				$respuesta = ModeloUsuarios::mdlRegistroUsuarios($tabla, $datos);
				
				if ($respuesta == "Correcto") {
					$respuesta = "Registro exitoso";

					return $respuesta;
					
				} else {
					$errores = $respuesta;
					
					return $errores;
				}	
			}
		}

	}

	/*=============================================
	 Inicio De Sesion
	=============================================*/
	public static function ctrIniciarSesion(){

		if (isset($_POST["login"])) {
			$errores = "";

			// Validar Que Los Campos No Esten Vacios
			if (empty($_POST["correo"]) || empty($_POST["password"])) {
				$errores = "Por favor rellene todos los campos";

				return $errores;

			// Validar Que Se Envie Un Correo Valido
			} elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
				$errores = "Por favor escriba un correo valido";

				return $errores;

			} else {
				// Obtener Los Datos Que Se Enviaron
				$tabla = "usuarios";
				$encriptar = md5($_POST["password"]);
				$datos = array(
					"email" => filter_var(strtolower($_POST["correo"]), FILTER_SANITIZE_EMAIL), 
					"password" => $encriptar, 
				);

				// Respuesta De La Consulta Al Modelo
				$respuesta = ModeloUsuarios::mdlIniciarSesion($tabla, $datos);
				
				return $respuesta;
			}
		}
		
	}

}