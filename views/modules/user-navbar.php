<div class="navigation-menu" id="navigationMenu">
	<div class="logo-container">
		<img src="<?php echo $url; ?>accessories/img/logo.svg" alt="Logo de GameJay">
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
			<a href="<?php echo $url; ?>san-francisco-city" class="website-section">San Francisco City</a>
		</li>
		<li>
			<a href="<?php echo $url; ?>criminal-questions" class="website-section">Preguntas Criminales</a>
		</li>
		<li>
			<a href="<?php echo $url; ?>models/logout.php" class="website-section">Cerrar Sesión</a>
		</li>
	</ul>
</div>