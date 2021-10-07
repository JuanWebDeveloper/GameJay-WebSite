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

	/*=============================================
	 Crear Preguntas
	=============================================*/
	public static function ctrCrearPregunta(){

		if (isset($_POST["crearPregunta"])) {
			$errores = "";

			// Validar Que Los Campos No Esten Vacios
			if (empty($_POST["pregunta"]) || empty($_POST["opcionA"]) || empty($_POST["opcionB"]) || empty($_POST["opcionC"]) || empty($_POST["respuesta"])) {
				$errores = "Por favor rellene todos los campos";

				return $errores;

			// Validar Que Se Envie Una Respuesta Valida
			} elseif ($_POST["respuesta"] != "a" && $_POST["respuesta"] != "b" && $_POST["respuesta"] != "c" && $_POST["respuesta"] != "A" && $_POST["respuesta"] != "B" && $_POST["respuesta"] != "C") {
				$errores = "El campo de opción correcta es inválido";

				return $errores;

			} else {
				// Obtener Los Datos Que Se Enviaron
				$tabla = "preguntas";
				$datos = array(
					"pregunta" => $_POST["pregunta"], 
					"opcionA" => $_POST["opcionA"], 
					"opcionB" => $_POST["opcionB"], 
					"opcionC" => $_POST["opcionC"], 
					"respuesta" => $_POST["respuesta"]
				);

				// Respuesta De La Consulta Al Modelo
				$respuesta = ModeloAdministrador::mdlCrearPregunta($tabla, $datos);
				
				return $respuesta;
			}
		}
		
	}

	/*=============================================
	 Listar Preguntas
	=============================================*/
	public static function ctrListarPreguntas(){
		$tabla = "preguntas";
		$respuesta = ModeloAdministrador::mdlListarPregunta($tabla);

		return $respuesta;
	}

	/*=============================================
	 Eliminar Preguntas
	=============================================*/
	public static function ctrEliminarPregunta($id){
		$tabla = "preguntas";
		$respuesta = ModeloAdministrador::mdlEliminarPregunta($tabla, $id);

		return $respuesta;
	}

	/*=============================================
	 Traer Datos De La Pregunta Que Se Editara
	=============================================*/
	public static function ctrTraerDatosParaEditar($id){
		$tabla = "preguntas";
		$respuesta = ModeloAdministrador::mdlTraerDatosParaEditar($tabla, $id);

		return $respuesta;
	}

	/*=============================================
	 Editar La Pregunta 
	=============================================*/
	public static function ctrEditarPregunta($id){
		$errores = "";

		// Validar Que Los Campos No Esten Vacios
		if (empty($_POST["pregunta"]) || empty($_POST["opcionA"]) || empty($_POST["opcionB"]) || empty($_POST["opcionC"]) || empty($_POST["respuesta"])) {
			$errores = "Por favor rellene todos los campos";

			return $errores;

		// Validar Que Se Envie Un Correo Valido
		} elseif ($_POST["respuesta"] != "a" && $_POST["respuesta"] != "b" && $_POST["respuesta"] != "c" && $_POST["respuesta"] != "A" && $_POST["respuesta"] != "B" && $_POST["respuesta"] != "C") {
			$errores = "El campo de opción correcta es inválido";

			return $errores;

		} else {
			// Obtener Los Datos Que Se Enviaron
			$tabla = "preguntas";
			$datos = array(
				"id" => $id,
				"pregunta" => $_POST["pregunta"], 
				"opcionA" => $_POST["opcionA"], 
				"opcionB" => $_POST["opcionB"], 
				"opcionC" => $_POST["opcionC"], 
				"respuesta" => $_POST["respuesta"]
			);

			// Respuesta De La Consulta Al Modelo
			$respuesta = ModeloAdministrador::mdlEditarPregunta($tabla, $datos);

			return $respuesta;
		}
	}
}