<!--=============-->
<!-- HomePage    -->
<!--=============-->
<div class="navbar-guide" id="home" style="height: 0;"></div>
<div class="home-page_container" id="particles-js">
	<!--=============-->
	<!-- Content     -->
	<!--=============-->
	<div class="content-container">
		<div class="description">
			<h1>Bienvenido a Game<span>JAY</span></h1>
			<p>No olvides que para acceder a todos nuestros productos debes iniciar sesión.</p>
			<a href="#loginModal" class="button default" data-toggle="modal">
				<span>iniciar sesión</span>
			</a>
		</div>
	</div>
</div>

<!--=============-->
<!-- Navbar      -->
<!--=============-->
<div class="navigation-menu" id="navigationMenu">
	<div class="logo-container">
		<img src="<?php echo $url; ?>accessories/img/logo.png" alt="Logo de GameJay">
	</div>

	<div class="bars" id="btnBars">
		<input type="checkbox" id="check">
		<label htmlFor="btnBars">
			<span id="line1"></span>
			<span id="line2"></span>
			<span id="line3"></span>
		</label>
	</div>

	<ul class="navigation animate__animated" id="navigation">
		<li>
			<a href="#home" class="website-section">Inicio</a>
		</li>
		<li>
			<a href="#aboutUs" class="website-section">Nosotros</a>
		</li>
		<li>
			<a href="#services" class="website-section">Servicios</a>
		</li>
		<li>
			<a href="#products" class="website-section">Productos</a>
		</li>
		<li>
			<a href="#contact" class="website-section">Contacto</a>
		</li>
		<li>
			<a href="#loginModal" data-toggle="modal" class="website-section">iniciar sesion</a>
		</li>
	</ul>
</div>

<!--=============-->
<!-- Modals      -->
<!--=============-->
<div class="modal fade modal-container" id="loginModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!--=============-->
			<!-- Header      -->
			<!--=============-->
			<div class="modal-header modal-header_lrr">
				<div id="chooseModal" class="choose-modal">
					<div id="cm"></div>
					<button type="button" id="modalLogin" class="toggle-btn">Iniciar sesión</button>
					<button type="button" id="modalRegistration" class="toggle-btn">Registrar</button>
					<a class="close" data-dismiss="modal" aria-hidden="true"
						><i class="fas fa-times-circle"></i
					></a>
				</div>

				<div class="modal-social_networks">
					<ul>
						<li>
							<a href="#"><i class="fab fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-google-plus"></i></a>
						</li>
						<li>
							<a href=""><i class="fab fa-github"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<!--=============-->
			<!-- Content     -->
			<!--=============-->
			<div class="modal-body modal-body_lrr">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="login" class="modal-input_group">
					<div class="modal-logo">
						<img src="<?php echo $url; ?>accessories/img/modals/login.svg" width="100%" height="100%" alt="Imagen de inicio de sesion" />
						<p>Inicio de sesión seguro</p>
					</div>
					<input type="text" class="modal-input_field" name="email" placeholder="Correo" />
					<input type="password" class="modal-input_field" name="password" placeholder="Contarseña" />
					<input type="checkbox" class="modal-checkbox" /><label>Recordar contraseña.</label>
					<a type="button" id="recoverPasswordLink">¿Olvido su contraseña?</a>
					<input type="hidden" name="login" value="login">
					<button type="submit" class="modal-submit_button">Acceder</button>
				</form>

				<?php 
					$loginErros = "";

					if (isset($_POST["login"])) {
						$login = UserController::ctrLogin();
						
						$loginErros = $login;
					}

				?>
				
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="registration" class="modal-input_group">
					<input type="text" class="modal-input_field" name="name" placeholder="Nombre Completo" />
					<input type="text" class="modal-input_field" name="email" placeholder="Correo" />
					<input type="password" class="modal-input_field" name="password" placeholder="Contarseña" />
					<input type="password" class="modal-input_field" name="passwordTwo" placeholder="Repita la contarseña" />
					<input type="checkbox" name="terms" class="modal-checkbox" /><label
						><a href="#" style="color: #0077ff; font-size: 15px"
							>Acepto los términos y condiciones.</a
						></label
					>
					<input type="hidden" name="registration" value="registration">
					<button type="submit" class="modal-submit_button" id="send">Registrarse</button>
				</form>
				
				<?php 
					$registration = "";
					$registrationErrors = "";

					if (isset($_POST["registration"])) {
						$registration = UserController::ctrUserRegistration();

						if ($registration != "Registro exitoso") {
							$registrationErrors = $registration;
						}
					}
				?>

				<form id="recoverPassword" class="modal-input_group">
					<div class="modal-logo" style="margin-bottom: 40px">
						<img src="<?php echo $url; ?>accessories/img/modals/recover.svg" alt="Imagen de recuperacion de contraseña" width="100%" height="100%" />
						<p style="font-size: 15px">Correo y la última contraseña que recuerdes</p>
					</div>
					<input type="text" name="email" class="modal-input_field" placeholder="Correo" />
					<input type="password" name="password" class="modal-input_field" placeholder="¿Cual Es La Ultima Contarseña Que Recuerda?" />
					<button type="submit" style="margin-top: 20px" class="modal-submit_button">Continuar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Validate If There Are Errors -->
