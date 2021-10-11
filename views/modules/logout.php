<?php

require_once "../../models/routes.php";
session_start();

$url = Routes::mainRoute();

// Close Sesion
session_destroy();
$_SESSION = array();

// Redirect And We Kill The Page
header("Location: $url");
die();