<!--==============-->
<!-- Admin Navbar -->
<!--==============-->
<div class="navigation-menu navbar-container_scroll" id="navigationMenu">
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
			<a href="<?php echo $url; ?>" class="website-section">Inicio</a>
		</li>
		<li>
			<a href="<?php echo $url; ?>create-questions" class="website-section">Crear Pregunta</a>
		</li>
		<li>
			<a href="<?php echo $url; ?>list-questions" class="website-section" id="listQuestiosAdmin">Lista De Preguntas</a>
		</li>
		<li>
			<?php 
				echo "<a href='$url/models/logout.php' class='website-section'>cerrar sesion</a>"
			?>
		</li>
	</ul>
</div>