<?php 
	if (!empty($registrationErrors)) {
		errorOccurred($registrationErrors);

	} elseif (!empty($loginErros)) {
		errorOccurred($loginErros);

	} elseif ($registration == "Registro exitoso") {
		successfulQuery($registration);
	}
?>

<!--=============-->
<!-- About    -->
<!--=============-->
<div class="navbar-guide" id="aboutUs"></div>
<div class="about-us_container">
	<h2 class="main-titles"><span>Nosotros</span></h2>
	<div class="about-us_content">
		<!--==============-->
		<!-- About Navbar -->
		<!--==============-->
		<div class="navbar-about">
			<ul class="navigation-about">
				<li><a class="active"><span>¿Quienes Somos?</span></a></li>
				<li><a><span>¿Para que lo hacemos?</span></a></li>
				<li><a><span>¿Como lo hacemos?</span></a></li>
				<li><a><span>Misión</span></a></li>
				<li><a><span>Visión</span></a></li>
			</ul>
		</div>

		<!--=============-->
		<!-- Content     -->
		<!--=============-->
		<div class="about-us_container-text" id="aboutContainerText">
			<div class="animate__animated about-us_section-text active">
				<p>
					Somos Game<span style="color: #4e4c6b">Jay</span> una empresa Colombiana que desarrolla juegos
					pedagógicos que busca ayudar a la sociedad de una manera divertida y practica con los problemas
					sociales que se les presentan en sus vidas diarias, pretendemos lograr un impacto en toda Latino
					América y ser la empresa más reconocida a nivel nacional e internacional por sus juegos
					pedagógicos y por el impacto logrado, con el fin de ayudar a la sociedad disminuyendo la violencia
					y la cantidad de jóvenes que siguen malos pasos capacitándolos para que puedan tomar las mejores
					decisiones para sus vidas.
				</p>
			</div>

			<div class="animate__animated about-us_section-text">
				<p>
					Para lograr un impacto en toda Latino América, buscamos con nuestros programas y Products
					disminuir la violencia, la pobreza y ayudar a todas aquellas personas que por algún motivo tomaron
					malas decisiones en el pasado y que ahora están buscando una manera de corregirlos y darle un giro
					a sus vidas, así mismo buscamos prevenir a los jóvenes con el fin de que no cometan errores que
					puedan poner en riesgos sus futuros y vidas, ya que al ellos ver como los errores que estas
					personas cometieron los perjudicaron y afectaron, estas experiencias los impulse a no seguir los
					mismos pasos y así no cometer dichos errores.
				</p>
			</div>

			<div class="animate__animated about-us_section-text">
				<p>
					Lo hacemos por medio de juegos, nuestra empresa crea juegos pedagógicos los cuales están enfocados
					en los problemas sociales mas comunes de Latino América, el objetivo de estos juegos es mostrarle
					a las personas mientras juegan como el tomar una mala decisión o seguir un mal camino pueden
					afectar sus vidas y al mismo tiempo enseñarles que tienen que hacer para corregir estas malas
					decisiones, la razón por la cual hacemos esto por medio de juegos es que así las personas se
					divierten y logramos que le pongan atención al juego y así mismo al mensaje que les queremos dar.
				</p>
			</div>

			<div class="animate__animated about-us_section-text">
				<p>
					Fomentar el razonamiento lógico de los jugadores por medio de juegos interactivos que incentiven a
					un pensamiento auto crítico y reflexivo en los participantes, esto por medio de juegos que tengan
					como finalidad resolver problemáticas sociales que puedan ser abordadas desde charlas para la
					concientización de los futuros jugadores y, más importante aún, disminuir el índice de
					criminalidad en los jóvenes de los barrios.
				</p>
			</div>

			<div class="animate__animated about-us_section-text">
				<p>
					Para el año 2022 duplicaremos a las problemáticas establecidas, logrando un acercamiento social,
					brindando a la comunidad un mejor ambiente. Buscamos la lealtad del consumidor colombiano,
					posicionando juegos innovadores de GAMES JAY como preferidos en el segmento de educación y ayuda
					didáctica para con la sociedad
				</p>
			</div>
		</div>
	</div>
</div>

