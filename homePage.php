<?php

session_start();
require "./conexion.php";

// Validar Que Si La Sesion Esta Activa No Deje Redijir Al Home Page
if (isset($_SESSION["user"])) {
	header("Location: index.php");
} 

/*--=====================================================
|- Validacion De Que Los Datos Se Enviarion             |
=======================================================--*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Condicion Para Saber Si Se Esta Registrando 
	if (isset($_POST["registro"])) {
		$errores = "";
		$correcto = "";

		/*--=====================================================
		|- Validaciones Necesarias                               |
		=======================================================--*/

		// Validar Que Los Campos No Esten Vacios
		if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["password"]) || empty($_POST["password_two"])) {
			$errores .= "<h5>Por favor rellene todos los campos</h5>";

		// Validar Que Se Envie Un Correo Valido
		} elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
			$errores .= "<h5>Por favor escriba un correo valido</h5>";

		// Validar Que Las Contraseñas Sean Iguales
		} elseif (hash("sha512", $_POST["password"]) != hash("sha512", $_POST["password_two"])) {
			$errores .= "<h5>Las contraseñas no son iguales</h5>";

		// Validar Que Se Acepten Los Terminos Y Condiciones
		} elseif (empty($_POST["terminos"])) {
			$errores .= "<h5>Debe aceptar los terminos y condiciones</h5>";
		
		}  else {
			// Obtener Los Datos Que Se Enviaron
			$nombre = filter_var(strtolower($_POST["nombre"]), FILTER_SANITIZE_STRING);
			$email = filter_var(strtolower($_POST["correo"]), FILTER_SANITIZE_EMAIL);
			$password = $_POST["password"];
			$password_two = $_POST["password_two"];
			$terminos = $_POST["terminos"];

			// Consulta Para Verificar Que El Correo No Este Registrado
			$query = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE email = :email LIMIT 1");
			$query->execute(array(":email" => $email));

			// Respuesta De La Base De Datos
			$resultado = $query->fetch();

			if ($resultado != false) {
				$errores .= "<h5>El correo ya esta registado</h5>";
			}

			// Encriptar Las Contraseñas
			$password = hash("sha512", $password);
			$password_two = hash("sha512", $password_two);
		}

		/*--=====================================================
		|- Registrar Datos En La Base De Datos                  |
		=======================================================--*/

		// Validar Que No Hayan Errores
		if ($errores == "") {
			// Petición
			$query = Conexion::conectar()->prepare("INSERT INTO usuarios (nombre, email, password, terminos) VALUES (:nombre, :email, :password, :terminos)");

			// Envio De Datos
			$query->execute(array(":nombre" => $nombre, ":email" => $email, ":password" => $password, ":terminos" => $terminos));
			$correcto = "Sea registrado Exictosamete";
		}
	} 

	// Condicion Para Saber Si Esta Iniciando Sesion
	if (isset($_POST["login"])) {
		$errores = "";
		
		/*--=====================================================
		|- Validaciones Necesarias                               |
		=======================================================--*/

		// Validar Que Los Campos No Esten Vacios
		if (empty($_POST["correo"]) || empty($_POST["password"])) {
			$errores .= "<h5>Por favor rellene todos los campos</h5>";

		// Validar Que Se Envie Un Correo Valido
		} elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
			$errores .= "<h5>Por favor escriba un correo valido</h5>";
		} else {
			// Obtener Los Datos Que Se Enviaron
			$email = filter_var(strtolower($_POST["correo"]), FILTER_SANITIZE_EMAIL);
			$password = $_POST["password"];
			$password = hash("sha512", $password);

			// Peticion Para Comprobar Que El Usuario Y La Contraseña Existan En La Base De Datos
			$query = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");
			$query->execute(array(":email" => $email, ":password" => $password));

			// Respuesta De La Petcion
			$resultado = $query->fetch();

			// Validar Que El Resultado De La Peticion No Sea Negativo
			if ($resultado !== false) {
				// Creamos la sesion y redireccionamos
				$_SESSION["user"] = $email;
				header("Location: index.php");
			} else {
				$errores .= "<h5>Datos Incorrectos</h5>";
			}
		}

		
	}
}

require "./vistas/homePage-vista.php";
