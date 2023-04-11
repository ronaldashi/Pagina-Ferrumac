<?php
include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Gallery.php';


$database = new Database();
$db = $database->getConnection();


$user = new User($db);


$gallery = new Gallery($db);

include('include/header.php');
?>
<title>Sistema de Galería Dinámica</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="slicks/slick.min.js"></script>

<?php include('include/container.php'); ?>
<div class="container">
	<div class="row">
		<?php include("top_menu.php"); ?>

		<div class="navbar-collapse gallery">
			<h2>Carrusel</h2>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						$galleryList = $gallery->getGalleryList();
						if (count($galleryList->fetch_assoc()) > 0): ?>
							<!-- aqui insertaremos el slider -->
							<div id="carousel1" class="carousel slide" data-ride="carousel">
								<!-- Indicatodores -->
								<ol class="carousel-indicators">
									<?php $cnt = 0;
									foreach ($galleryList as $img): ?>
										<li data-target="#carousel1" data-slide-to="0" class="<?php if ($cnt == 0) {
											echo 'active';
										} ?>"></li>
										<?php $cnt++; endforeach; ?>
								</ol>

								<!-- Contenedor de las imagenes -->
								<div class="carousel-inner" role="listbox">
									<?php $cnt = 0;
									foreach ($galleryList as $img): ?>
										<div class="item <?php if ($cnt == 0) {
											echo 'active';
										} ?>">
										<div class="text-center">
											<img src="uploads/<?php echo $img["image_name"]; ?>" class="rounded" width="800" alt="Imagen 1">
										</div>
											<div class="carousel-caption d-none d-md-block">
												<?php echo $img["id"]; ?>
												<h5><?php echo $img["image_description"]; ?></h5>
												
											</div>
										</div>
										<?php $cnt++; endforeach; ?>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Anterior</span>
								</a>
								<a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Siguiente</span>
								</a>

							</div>
						<?php else: ?>
							<h4 class="alert alert-warning">No hay imagenes</h4>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php include('include/footer.php'); ?>