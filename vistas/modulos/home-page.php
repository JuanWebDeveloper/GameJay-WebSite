<!--=====================================================
|-HomePage                                    |
=======================================================-->
<div class="containerHomePage" id="inicio">
	<!--=====================================================
	|-Contenido                                      |
	=======================================================-->
	<div class="containerContenido">
		<div class="descripcion">
			<h1>Bienvenido a Game<span>JAY</span></h1>
			<p>No olvides que para acceder a todo nuestro contenido debes iniciar sesión</p>
			<center style="margin-top: 5px">
				<a href="#modalInicioSesion" data-toggle="modal">
					<span id="span1"></span>
					<span id="span2"></span>
					<span id="span3"></span>
					<span id="span4"></span>
					iniciar sesión
				</a>
			</center>
		</div>
	</div>
</div>

<!--=====================================================
|-Menu De Navegacion                                    |
=======================================================-->
<div class="containerMenu" id="containerMenu">
	<div class="logoMenu">
		<img src="<?php echo $url; ?>complementos/img/logo.svg" width="250px" height="40px" />
	</div>

	<nav id="navbar">
		<ul>
			<li><a href="#inicio">Inicio</a></li>
			<li><a href="#nosotros">Nosotros</a></li>
			<li><a href="#servicios">Servicios</a></li>
			<li><a href="#productos">Productos</a></li>
			<li><a href="#contacto">Contacto</a></li>
			<li class="inicioResponsive">
				<a href="#modalInicioSesion" data-toggle="modal">iniciar sesion</a>
			</li>
		</ul>
	</nav>

	<div class="menuResponsive">
		<a id="bars"><i class="fas fa-bars"></i></a>
	</div>
</div>

<!--=====================================================
|-Ventana Modal De iniciar sesion y Registro            |
=======================================================-->
<div class="modal fade containerModalLR" id="modalInicioSesion">
	<div class="modal-dialog">
		<div class="modal-content containerContenido">
			<!-- Header de la ventana -->
			<div class="modal-header modalHeader">
				<div id="elegir" class="elegir">
					<div id="EL"></div>
					<button type="button" id="acceder" class="toggle-btn">Iniciar sesión</button>
					<button type="button" id="registro" class="toggle-btn">Registrar</button>
					<a class="close" style="font-size: 45px; color: #0077ff" data-dismiss="modal" aria-hidden="true"
						><i class="fas fa-times-circle"></i
					></a>
				</div>

				<div class="containerRD">
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

			<!-- Contenido De La Ventana -->
			<div class="modal-body modalBody">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="login" class="inputGroup">
					<div class="modalLogo">
						<img src="<?php echo $url; ?>complementos/img/inicioDeSesion/login.svg" width="100%" height="100%" />
						<p>Inicio de sesión seguro</p>
					</div>
					<input type="text" class="inputField" name="correo" placeholder="Correo" />
					<input type="password" class="inputField" name="password" placeholder="Contarseña" />
					<input type="checkbox" class="checkbox" /><label>Recordar contraseña.</label>
					<a type="button" id="olvido">¿Olvido su contraseña?</a>
					<input type="hidden" name="login" value="login">
					<button type="submit" class="submitButton">Acceder</button>
				</form>

				<?php 
					$erroresIniciarSesion = "";

					if (isset($_POST["login"])) {
						$iniciarSesion = ControladorUsuarios::ctrIniciarSesion();
						
						$erroresIniciarSesion = $iniciarSesion;
					}

				?>
				
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="registrar" class="inputGroup">
					<input type="text" class="inputField" name="nombre" placeholder="Nombre Completo" />
					<input type="text" class="inputField" name="correo" placeholder="Correo" />
					<input type="password" class="inputField" name="password" placeholder="Contarseña" />
					<input type="password" class="inputField" name="passwordTwo" placeholder="Repita la contarseña" />
					<input type="checkbox" name="terminos" class="checkbox" /><label
						><a href="#" style="color: #0077ff; font-size: 15px"
							>Acepto los términos y condiciones.</a
						></label
					>
					<input type="hidden" name="registro" value="registro">
					<button type="submit" class="submitButton" id="enviar">Registrarse</button>
				</form>
				
				<?php 
					$registrar = "";
					$erroresRegistro = "";

					if (isset($_POST["registro"])) {
						$registrar = ControladorUsuarios::ctrRegistroUsuarios();

						if ($registrar != "Registro exitoso") {
							$erroresRegistro = $registrar;
						}
					}
				?>

				<form id="recuperarContraseña" class="inputGroup">
					<div class="modalLogo" style="margin-bottom: 40px">
						<img src="<?php echo $url; ?>complementos/img/inicioDeSesion/recuperar.svg" width="100%" height="100%" />
						<p style="font-size: 15px">Correo y la última contraseña que recuerdes</p>
					</div>
					<input type="text" class="inputField" placeholder="Correo" />
					<input type="password" class="inputField" placeholder="Contarseña" />
					<button type="submit" style="margin-top: 20px" class="submitButton">Continuar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Validar Si Hay Errores -->
