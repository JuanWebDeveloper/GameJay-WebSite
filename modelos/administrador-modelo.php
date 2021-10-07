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

	/*=============================================
	 Crear Preguntas
	=============================================*/
	public static function mdlCrearPregunta($tabla, $datos){
		// Consulta Para Registrar La Pregunta
		$statement = Conexion::conectar()->prepare("INSERT INTO $tabla (pregunta, opcion_a, opcion_b, opcion_c, respuesta) VALUES (:pregunta, :opcionA, :opcionB, :opcionC, :respuesta)");

		// Indicamos Los Valores Y Tipos De Datos Que Se Enviaran En La Consulta
		$statement->bindParam(":pregunta", $datos["pregunta"], PDO::PARAM_STR);
		$statement->bindParam(":opcionA", $datos["opcionA"], PDO::PARAM_STR);
		$statement->bindParam(":opcionB", $datos["opcionB"], PDO::PARAM_STR);
		$statement->bindParam(":opcionC", $datos["opcionC"], PDO::PARAM_STR);
		$statement->bindParam(":respuesta", $datos["respuesta"], PDO::PARAM_STR);

		if ($statement->execute()) {
			return "Pregunta Creada";
		} else {
			return "No se pudo guardar la pregunta";
		}

		$statement = null;
		die();
	}

	/*=============================================
	 Listar Preguntas
	=============================================*/
	public static function mdlListarPregunta($tabla){
		// Consulta Para Traer Las Preguntas
		$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$statement->execute();

		$resultado = $statement->fetchAll();

		return $resultado;

		$statement = null;
		die();
	}

	/*=============================================
	 Eliminar Preguntas
	=============================================*/
	public static function mdlEliminarPregunta($tabla, $id){
		// Consulta Para Eliminar La Preguntas
		$statement = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		
		$statement->bindParam(":id", $id, PDO::PARAM_INT);

		$resultado = $statement->execute();

		if ($resultado) {
			return "La pregunta se elimino";
		} else {
			return "Ocurrio un error al tratar de eliminar la pregunta";
		}

		$statement = null;
		die();
	}

	/*=============================================
	 Traer Datos De La Pregunta Que Se Editara
	=============================================*/
	public static function mdlTraerDatosParaEditar($tabla, $id){
		// Consulta Para Traer Los Datos De La Pregunta Que Se Editara
		$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		
		$statement->bindParam(":id", $id, PDO::PARAM_INT);

		$statement->execute();

		$resultado = $statement->fetch();


		if ($resultado !== false) {
			return $resultado;
		} else {
			$url = Rutas::principal();
			$redireccion = $url."lista-preguntas";
			
			header("Location: $redireccion");
		}
		

		$statement = null;
		die();
	}

	/*=============================================
	 Editar La Pregunta 
	=============================================*/
	public static function mdlEditarPregunta($tabla, $datos){
		// Indicamos Los Valores Y Tipos De Datos Que Se Enviaran En La Consulta-
		$id = $datos["id"];
		$pregunta = $datos["pregunta"];
		$opcionA = $datos["opcionA"];
		$opcionB = $datos["opcionB"];
		$opcionC = $datos["opcionC"];
		$respuesta = $datos["respuesta"];
		
		// Consulta Para Editar La Pregunta 
		$statement = Conexion::conectar()->prepare("UPDATE $tabla SET pregunta='$pregunta', opcion_a='$opcionA', opcion_b='$opcionB', opcion_c='$opcionC', respuesta='$respuesta' WHERE id='$id'");
		

		if ($statement->execute()) {
			return "Pregunta Editada";
		} else {
			return "No se pudo editar la pregunta";
		}

		$statement = null;
		die();
	}
}