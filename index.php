<?php

session_start();

if (isset($_SESSION["user"])) {
	header("Location: producto.php");
} else {
	header("Location: homePage.php");
}
