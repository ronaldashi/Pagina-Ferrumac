<!DOCTYPE html>

<html class="wide wow-animation" lang="en">

<head>


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
  <!-- Site Title-->
  <title>Ferrumac | Herreria y Ferreteria</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/icon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700%7CRoboto:400,500,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: black;
      background-image: url("../site/images/fondo.jpg");

    }

    .ie-panel {
      display: none;
      background: #ffffff;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>

  <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche" class="whatsapp"
    target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
  <!-- Page Loader-->
  <div class="preloader" id="preloader">
    <div class="page-loader-logo">
      <div class="brand">
        <div class="brand__name"><img src="images/logo.png" alt="" width="190" height="50" />
        </div>
      </div>
    </div>
    <div class="page-loader-body">
      <div id="loadingProgressG">
        <div class="loadingProgressG" id="loadingProgressG_1"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page">

    <header class="page-header section">
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
          data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
          data-lg-layout="rd-navbar-fullwidth" data-xl-device-layout="rd-navbar-fullwidth"
          data-xl-layout="rd-navbar-fullwidth" data-xxl-device-layout="rd-navbar-fullwidth"
          data-xxl-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px"
          data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.php">
                    <div class="brand__name"><img src="images/logo.png" alt="" width="190" height="50" />
                    </div>
                  </a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-main-item"><a class="button button-xs button-lighter" href="login.php">Login</a>
                </div>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="index.php">Inicio</a>
                  </li>
                  <li><a href="about-us.php">Acerca de</a>
                    <!--</li>
                    <li><a href="typography.php">Typography</a>
                    </li>-->
                  <li><a href="contacts.php">Contactos</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Swiper-->
    <section class="section swiper-slider_style-3 swiper-buttons-alternate">
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
                        <img src="uploads/<?php echo $img["image_name"]; ?>" class="rounded" width="700" alt="Imagen 1">
                      </div>
                      <div class="carousel-caption d-none d-md-block">
                        <?php echo $img["id"]; ?>
                        <h5>
                          <?php echo $img["image_description"]; ?>
                        </h5>

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
    </section>
    <!-- Production-->
    <section class="section section-md bg-default text-center">
      <div class="container">
        <h2>Nuestros Productos</h2>
        <div class="row row-70 row-lg-110 row-offset-1">
          <div class="col-lg-6"><a class="collection" href="#">
              <div class="collection-img"><img src="images/prueba.jpeg" alt="" width="470" height="303" />
              </div>
              <h4 class="collection-title">Balkan Beige</h4>
            </a>
          </div>
          <div class="col-lg-6"><a class="collection" href="#">
              <div class="collection-img"><img src="images/product-02-470x303.jpg" alt="" width="470" height="303" />
              </div>
              <h4 class="collection-title">Novabell</h4>
            </a>
          </div>
          <div class="col-lg-6"><a class="collection" href="#">
              <div class="collection-img"><img src="images/product-03-470x303.jpg" alt="" width="470" height="303" />
              </div>
              <h4 class="collection-title">Calacata Limestone</h4>
            </a>
          </div>
          <div class="col-lg-6"><a class="collection" href="#">
              <div class="collection-img"><img src="images/product-04-470x303.jpg" alt="" width="470" height="303" />
              </div>
              <h4 class="collection-title">Grasmere</h4>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Experience since 1999-->
    <section class="section section-md bg-gray-4">
      <div class="container">
        <div class="row row-50 justify-content-md-center justify-content-lg-between align-items-lg-center">
          <div class="col-md-10 col-lg-6 col-xl-5 wow fadeInLeftSmall">
            <div class="block-wrap-1">
              <h2>About Our Company</h2>
              <p>We are a team that brings together top-notch refinement and exports it to more than 110
                countries the
                world. Our products form the basics of the best interiors worldwide.</p><a class="button button-darker"
                href="about-us.php">read more</a>
            </div>
          </div>
          <div class="col-md-10 col-lg-6 col-xl-7 d-flex wow fadeInRightSmall">
            <div class="thumb-video thumb-video_bordered"><img class="thumb-video__image"
                src="images/video-preview-962x465.jpg" alt="" width="962" height="465" />
              <div class="thumb-video__caption"><a class="thumb-video__button" href="//vimeo.com/123196494"
                  data-lightgallery="item"></a>
                <h4 class="thumb-video__title">Video Presentation</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Products-->
  
    <!-- Latest News-->
    
    <footer class="footer-classic bg-gray-8">
      <div class="container">
        <div class="footer-classic__main">
          <ul class="list-nav-bordered">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about-us.php">Acerca De</a>
            </li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="contacts.php">Contacts</a>
            </li>
          </ul>
        </div>
        <div class="divider"></div>
        <div class="footer-classic__aside">
          <div class="row row-20">
            <div class="col-md-6 text-md-left">
              <!-- Rights-->
            </div>
            <div class="col-md-6 text-md-right">
              <ul class="list-inline-xxs">
                <li>
                  <p>Follow Us</p>
                </li>
                <li><a class="icon icon-xs icon-style-modern fa fa-facebook" href="#"></a></li>
                <li><a class="icon icon-xs icon-style-modern fa fa-twitter" href="#"></a></li>
                <li><a class="icon icon-xs icon-style-modern fa fa-instagram" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>