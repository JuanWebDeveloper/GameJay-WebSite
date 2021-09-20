<?php

/*==============================================
 Controladores
/*=============================================*/
require "./controladores/plantilla-controlador.php";
require "./controladores/usuarios-controlador.php";
require "./controladores/administrador-controlador.php";

/*==============================================
 Modelos
/*=============================================*/
require "./modelos/rutas.php";
require "./modelos/usuarios-modelo.php";
require "./modelos/administrador-modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
