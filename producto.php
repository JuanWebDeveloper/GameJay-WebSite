<?php

session_start();

// Validar Que Si La Sesion Esta Activa No Deje Redijir Al Home Page
if (isset($_SESSION["user"])) {
	require "./vistas/producto-vista.php";
} else {
	header("Location: homePage.php");
}
