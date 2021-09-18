<?php

/*==============================================
 Controladores
/*=============================================*/
require "./controladores/plantilla-controlador.php";
require "./controladores/usuarios-controladores.php";

/*==============================================
 Modelos
/*=============================================*/
require "./modelos/rutas.php";
require "./modelos/usuarios-modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