<?php if(!empty($erroresRegistro) || !empty($erroresIniciarSesion)): ?>
	<!-- Habilitar Modal -->
	<script>
		$( document ).ready(function() {
			$('#errores').modal('toggle')
		});
	</script>

	<!-- Modal Donde Se Muestran Los Errores -->
	<div class="modal fade containerModalErrores" id="errores">
		<div class="modal-dialog">
			<div class="modal-content modalContentErrores">
				<div class="modal-header modelHeaderErrore">
					<h2>Surgió Un Error</h2>
					<a class="close" data-dismiss="modal" aria-hidden="true"
						><i class="fas fa-times-circle"></i>
					</a>
				</div>

				<div class="modal-body modelBodyErrore">
					<?php 
						if (!empty($erroresRegistro)) {
							echo "<h5>$registrar</h5>";
						} else {
							echo "<h5>$erroresIniciarSesion</h5>";
						}
					?>

				</div>
			</div>
		</div>
	</div>
<?php elseif($registrar == "Registro exitoso"): ?>
<!-- Validar Si Se Registro -->

	<!-- Habilitar Modal -->
	<script>
		$( document ).ready(function() {
			$('#correcto').modal('toggle')
		});
	</script>

	<!-- Modal Donde Se Muestran Que Registro Correctamente -->
	<div class="modal fade" id="correcto">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header modelHeaderCorrecto">
					<h2><?php echo $registrar; ?> </h2>
					<a class="close" data-dismiss="modal" aria-hidden="true"
						><i class="fas fa-times-circle"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<!--=====================================================
