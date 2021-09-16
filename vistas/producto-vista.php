<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>GameJay</title>
		<link rel="icon" type="image/png" href="img/logo.png" />
		<!--=====================================================
        |-PLugins De CSS                                         |
        =======================================================-->
		<link rel="stylesheet" href="css/plugins/bootstrap.min.css" />
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
			integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
			crossorigin="anonymous"
		/>

		<!--=====================================================
        |-Hojas De Estiolo CSS                                   |
        =======================================================-->
		<link rel="stylesheet" href="css/globales.css" />
		<link rel="stylesheet" href="css/homePage.css" />
		<link rel="stylesheet" href="css/footer.css" />
		<link rel="stylesheet" href="css/juego.css" />
		<link rel="stylesheet" href="css/ventanasModales.css" />
		<!--=====================================================
        |-Plugins De JavaScript                                 |
        =======================================================-->
		<script src="js/plugins/jquery-3.5.1.min.js"></script>
		<script src="js/plugins/bootstrap.min.js"></script>
	</head>
	<body>
		<!--=====================================================
        |-Descripcion                                      |
        =======================================================-->
		<div class="containerHeaderSF" id="inicio">
			<div class="contenidoSF">
				<h2>San Francisco city</h2>
				<h3>"La calle de la delincuencia"</h3>
				<center style="margin-top: 30px">
					<a style="color: #fff" class="btnCD">
						<span id="span1"></span>
						<span id="span2"></span>
						<span id="span3"></span>
						<span id="span4"></span>
						Comprar Juego
					</a>
				</center>
			</div>
		</div>
		<!--=====================================================
        |-Menu De Navegacion                                    |
        =======================================================-->
		<div class="containerMenu" id="containerMenu">
			<div class="logoMenu">
				<img src="img/logo.svg" width="250px" height="40px" />
			</div>

			<nav id="navbar">
				<ul>
					<li><a href="#inicio">Inicio</a></li>
					<li><a href="#problematica">Problematica</a></li>
					<li><a href="#solucion">Solucion</a></li>
					<li><a href="#juego">Juego</a></li>
					<li><a href="#reglas">Reglas</a></li>
					<li class="inicioResponsive">
						<a href="cerrar.php">cerrar sesion</a>
					</li>
				</ul>
			</nav>

			<div class="menuResponsive">
				<a id="bars"><i class="fas fa-bars"></i></a>
			</div>
		</div>

		

		<!--=====================================================
        |-Problematica                                      |
        =======================================================-->
		<div class="guiaNavbar" id="problematica"></div>
		<div class="problematicaYSolucion">
			<h1 class="titulosPrincipales"><span>problematica</span></h1>

			<div class="contenedorProblematicaYSolucion">
				<div class="contenedorImagenProblematicaYSolucion">
					<img src="img/productos/sfc/robo.png" width="100%" height="100%" />
				</div>

				<div class="descripcionProblematicaYSolucion">
					<p>
						La delincuencia con el paso de los años se ha convertido en un problema social cada vez más grande
						y común en todo el mundo, los crimines han aumentado de manera exponencial y estos pueden ser
						delitos tan leves como lo es difamar a una persona como también pueden ser algunos muy graves como
						lo son robar o incluso asesinar, esta problemática se ha convertido en un problema realmente grabe
						a nivel global por lo fácil y común que se ha vuelto delinquir es por esto que es necesario que se
						busquen alternativas realmente efectivas para frenar o disminuir los crímenes.
					</p>
				</div>
			</div>
		</div>

		<!--=====================================================
        |-Solucion                                    |
        =======================================================-->
		<div class="guiaNavbar" id="solucion"></div>
		<div class="problematicaYSolucion">
			<h1 class="titulosPrincipales"><span>Solucion</span></h1>

			<div class="contenedorProblematicaYSolucion">
				<div class="descripcionProblematicaYSolucion">
					<p>
						Como empresa proponemos la alternativa de un juego pedagógico cuya finalidad es que el impacto que
						el juego genere sea suficiente como para generar un sentimiento de concientización en los
						jugadores, que el juego empiece a ser más conocido para que así el mensaje que la empresa trata de
						transmitir le llegue a muchas más personas, con el impacto que la empresa tiene pensado recibir se
						planea bajar los índices de criminalidad en los barrios, generar una cultura de paz, concientizar
						a las masas y hacer recapacitar a los jóvenes que piensan que la vida criminal es la vida fácil.
					</p>
				</div>

				<div class="contenedorImagenProblematicaYSolucion">
					<img src="img/productos/sfc/solucion.png" width="100%" height="90%" />
				</div>
			</div>
		</div>

		<!--=====================================================
        |-Partes Del Juego                                      |
        =======================================================-->
		<div class="guiaNavbar" id="juego"></div>
		<div class="contenedorDescripcionJuego">
			<h1 class="titulosPrincipales"><span>San Francisco city</span></h1>

			<div class="contenedorPartesJuego">
				<div class="contenedorImagen">
					<img src="img/productos/sfc/tablero.jpeg" width="100%" height="100%" />
				</div>

				<div class="contenedorEspecificaciones">
					<h2>Tablero</h2>
					<p>
						El tablero está hecho de madera refinada y mide 22cm de ancho y 22cm de largo, posee 85 casillas
						en las que el jugador puede posarse y movilizarse, a lo largo del tablero hay distintos tipos de
						casillas, casillas como:
						<br /><br />
						<span>Casilla de acto:</span> si el jugador cae en una casilla de acto deberá tomar una carta con
						el nombre de dicha casilla, en la que se le presentará un caso en el cual se le insite a cometer
						un delito, y si el jugador decide hacer el delito pasará a avanza una casilla y tomar la siguiente
						carta, y por el contrario si se niega a hacer el delito, deberá retroceder 10 casillas.
						<br /><br />
						<span>consecuencia:</span> en esta casilla deberá afrontar las consecuencia del delito que ha
						perpetuado, puede ser desde la cárcel a la muerte (hay delitos en los que puede quedar impune)
						<br /><br />
						<span>Consejo:</span> en esta casilla el jugador tomara una carta de consejo en la que se le darán
						tips para no cometer delitos inconcientemente. <br /><br />
						En la parte superior del tablero encontramos un puente que mide 10cm de alto y 15cm de largo, este
						puente tiene como finalidad acortar el camino para los jugadores que descubran como funciona este
						objeto del juego.
						<br /><br />
						A un lateral del tablero hay un lugar rodado por unas rejas de 6cm de alto, este lugar es la
						cárcel del juego que mide 15cm de largo y 5cm de ancho. Esta cárcel tiene como finalidad retener a
						los jugadores durante algunos turnos (el número de turnos que permanezcan dependerá del delito que
						hayan cometido)
						<br /><br />
						A lo largo del tablero también nos podemos encontrar la sección donde se encuentra el cementerio,
						que tiene como finalidad guardar las casillas de los jugadores que pierdan la vida a lo largo de
						la partida (si un jugador muere no podrá jugar más a lo largo de la partida). El cementerio tiene
						unas medidas de 6cm de largo y 3cm de ancho, y las casillas del cementerio miden 0.5cm x 0.5cm, y
						las rejas que le rodean miden 6cm de largo.
					</p>
				</div>
			</div>

			<div class="contenedorPartesJuego">
				<div class="contenedorEspecificaciones">
					<h2>Fichas</h2>
					<p>
						Los jugadores se movilizaran por el tablero con tres personajes diferentes, cada uno de estos
						personajes tiene su propio diseño, estos tienen unas dimensiones de 6cm de largo y 3cm de ancho,
						están hechos con madera moldeada con el fin de lograr un resultado ligero, agradable a la vista y
						resistente a su vez, cada personaje tendrá una apariencia distinta variara el tipo y color de
						cabello, el tipo de ropa y el color de piel.
					</p>
				</div>

				<div class="contenedorImagen">
					<img src="img/productos/sfc/fichas.jpeg" width="100%" height="100%" />
				</div>
			</div>

			<div class="contenedorPartesJuego">
				<div class="contenedorImagen">
					<img src="img/productos/sfc/dados.jpeg" width="100%" height="100%" />
				</div>

				<div class="contenedorEspecificaciones">
					<h2>Dados</h2>
					<p>
						Los jugadores desplazaran sus personajes por el tablero dependiendo del numero que saquen en su
						par de dados, los dados están construidos con plástico elástico y tienen unas dimensiones de 5cm
						de ancho y 4 de alto, la página web también contara con unos dados virtuales de repuesto en caso
						de que el jugador pierda sus dados físicos, puedes acceder a los dados virtuales presionando el
						botón de abajo.
					</p>
					<center style="margin: 30px 0">
						<a style="color: #333" class="btnCD">
							<span id="span1"></span>
							<span id="span2"></span>
							<span id="span3"></span>
							<span id="span4"></span>
							Dados virtuales
						</a>
					</center>
				</div>
			</div>
		</div>

		<!--=====================================================
        |-Reglas Del Juego                                      |
        =======================================================-->
		<div class="guiaNavbar" id="reglas"></div>
		<div class="contenedorReglasDelJuego">
			<h1 class="titulosPrincipales"><span>Reglas del juego</span></h1>
			<div class="contenedorDescripcionReglas">
				<div class="contenedorReglas">
					<ul>
						<li><i class="fas fa-star"></i>Los jugadores deben ser máximo 3.</li>
						<li><i class="fas fa-star"></i>El jugador que lo desee, puede iniciar el juego.</li>

						<li>
							<i class="fas fa-star"></i>En <span>SAN FRANCISCO CITY</span> hay 4 modalidades de casillas y
							cartas:
							<hr />
							<ul>
								<li>
									<i class="fas fa-asterisk"></i><span>Casilla/carta de ACTO:</span> En esta se le plantea un
									caso hipotético sobre actos delictivos.
								</li>
								<li>
									<i class="fas fa-asterisk"></i><span>Casilla/carta de DECISIÓN:</span> En esta el jugador
									deberá elegir la opción que mas le convenga sobre el caso anterior.
								</li>
								<li>
									<i class="fas fa-asterisk"></i><span>Casilla/carta de CONSECUENCIA:</span> En este tipo de
									casilla/carta, se reflejará las consecuencias que el jugador deberá afrontar por tomar malas
									decisiones en las casillas de actos, dichos castigos pueden ser desde tiempo en prisión o ir
									al cementerio.
								</li>
								<li>
									<i class="fas fa-asterisk"></i><span>Casilla/carta de CONSEJO:</span> En esta casilla, se le
									proporcionara un consejo que le puede ayudar en la vida real del jugador.
								</li>
							</ul>
						</li>

						<li>
							<i class="fas fa-star"></i>En <span>SAN FRANCISCO CITY</span> hay 2 lugares en donde los
							jugadores pueden pagar las consecuencias de sus actos:
							<hr />
							<ul>
								<li>
									<i class="fas fa-asterisk"></i><span>La cárcel:</span>El jugador que llegue a la cárcel,
									deberá afrontar o pasar un tiempo en este lugar, el tiempo que pase dependerá de los años
									que se les haya dado por cometer actos delictivos
									<span>(1 año equivale a 1 turno perdido).</span>
								</li>
								<li>
									<i class="fas fa-asterisk"></i><span>El cementerio:</span>El jugador que llegue al
									cementerio, automáticamente habrá perdido el juego.
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="contenedorReglas">
					<ul>
						<li>
							<i class="fas fa-star"></i>Si un jugar cae en una casilla de <span>“ACTO”</span>, deberá tomar
							la carta correspondiente a esta casilla, donde se encontrará con una acción que debe realizar.
							<ul>
								<li>
									<i class="fas fa-asterisk"></i><span>Ejemplo:</span> Difamar el nombre de una persona.
								</li>
							</ul>
							<hr />
						</li>

						<li>
							<i class="fas fa-star"></i>Siguiente a esto el jugador deberá tomar una carta llamada
							<span>“DECISION”</span> en donde se le presenta la opción donde el jugador si lo desea podrá
							realizar el acto o hacer algo para no realiza este.
							<ul>
								<li>
									<i class="fas fa-asterisk"></i><span>Ejemplo:</span> Difamar el nombre y avanza 1 casilla o
									retrocede 7 casillas.
								</li>
							</ul>
							<hr />
						</li>

						<li>
							<i class="fas fa-star"></i>Si el jugador desea realizar el acto avanzará 1 casilla donde caerá
							en la siguiente llamada <span>“C (Consecuencia)”</span> siguiente a esto deberá coger la carta
							llamada <span>“C”</span> donde se le dirá cual será la consecuencia de acto cometido.
							<ul>
								<li>
									<i class="fas fa-asterisk"></i><span>Ejemplo:</span> Por difamar a una persona deveras pagar
									un año en la cárcel.
								</li>
							</ul>
							<hr />
						</li>

						<li>
							<i class="fas fa-star"></i>Si el jugador decide no realizar el acto, este deberá hacer lo que
							diga la carta <span>“DECISÓN”</span> que en este caso será <span>“RETROCEDE 7 CASILLAS”</span>
						</li>

						<li>
							<i class="fas fa-star"></i>Cuando el jugador llegue a la casilla <span>NG2</span> que se
							caracteriza por su color rojo y su doble flecha
							<span>(<i class="fas fa-arrows-alt-h"></i>)</span> este podrá elegir que cambio quiere tomar, ya
							sea hacia arriba o hacia abajo.
						</li>

						<li>
							<i class="fas fa-star"></i>El jugador que caiga en la casilla <span>N69</span> o
							<span>N76</span> deberá cruzar obligatoriamente en puente y deberá ejecutar el acto del otro
							extremo.
							<ul>
								<li>
									<i class="fas fa-asterisk"></i><span>Ejemplo:</span>El jugador N1 cae en la casilla
									<span>N69</span>, esta obligado a cruzar el puente y procederá a tomar la carta
									<span>“ACTO”</span> de la casilla <span>N76.</span>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!--=====================================================
        |-Footer|
        =======================================================-->
		<footer class="footer">
			<div class="main-content">
				<div class="left box">
					<h2>Nosotros</h2>
					<div class="content">
						<p>
							GAMES JAY fue fundada en enero del 2020 por los estudiantes de la institución educativa San
							Pablo Paula Andrea Álvarez Sánchez, Juan Felipe Pérez Peña y Juan Fernando Vargas con el
							propósito de crear y distribuir juegos pedagógicos con temáticas de problemáticas sociales.
						</p>
						<div class="socialFooter">
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-youtube"></i></a>
						</div>
					</div>
				</div>

				<div class="center box">
					<h2>Informacion de contacto</h2>
					<div class="content">
						<div class="place">
							<span class="fas fa-map-marker-alt"></span>
							<span class="text">97 ##36-38, Medellín, Antioquia</span>
						</div>

						<div class="phone">
							<span class="fas fa-phone-alt"></span>
							<span class="text">5213098</span>
						</div>

						<div class="place">
							<span class="fas fa-envelope"></span>
							<span class="text">gamesjay@gmail.com</span>
						</div>
					</div>
				</div>

				<div class="right box">
					<h2>Contacto</h2>
					<div class="content">
						<form action="#">
							<div class="email">
								<div class="text"><span>Correo</span></div>
								<input type="email" />
							</div>

							<div class="msg">
								<div class="text"><span>Mensaje</span></div>
								<textarea></textarea>
							</div>

							<div class="btn">
								<button type="submit">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="bottom">
				<center>
					<span class="credit"
						>Creada por <a href="#">Game<span>Jay</span></a> |
					</span>
					<span class="far fa-copyright"></span><span> 2020 Todos los derechos reservados.</span>
				</center>
			</div>
		</footer>
		<!--=====================================================
        |-Archivos De JavaScript                                |
        =======================================================-->
		<script src="js/producto.js"></script>
	</body>
</html>