<!--=============-->
<!-- Services    -->
<!--=============-->
<div class="navbar-guide" id="services"></div>
<div class="container-services">
	<h1 class="main-titles"><span>Servicios</span></h1>
	<div class="container">
		<div class="row boxes-container">
			<!--=================-->
			<!-- Pedagogic Games -->
			<!--=================-->
			<div class="col-lg-4 col-md-12">
				<div class="main main-one">
					<div class="services">
						<div class="logo-services">
							<img src="<?php echo $url; ?>accessories/img/services/games.png" alt="Imagen de control de video juego" />
						</div>
						<h4>Juegos pedagógicos</h4>
						<p>
							Nuestra empresa se encarga principalmente de la elaboracion de juegos recreacionales
							(pedagogicos) que se encargan de resolver y concientizar a los jovenes sobre los distiento
							problemas sociales que hay actualmente en la sociedad.
						</p>
					</div>
					<div class="shadow-one"></div>
					<div class="shadow-two"></div>
				</div>
			</div>

			<!--=================-->
			<!-- Web Development -->
			<!--=================-->
			<div class="col-lg-4 col-md-12">
				<div class="main">
					<div class="services">
						<div class="logo-services">
							<img src="<?php echo $url; ?>accessories/img/services/web.png" alt="Imagen de la web" />
						</div>
						<h4>Desarrollo Web</h4>
						<p>
							Contamos con excelentes desarrolladores webs capaces de dar accesorias y realizar cualquier
							proyecto planteado por nuestros clientes, el costo variara de el tamaño y dificultad del
							proyecto, trabajamos con las mejores tecnologías y buenas prácticas, nuestro trabajo es
							garantizado.
						</p>
					</div>
					<div class="shadow-one"></div>
					<div class="shadow-two"></div>
				</div>
			</div>

			<!--======================-->
			<!-- Optimization And Seo -->
			<!--======================-->
			<div class="col-lg-4 col-md-12">
				<div class="main">
					<div class="services">
						<div class="logo-services">
							<img src="<?php echo $url; ?>accessories/img/services/seo.png" alt="Imagen de seo" />
						</div>
						<h4>Optimizacion y Seo</h4>
						<p>
							Si cuentas con una web lenta o que esta mal posicionada, nuestro grupo de profesionales
							especializados en seo y optimización pueden resolverte tu problema, garantizamos que al
							final del trabajo tu página web será más fluida y fácil de hallar.
						</p>
					</div>
					<div class="shadow-one"></div>
					<div class="shadow-two"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--=============-->
<!-- Products    -->
<!--=============-->
<div class="navbar-guide" id="products"></div>
<div class="products-container">
	<h1 class="main-titles"><span>Productos</span></h1>

	<div class="image-container">
		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/sfc/board.jpeg" />
			<div class="overlay">
				<h2>San Francisco city</h2>
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/one.jpg" alt="Imagen de pagina web" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/two.jpg" alt="Imagen de pagina web" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/three.jpg" alt="Imagen de pagina web" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/four.jpg" alt="Imagen de pagina web" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/five.jpg" alt="Imagen de pagina web" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/six.jpg" alt="Imagen de pagina web" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/seven.jpg" alt="Imagen de pagina web" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $url; ?>accessories/img/products/eight.jpg" alt="Imagen de pagina web" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>
	</div>
</div>

<!--=============-->
<!-- Contact     -->
<!--=============-->
<div class="navbar-guide" id="contact"></div>
<div class="contact-container">
	<h1 class="main-titles"><span>Contacto</span></h1>

	<div class="contact-information_container">
		<div class="contact-information">
			<h2>Informacion De Contacto</h2>

			<ul class="information">
				<li>
					<span><img src="<?php echo $url; ?>accessories/img/contact/location.png" alt="Icono de ubicacion" /></span>
					<span>97 ##36-38, Medellín, Antioquia</span>
				</li>

				<li>
					<span><img src="<?php echo $url; ?>accessories/img/contact/email.png" alt="Icono de correo" /></span>
					<span>gamesjay@gmail.com</span>
				</li>

				<li>
					<span><img src="<?php echo $url; ?>accessories/img/contact/phone.png" alt="Icono de celular" /></span>
					<span>5213098</span>
				</li>

				<li><a onclick="locationContact()">Ver ubicacion</a></li>
			</ul>

			<ul class="contact-social_networks">
				<li>
					<a href="#"><i class="fab fa-facebook"></i></a>
				</li>
				<li>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</li>
				<li>
					<a href="#"><i class="fab fa-twitter"></i></a>
				</li>
				<li>
					<a href="#"><i class="fab fa-youtube"></i></a>
				</li>
			</ul>
		</div>

		<div class="form-contact">
			<h2>Enviar Mensaje</h2>

			<form class="form-box">
				<div class="input-box width-50">
					<input type="text" required />
					<span>Nombre Completo</span>
				</div>

				<div class="input-box width-50">
					<input type="text" required />
					<span>Apellidos Completo</span>
				</div>

				<div class="input-box width-50">
					<input type="text" required />
					<span>Correo Electronico</span>
				</div>

				<div class="input-box width-50">
					<input type="text" required />
					<span>Numero Celular</span>
				</div>

				<div class="input-box width-100">
					<textarea required></textarea>
					<span>Mensaje</span>
				</div>

				<div class="input-box width-100">
					<center>
						<input type="submit" value="Enviar" />
					</center>
				</div>
			</form>
		</div>
	</div>
</div>