|-Nosotros                                      |
=======================================================-->
<div class="guiaNavbar" id="nosotros"></div>
<div class="containerNosotros">
	<h1 class="titulosPrincipales"><span>Nosotros</span></h1>
	<!--=========================
	|-Quienes Somos         |
	==========================-->
	<div class="containerDescripcion">
		<div class="containerImg">
			<img src="<?php echo $url; ?>complementos/img/nosotros/quienesSomos.png" width="100%" height="100%" />
		</div>

		<div class="containerTexto">
			<h2>¿Quienes Somos?</h2>
			<p>
				Somos Game<span style="color: #0077ff">Jay</span> una empresa Colombiana que desarrolla juegos
				pedagógicos que busca ayudar a la sociedad de una manera divertida y practica con los problemas
				sociales que se les presentan en sus vidas diarias, pretendemos lograr un impacto en toda Latino
				América y ser la empresa más reconocida a nivel nacional e internacional por sus juegos
				pedagógicos y por el impacto logrado, con el fin de ayudar a la sociedad disminuyendo la violencia
				y la cantidad de jóvenes que siguen malos pasos capacitándolos para que puedan tomar las mejores
				decisiones para sus vidas.
			</p>
		</div>
	</div>

	<!--=========================
	|-¿Para que lo hacemos?     |
	==========================-->
	<div class="containerDescripcion">
		<div class="containerTexto">
			<h2>¿Para que lo hacemos?</h2>
			<p>
				Para lograr un impacto en toda Latino América, buscamos con nuestros programas y productos
				disminuir la violencia, la pobreza y ayudar a todas aquellas personas que por algún motivo tomaron
				malas decisiones en el pasado y que ahora están buscando una manera de corregirlos y darle un giro
				a sus vidas, así mismo buscamos prevenir a los jóvenes con el fin de que no cometan errores que
				puedan poner en riesgos sus futuros y vidas, ya que al ellos ver como los errores que estas
				personas cometieron los perjudicaron y afectaron, estas experiencias los impulse a no seguir los
				mismos pasos y así no cometer dichos errores.
			</p>
		</div>

		<div class="containerImg">
			<img src="<?php echo $url; ?>complementos/img/inicioDeSesion/recuperar.png" width="100%" height="100%" />
		</div>
	</div>

	<!--=========================
	|-¿Como lo hacemos?         |
	==========================-->
	<div class="containerDescripcion">
		<div class="containerImg">
			<img src="<?php echo $url; ?>complementos/img/nosotros/comoLoHacemos.png" width="100%" height="100%" />
		</div>

		<div class="containerTexto">
			<h2>¿Como lo hacemos?</h2>
			<p>
				Lo hacemos por medio de juegos, nuestra empresa crea juegos pedagógicos los cuales están enfocados
				en los problemas sociales mas comunes de Latino América, el objetivo de estos juegos es mostrarle
				a las personas mientras juegan como el tomar una mala decisión o seguir un mal camino pueden
				afectar sus vidas y al mismo tiempo enseñarles que tienen que hacer para corregir estas malas
				decisiones, la razón por la cual hacemos esto por medio de juegos es que así las personas se
				divierten y logramos que le pongan atención al juego y así mismo al mensaje que les queremos dar.
			</p>
		</div>
	</div>

	<!--=========================
	|-Misión         |
	==========================-->
	<div class="containerDescripcion">
		<div class="containerTexto">
			<h2>Misión</h2>
			<p>
				Fomentar el razonamiento lógico de los jugadores por medio de juegos interactivos que incentiven a
				un pensamiento auto crítico y reflexivo en los participantes, esto por medio de juegos que tengan
				como finalidad resolver problemáticas sociales que puedan ser abordadas desde charlas para la
				concientización de los futuros jugadores y, más importante aún, disminuir el índice de
				criminalidad en los jóvenes de los barrios.
			</p>
		</div>

		<div class="containerImg">
			<img src="<?php echo $url; ?>complementos/img/Nosotros/mision.png" width="100%" height="100%" />
		</div>
	</div>

	<!--=========================
	|-Visión         |
	==========================-->
	<div class="containerDescripcion">
		<div class="containerImg">
			<img src="<?php echo $url; ?>complementos/img/Nosotros/vision.png" width="100%" height="100%" />
		</div>

		<div class="containerTexto">
			<h2>Visión</h2>
			<p>
				Para el año 2022 duplicaremos a las problemáticas establecidas, logrando un acercamiento social,
				brindando a la comunidad un mejor ambiente. Buscamos la lealtad del consumidor colombiano,
				posicionando juegos innovadores de GAMES JAY como preferidos en el segmento de educación y ayuda
				didáctica para con la sociedad
			</p>
		</div>
	</div>
</div>

