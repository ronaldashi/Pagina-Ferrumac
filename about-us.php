<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Ferrumac | Herreria y Ferreteria</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Lato:300,400,700%7CRoboto:400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
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
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
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
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a class="brand" href="index.php">
                                        <div class="brand__name"><img src="images/logo.png" alt="" width="190"
                                                height="50" />
                                        </div>
                                    </a></div>
                            </div>
                            <!-- RD Navbar Nav-->
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-main-item"><a class="button button-xs button-lighter"
                                        href="login.php">Login</a>
                                </div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li><a href="index.php">Inicio</a>
                                    </li>
                                    <li class="active"><a href="about-us.php">Acerca de</a>
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
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-1.jpg);">
            <div class="container">
                <h2 class="breadcrumbs-custom__title">About Us</h2>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </section>
        <!-- Experience since 1999-->
        <section class="section section-md bg-default text-center">
            <div class="container">
                <div class="isotope-wrap isotope-modern-wrap">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>Products</h2>
                        <div class="section__header-element"><a class="link-cta" href="#">view all products</a></div>
                    </div>
                    <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="products">
                        <div class="row row-offset-2">
                            <div class="col-6 col-md-4 col-lg-3 isotope-item" data-filter="Category 1">
                                <!-- Product-->
                                <article class="product"> <a class="product__image-wrap" href="#"><img
                                            class="product__image" src="images/product-01-210x200.jpg" alt=""
                                            width="210" height="200" /></a>
                                    <div class="product__main">
                                        <p class="product__title"><a href="#">Textured White Tiles</a></p>
                                        <p class="product__price">from $350</p>
                                    </div>
                                    <div class="product__footer"><a class="button button-xs button-gray-2"
                                            href="#">details</a></div>
                                </article>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 isotope-item" data-filter="Category 2">
                                <!-- Product-->
                                <article class="product"> <a class="product__image-wrap" href="#"><img
                                            class="product__image" src="images/product-02-210x200.jpg" alt=""
                                            width="210" height="200" /></a>
                                    <div class="product__main">
                                        <p class="product__title"><a href="#">Basketweave Tiles</a></p>
                                        <p class="product__price">from $450</p>
                                    </div>
                                    <div class="product__footer"><a class="button button-xs button-gray-2"
                                            href="#">details</a></div>
                                </article>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 isotope-item" data-filter="Category 1">
                                <!-- Product-->
                                <article class="product"> <a class="product__image-wrap" href="#"><img
                                            class="product__image" src="images/product-03-210x200.jpg" alt=""
                                            width="210" height="200" /></a>
                                    <div class="product__main">
                                        <p class="product__title"><a href="#">Vellum Tiles</a></p>
                                        <p class="product__price">from $250</p>
                                    </div>
                                    <div class="product__footer"><a class="button button-xs button-gray-2"
                                            href="#">details</a></div>
                                </article>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 isotope-item" data-filter="Category 2">
                                <!-- Product-->
                                <article class="product"> <a class="product__image-wrap" href="#"><img
                                            class="product__image" src="images/product-04-210x200.jpg" alt=""
                                            width="210" height="200" /></a>
                                    <div class="product__main">
                                        <p class="product__title"><a href="#">Stone Wall Tiles</a></p>
                                        <p class="product__price">from $590</p>
                                    </div>
                                    <div class="product__footer"><a class="button button-xs button-gray-2"
                                            href="#">details</a></div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-classic bg-gray-8">
            <div class="container">
                <div class="footer-classic__main">
                    <ul class="list-nav-bordered">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a>
                        </li>
                        <li><a href="#">Production</a></li>
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
                            <p class="rights"><span>Quarex</span><span>&nbsp;&copy;&nbsp;</span><span
                                    class="copyright-year"></span>.
                                All Rights Reserved. Design by <a
                                    href="https://www.templatemonster.com">TemplateMonster</a></p>
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