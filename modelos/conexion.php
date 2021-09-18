<?php

class Conexion{

	/*==============================================
     Conexion Con La Base De Datos
    /*=============================================*/
	public static function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=game_jay",
						"root",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;
	}

}