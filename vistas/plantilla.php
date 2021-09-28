<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php 
		session_start();

		/*==============================================
		 Ruta Principal Del Proyecto 
		/*=============================================*/
		$url = Rutas::principal();

		// Favicon
		echo '<link rel="icon" type="image/png" href="'.$url.'complementos/img/logo.png" />';

		if (isset($_SESSION["user"])) {
			if (isset($_GET["route"])) {
				$rutas = explode("/", $_GET["route"]);

				if ($rutas[0] == "login-admin" || $rutas[0] == "crear-pregunta" || $rutas[0] == "lista-preguntas") {
					header("Location: $url"); 
					
				} else {
					echo '<title>!Error 404!</title>';
				}
			} else {
				echo '<title>San Francisco City</title>';
			}
			
		} 
		
		if (isset($_SESSION["admin"])) {
			if (isset($_GET["route"])) {
				$rutas = explode("/", $_GET["route"]);

				if ($rutas[0] == "login-admin") {
					header("Location: $url"); 
					
				} elseif ($rutas[0] == "crear-pregunta") {
					echo '<title>Crear Pregunta</title>';

				} elseif ($rutas[0] == "lista-preguntas") {
					echo '<title>Lista De Preguntas</title>';

				} else {
					echo '<title>!Error 404!</title>';
				}
			} else {
				echo '<title>Panel Administrativo</title>';
			}
		} 

		if (isset($_GET["route"])) {
			$rutas = explode("/", $_GET["route"]);
			
			if ($rutas[0] == "login-admin") {
				echo '<title>Iniciar Como Administrador</title>';

			} elseif ($rutas[0] == "crear-pregunta" && !isset($_SESSION["admin"]) || $rutas[0] == "lista-preguntas" && !isset($_SESSION["admin"])) {
				header("Location: $url"); 

			} else {
				echo '<title>!Error 404!</title>';
			}

		} else {
			echo '<title>GameJay</title>';
		}
		
	?>

	<!--=====================================================
	|-PLugins De CSS Y Fuentes                              |
	=======================================================-->
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/plugins/bootstrap.min.css">
	<!-- Iconos -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<!-- Fuentes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!--=====================================================
	|-Hojas De Estiolo CSS                                  |
	=======================================================-->
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/globales.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/homePage.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/nosotros.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/servicios.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/productos.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/contacto.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/footer.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/ventanasModales.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/sanFrancisco.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/loginAdmin.css">
	<link rel="stylesheet" href="<?php echo $url; ?>complementos/css/error404.css">
	
	<!--=====================================================
	|-Plugins De JavaScript                                 |
	=======================================================-->
	<script src="<?php echo $url; ?>complementos/js/plugins/jquery-3.5.1.min.js"></script>
	<script src="<?php echo $url; ?>complementos/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo $url; ?>complementos/js/plugins/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	<?php 

		if (isset($_SESSION["user"])) {
			if (isset($_GET["route"])) {
				if ($rutas[0] != "login-admin") {
					require "modulos/error404.php";
					
				} else {
					header("Location: $url");
				}
			} else {
				require "modulos/san-francisco.php";
				require "modulos/footer.php";
			}

		} elseif (isset($_SESSION["admin"])) {
			if (isset($_GET["route"])) {
				if ($rutas[0] != "login-admin" && $rutas[0] != "crear-pregunta" && $rutas[0] != "lista-preguntas") {
					require "modulos/error404.php";

				} else {

					if ($rutas[0] == "login-admin") {
						header("Location: $url"); 
					} else {
						require "modulos/menu-administrativo.php";
						require "modulos/$rutas[0].php";
					}
				}
			} else {
				require "modulos/menu-administrativo.php";
				require "modulos/inicio-administrativo.php";
			}

		} elseif (isset($_GET["route"])) {
			if ($rutas[0] == "login-admin") {
				require "modulos/$rutas[0].php";
			} else {
				require "modulos/error404.php";
			}

		} else {
			require "modulos/home-page.php";
			require "modulos/footer.php";
		}
		
	?>

	<!--=====================================================
	|-Archivos De JavaScript                                |
	=======================================================-->
	<script src="<?php echo $url; ?>complementos/js/homePage.js"></script>
	<script src="<?php echo $url; ?>complementos/js/contacto.js"></script>
	<script src="<?php echo $url; ?>complementos/js/ventanasModales.js"></script>
</body>
</html>