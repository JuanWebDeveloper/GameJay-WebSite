<!--==============-->
<!-- Admin Navbar -->
<!--==============-->
<div class="navbar-container" id="navbarContainer" style="background: #2c2c2c;">
	<div class="logo-container">
		<img src="<?php echo $url; ?>accessories/img/logo.svg" alt="Logo de GameJay" width="250px" height="40px" />
	</div>

	<nav id="navigation">
		<ul>
			<li><a href="<?php echo $url; ?>">Inicio</a></li>
			<li><a href="<?php echo $url; ?>create-questions">Crear Pregunta</a></li>
			<li><a href="<?php echo $url; ?>list-questions" id="listQuestiosAdmin">Lista De Preguntas</a></li>
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