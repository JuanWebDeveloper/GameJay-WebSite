<!--=====================================================
|-Menu De Navegacion                                    |
=======================================================-->
<div class="containerMenu" id="containerMenu" style="background: #2c2c2c;">
	<div class="logoMenu">
		<img src="<?php echo $url; ?>complementos/img/logo.svg" width="250px" height="40px" />
	</div>

	<nav id="navbar">
		<ul>
			<li><a href="<?php echo $url; ?>">Inicio</a></li>
			<li><a href="<?php echo $url; ?>crear-pregunta">Crear Pregunta</a></li>
			<li><a href="<?php echo $url; ?>lista-preguntas">Lista De Preguntas</a></li>
			<li class="inicioResponsive">
				<?php 
					echo "<a href='$url/vistas/modulos/cerrar.php'>cerrar sesion</a>"
				?>
				
			</li>
		</ul>
	</nav>

	<div class="menuResponsive">
		<a id="bars"><i class="fas fa-bars"></i></a>
	</div>
</div>