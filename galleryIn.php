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
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="slicks/slick.min.js"></script>

<?php include('include/container.php'); ?>
<div class="container">
	<div class="row">
		<?php include("top_menu.php"); ?>

		<div class="navbar-collapse gallery">
			<h2>Sistemas de Imagenes</h2>
			<br>
			<div><a href="upload.php" class="btn btn-primary"><strong>Subir Imágenes</strong></a></div>
			<ul>
				<?php
				$galleryList = $gallery->getGalleryList();
				while ($image = $galleryList->fetch_assoc()) {
					?>
					<li id="gallery_image_<?php echo $image["id"]; ?>">
						<br>


						<a href="uploads/<?php echo $image["image_name"]; ?>"
							data-title="<?php echo $image["image_title"]; ?>"><img
								src="uploads/<?php echo $image["image_name"]; ?>" class="images" width="200"
								height="200"></a>
						<br><br>
						<span class="pull-right">
							<a href="" id="<?php echo $image["id"]; ?>" class="delete"><span
									class="glyphicon glyphicon-trash"></span></a>
						</span>

						<span>
							<?php echo $image["image_description"]; ?>
						</span>
					</li>
				<?php } ?>
			</ul>
			
			<br> <br>

			<?php include('include/footer.php'); ?>