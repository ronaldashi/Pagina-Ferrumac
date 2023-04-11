<div class="collapse navbar-collapse pull-right" id="navbar">
	<ul class="nav navbar-nav navbar-left">
		<?php if (isset($_SESSION['userid'])) { ?>
			<li>
				<p class="navbar-text"><strong>Hola de nuevo !!</strong> has ingresado como <strong><a href="galleryIn.php"><?php echo $_SESSION['name']; ?></a></strong> | <a href="gallery.php">Galería</a> | <a href="logout.php">Cerrar Sesión</a></p>
			</li>
		<?php } else { ?>
			<br>
			<li><a href="index.php">Acceder</a></li>
		<?php } ?>
	</ul>
</div>