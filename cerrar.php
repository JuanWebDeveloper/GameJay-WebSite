<?php

session_start();

// Cerramos la sesion
session_destroy();
$_SESSION = array();

// Redirecconamo y matamos la pagina
header("Location: index.php");
die();