<!--=====================================================
|-Servicios                                      |
=======================================================-->
<div class="guiaNavbar" id="servicios"></div>
<div class="contenedorServicios">
	<h1 class="titulosPrincipales"><span>Servicios</span></h1>
	<div class="container">
		<div class="row contenedorCajas">
			<!--=========================
			|-Juegos Pedagogicos        |
			==========================-->
			<div class="col-lg-4 col-md-12">
				<div class="main">
					<div class="services">
						<div class="logosServicios">
							<img src="<?php echo $url; ?>complementos/img/servicios/juegos.png" alt="" />
						</div>
						<h4>Juegos pedagógicos</h4>
						<p>
							Nuestra empresa se encarga principalmente de la elaboracion de juegos recreacionales
							(pedagogicos) que se encargan de resolver y concientizar a los jovenes sobre los distiento
							problemas sociales que hay actualmente en la sociedad.
						</p>
					</div>
					<div class="shadowOne"></div>
					<div class="shadowTwo"></div>
				</div>
			</div>

			<!--=========================
			|-Desarrollo Web      |
			==========================-->
			<div class="col-lg-4 col-md-12">
				<div class="main">
					<div class="services">
						<div class="logosServicios">
							<img src="<?php echo $url; ?>complementos/img/servicios/web.png" alt="" />
						</div>
						<h4>Desarrollo Web</h4>
						<p>
							Contamos con excelentes desarrolladores webs capaces de dar accesorias y realizar cualquier
							proyecto planteado por nuestros clientes, el costo variara de el tamaño y dificultad del
							proyecto, trabajamos con las mejores tecnologías y buenas prácticas, nuestro trabajo es
							garantizado.
						</p>
					</div>
					<div class="shadowOne"></div>
					<div class="shadowTwo"></div>
				</div>
			</div>

			<!--=========================
			|- Optimizacion y Seo       |
			==========================-->
			<div class="col-lg-4 col-md-12">
				<div class="main">
					<div class="services">
						<div class="logosServicios">
							<img src="<?php echo $url; ?>complementos/img/servicios/seo.png" alt="" />
						</div>
						<h4>Optimizacion y Seo</h4>
						<p>
							Si cuentas con una web lenta o que esta mal posicionada, nuestro grupo de profesionales
							especializados en seo y optimización pueden resolverte tu problema, garantizamos que al
							final del trabajo tu página web será más fluida y fácil de hallar.
						</p>
					</div>
					<div class="shadowOne"></div>
					<div class="shadowTwo"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--=====================================================
|-Productos                                             |
=======================================================-->
<div class="guiaNavbar" id="productos"></div>
<div class="contenedorProducto">
	<h1 class="titulosPrincipales"><span>Productos</span></h1>

	<div class="contenedor-imagenes">
		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/sfc/tablero.jpeg" />
			<div class="overlay">
				<h2>San Francisco city</h2>
			</div>
		</div>

		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/1 (3).jpg" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/1 (4).jpg" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/1 (5).jpg" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/1 (6).jpg" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/1 (7).jpg" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/1 (8).jpg" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/1 (9).jpg" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>

		<div class="imagen">
			<img src="<?php echo $url; ?>complementos/img/productos/1 (10).jpg" />
			<div class="overlay">
				<h3><a>Ver mas</a></h3>
			</div>
		</div>
	</div>
</div>

<!--=====================================================
|-Contacto                                      |
=======================================================-->
<div class="guiaNavbar" id="contacto"></div>
<div class="contenedorContacto">
	<h1 class="titulosPrincipales"><span>Contacto</span></h1>

	<div class="ContenedorPrincipalContacto">
		<div class="informacionDeContacto">
			<h2>Informacion De Contacto</h2>

			<ul class="informacion">
				<li>
					<span><img src="<?php echo $url; ?>complementos/img/contacto/ubicacion.png" /></span>
					<span>97 ##36-38, Medellín, Antioquia</span>
				</li>

				<li>
					<span><img src="<?php echo $url; ?>complementos/img/contacto/correo.png" /></span>
					<span>gamesjay@gmail.com</span>
				</li>

				<li>
					<span><img src="<?php echo $url; ?>complementos/img/contacto/telefono.png" /></span>
					<span>5213098</span>
				</li>

				<li><a onclick="ubicacion()">Ver ubicacion</a></li>
			</ul>

			<ul class="redesSocialesContacto">
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

		<div class="formularioDeContacto">
			<h2>Enviar Mensaje</h2>

			<form class="formBox">
				<div class="inputBox w50">
					<input type="text" required />
					<span>Nombre Completo</span>
				</div>

				<div class="inputBox w50">
					<input type="text" required />
					<span>Apellidos Completo</span>
				</div>

				<div class="inputBox w50">
					<input type="text" required />
					<span>Correo Electronico</span>
				</div>

				<div class="inputBox w50">
					<input type="text" required />
					<span>Numero Celular</span>
				</div>

				<div class="inputBox w100">
					<textarea required></textarea>
					<span>Mensaje</span>
				</div>

				<div class="inputBox w100">
					<center>
						<input type="submit" value="Enviar" />
					</center>
				</div>
			</form>
		</div>
	</div>
</div>


