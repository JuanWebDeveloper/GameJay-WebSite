<?php

class ControladorAdministrador{
	/*=============================================
	 Iniciar Sesion Como Administrador
	=============================================*/
	public static function ctrIniciarSesionAdmin(){
		if (isset($_POST["administrador"])) {
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
				$tabla = "admin";
				$encriptar = md5($_POST["password"]);
				$datos = array(
					"email" => filter_var(strtolower($_POST["correo"]), FILTER_SANITIZE_EMAIL), 
					"password" => $encriptar, 
				);

				// Respuesta De La Consulta Al Modelo
				$respuesta = ModeloAdministrador::mdlIniciarSesionAdmin($tabla, $datos);
				
				return $respuesta;
			}
		}
	}
}