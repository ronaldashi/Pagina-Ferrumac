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
    <!-- Page-->
    <div class="page">
        <header class="page-header section">
            <!-- RD Navbar-->
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
                                        href="login.php">Login</a></div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li><a href="index.php">Inicio</a>
                                    </li>
                                    <li><a href="about-us.php">Acerca de</a>
                                        <!--</li>
                    <li><a href="typography.php">Typography</a>
                    </li>-->
                                    <li class="active"><a href="contacts.php">Contactos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image"
            style="background-image: url(images/contact.jpg); background-attachment: fixed;">
            <div class="container">
                <h2 class="breadcrumbs-custom__title">Contacto</h2>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contacto</li>
                </ul>
            </div>
        </section>
        <!-- Get in Touch-->
        <section class="section section-lg bg-default">
            <div class="container">
                <div class="layout-bordered">
                    <div class="layout-bordered__main text-center">
                        <div class="layout-bordered__main-inner">
                            <h3>Contactanos</h3>
                            <p>Estamos disponibles para cualquier inquietud</p>
                            <!-- RD Mailform-->
                            <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                                method="post" action="bat/rd-mailform.php">
                                <div class="row align-items-md-end row-20">
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-first-name" type="text"
                                                name="first-name" data-constraints="@Required">
                                            <label class="form-label" for="contact-first-name">Nombre Completo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-phone" type="text" name="phone"
                                                data-constraints="@Numeric @Required">
                                            <label class="form-label" for="contact-phone">Telefono</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-wrap">
                                            <label class="form-label" for="contact-message">Tu mensaje</label>
                                            <textarea class="form-input" id="contact-message" name="message"
                                                data-constraints="@Required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-email" type="email" name="email"
                                                data-constraints="@Email @Required">
                                            <label class="form-label" for="contact-email">Correo Electronico</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="button button-block button-primary" type="submit">Enviar
                                            Mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="layout-bordered__aside">
                        <div class="layout-bordered__aside-item">
                            <p class="heading-8">Redes Sociales</p>
                            <ul class="list-inline-xs">
                                <li><a class="icon icon-sm icon-default fa fa-facebook"
                                        href="https://www.facebook.com/profile.php?id=100083077797399"></a></li>
                                <li><a class="icon icon-sm icon-default fa fa-instagram"
                                        href="https://www.instagram.com/ferrumac_12/"></a></li>
                                <li><a class="icon icon-sm icon-default fa fa-youutube"
                                        href="https://www.youtube.com/channel/UCP-IlAPxkrb_nh5-4AAIysg"></a></li>
                            </ul>
                        </div>
                        <div class="layout-bordered__aside-item">
                            <p class="heading-8">Telefono</p>
                            <div class="unit flex-row unit-spacing-xxs">
                                <div class="unit__left"><span
                                        class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                                <div class="unit__body"><a href="tel:#">+57 323 218 1335</a></div>
                            </div>
                        </div>
                        <div class="layout-bordered__aside-item">
                            <p class="heading-8">E-mail</p>
                            <div class="unit flex-row unit-spacing-xxs">
                                <div class="unit__left"><span
                                        class="icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                                <div class="unit__body"><a href="mailto:#">ferrumac12@gmail.com</a></div>
                            </div>
                        </div>
                        <div class="layout-bordered__aside-item">
                            <p class="heading-8">Address</p>
                            <div class="unit flex-row unit-spacing-xxs">
                                <div class="unit__left"><span
                                        class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                                <div class="unit__body"><a href="#">Carrera 15 #23 - 24, Tunja, Boyacá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- RD Google Map-->
        <section class="section">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="510px" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Carrera 15 N 23 - 24, Tunja, Boyaca&t=&z=19&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://2yu.co">2yu</a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 100%;
                            width: 100%;
                        }
                    </style>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 100%;
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
        </section>

        <footer class="footer-classic bg-gray-8">
            <div class="container">
                <div class="footer-classic__main">
                    <ul class="list-nav-bordered">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="about-us.php">Acerca De</a></li>
                        <li><a href="contacts.php">Contacto</a></li>
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
                                    <p>Siguenos</p>
                                </li>
                                <li><a class="icon icon-xs icon-style-modern fa fa-facebook" href="https://www.facebook.com/profile.php?id=100083077797399"></a></li>
    
                                <li><a class="icon icon-xs icon-style-modern fa fa-instagram" href="https://www.instagram.com/ferrumac_12/"></a></li>
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