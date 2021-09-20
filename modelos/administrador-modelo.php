<?php

class ModeloAdministrador{
	/*=============================================
	 Iniciar Sesion Como Administrador
	=============================================*/
	public static function mdlIniciarSesionAdmin($tabla, $datos){
		// Peticion Para Comprobar Que El Usuario Y La Contraseña Existan En La Base De Datos Y Conincidan
		$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :email AND password = :password");

		// Indicamos Los Valores Y Tipos De Datos Que Se Enviaran En La Consulta
		$statement->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$statement->bindParam(":password", $datos["password"], PDO::PARAM_STR);

		$statement->execute();

		// Respuesta De La Consulta Que Comprueba Que El Usuario Y La Contraseña Existan En La Base De Datos Y Coninciden
		$resultado = $statement->fetch();

		// En Caso De Que El Correo Y La Contraseña Existan Y Coincidan Procedemos A Crear La Sesion
		if ($resultado !== false) {
			$_SESSION["admin"] = $datos["email"];
			echo "<script>location.reload();</script>";

		// En Caso De Que El Correo Y La Contraseña No Existan O No Coincidan Notificamos Al Usuario
		} else {
			return "Datos Incorrectos";
		}

		$statement = null;
		die();
	}
}