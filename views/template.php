<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php 
		session_start();

		// Main Route
		$url = Routes::mainRoute();

		// Favicon
		echo '<link rel="icon" type="image/png" href="'.$url.'accessories/img/favicon.png" />';

		if (isset($_SESSION["user"])) {
			if (isset($_GET["route"])) {
				$routes = explode("/", $_GET["route"]);

				if ($routes[0] == "login-admin" || $routes[0] == "create-questions" || $routes[0] == "list-questions" || $routes[0] == "edit-question") {
					header("Location: $url"); 
					
				} elseif ($routes[0] == "san-francisco-city") {
					echo '<title>San Francisco City</title>';

				} elseif ($routes[0] == "criminal-questions" || $routes[0] == "criminal-questions-game") {
					echo '<title>Preguntas Criminales</title>';

				} else {
					echo '<title>!Error 404!</title>';
				}
			} else {
				$userName = ucwords($_SESSION['user']['name']);
				echo "<title>Bienvenido $userName</title>";
			}
			
		} 
		
		if (isset($_SESSION["admin"])) {
			if (isset($_GET["route"])) {
				$routes = explode("/", $_GET["route"]);

				if ($routes[0] == "login-admin" || $routes[0] == "san-francisco-city" || $routes[0] == "criminal-questions" || $routes[0] == "criminal-questions-game") {
					header("Location: $url"); 
					
				} elseif ($routes[0] == "create-questions") {
					echo '<title>Crear Pregunta</title>';

				} elseif ($routes[0] == "list-questions") {
					echo '<title>Lista De Preguntas</title>';

				} elseif ($routes[0] == "edit-question") {
					if (isset($routes[1])) {
						echo '<title>Editar Pregunta</title>';
					} else {
						header("Location: $url"); 
					}
				} 
				else {
					echo '<title>!Error 404!</title>';
				}
			} else {
				echo '<title>Panel Administrativo</title>';
			}
		} 

		if (isset($_GET["route"])) {
			$routes = explode("/", $_GET["route"]);
			
			if ($routes[0] == "login-admin") {
				echo '<title>Iniciar Como Administrador</title>';

			} elseif ($routes[0] == "create-questions" && !isset($_SESSION["admin"]) || $routes[0] == "list-questions" && !isset($_SESSION["admin"]) || $routes[0] == "edit-question" && !isset($_SESSION["admin"]) || $routes[0] == "san-francisco-city" && !isset($_SESSION["user"]) || $routes[0] == "criminal-questions" && !isset($_SESSION["user"]) || $routes[0] == "criminal-questions-game" && !isset($_SESSION["user"])) {
				header("Location: $url"); 

			} else {
				echo '<title>!Error 404!</title>';
			}

		} else {
			echo '<title>GameJay</title>';
		}
		
	?>

	<!--=======================-->
	<!-- CSS Plugins And Fonts -->
	<!--=======================-->
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/plugins/sweetalert2.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/plugins/animate.min.css">
	<!-- Icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!--=============-->
	<!-- Custom CSS  -->
	<!--=============-->
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/globals.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/homePage.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/navbar.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/about.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/services.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/products.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/contact.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/footer.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/modals.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/sanFrancisco.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/loginAdmin.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/admin.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/error404.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/welcomeUser.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/criminalQuestions.css">
	<link rel="stylesheet" href="<?php echo $url; ?>accessories/css/criminalQuestionsGame.css">
	
	<!--====================-->
	<!-- JavaScript Plugins -->
	<!--====================-->
	<script src="<?php echo $url; ?>accessories/js/plugins/jquery-3.5.1.min.js"></script>
	<script src="<?php echo $url; ?>accessories/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo $url; ?>accessories/js/plugins/popper.min.js"></script>
	<script src="<?php echo $url; ?>accessories/js/plugins/sweetalert2.min.js"></script>
	<script src="<?php echo $url; ?>accessories/js/plugins/particles.min.js"></script>
</head>
<body>
	<?php 

		if (isset($_SESSION["user"])) {
			
			if (isset($_GET["route"])) {

				if ($routes[0] != "san-francisco-city" && $routes[0] != "criminal-questions" && $routes[0] != "criminal-questions-game") {
					require "modules/error-404.php";

				} elseif ($routes[0] == "san-francisco-city" || $routes[0] == "criminal-questions") {
					require "modules/user-navbar.php";
					require "modules/$routes[0].php";
					require "modules/footer.php";
				} elseif ($routes[0] == "criminal-questions-game") {
					require "modules/$routes[0].php";
				}

			} else {
				require "modules/user-navbar.php";
				require "modules/welcome-user.php";
			}
			

		} elseif (isset($_SESSION["admin"])) {

			if (isset($_GET["route"])) {

				if ($routes[0] != "login-admin" && $routes[0] != "create-questions" && $routes[0] != "list-questions" && $routes[0] != "edit-question") {
					require "modules/error-404.php";

				} else {
					require "modules/administration-navbar.php";
					require "modules/$routes[0].php";
				}

			} else {
				require "modules/administration-navbar.php";
				require "modules/administration-home.php";
			}

		} elseif (isset($_GET["route"])) {
			if ($routes[0] == "login-admin") {
				require "modules/$routes[0].php";
			} else {
				require "modules/error-404.php";
			}

		} else {
			require "modules/home-page.php";
			require "modules/footer.php";
		}
		
	?>

	<!--====================-->
	<!-- Custom JavaScript  -->
	<!--====================-->
	<script src="<?php echo $url; ?>accessories/js/navbar.js"></script>
	<script src="<?php echo $url; ?>accessories/js/contact.js"></script>
	<script src="<?php echo $url; ?>accessories/js/modals.js"></script>
	<script src="<?php echo $url; ?>accessories/js/criminalQuestions.js"></script>
	<script src="<?php echo $url; ?>accessories/js/particles.js"></script>
	<script src="<?php echo $url; ?>accessories/js/criminalQuestionsGame.js"></script>
</body>
</html>