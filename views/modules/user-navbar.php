<!--=============-->
<!-- User Navbar -->
<!--=============-->
<div class="navbar-container" id="navbarContainer">
	<div class="logo-container">
		<img src="<?php echo $url; ?>accessories/img/logo.svg" alt="Logo de GameJay" width="250px" height="40px" />
	</div>

	<nav id="navigation">
		<ul>
			<li><a href="<?php echo $url; ?>">Inicio</a></li>
			<li><a href="san-francisco-city">San Francisco City</a></li>
			<li><a href="criminal-questions">Preguntas Criminales</a></li>
			<li class="login-responsive">
				<?php 
					echo "<a href='$url/models/logout.php'>cerrar sesion</a>"
				?>
			</li>
		</ul>
	</nav>

	<div class="bars-button">
		<a id="bars"><i class="fas fa-bars"></i></a>
	</div>
</div>