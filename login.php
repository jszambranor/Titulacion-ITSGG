<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="icono.jpg" type="image/x-icon" />

    <title>Fundación Ecuador People - Login de Ingreso</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
     <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader/preloader.gif" alt="fundacionecuadorpeople">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Isla Trinitaria Coop Fuerza de los pobres Mz-340 S-9
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> (+593) 0991155453<br>0978702696
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> lunes a viernes<br>07.00 am - 20.00 pm
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="https://twitter.com/EcuadorPeople" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram" target="_blank"></i></a>
                            <a href="https://www.facebook.com/Fundacion-Ecuador-People-637843006730542/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook"></i></a>

                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div><br>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                    <img src="icono.jpg" style="width: 40%;">
                    </div>
                    <!--== Logo End ==-->
                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                        <ul>
                        <li><a href="#">Inicio</a>
                            <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="Nosotros.html">Nosotros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Servicios</a>
                            <ul>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="galeria.html">Galeria</a></li> 
                            </ul>
                        </li>
                        <li><a href="#">Contáctenos</a>
                            <ul>
                        <li><a href="instalacion.php">Instalaciones</a></li>
                        <li><a href="ubicanos.php">Ubícanos</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Solicitudes</a>
                            <ul>
                        <li><a href="pasantes.php">Pasantes</a></li>
                        <li><a href="matriculacion.php">Cursos</a></li>
                            </ul>
                        </li>
                        <li><a href="login.php">Sistema Institucional</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header><br><br><br>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Sistema Institucional</h2>
                        <span class="title-line"><i class="fa fa-institution fa-lg"></i></span>
                        <p>Bienvenido al sistema de ingreso administrativo de Fundación Ecuador People.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                        <center><img src="./assets/encabezado.jpg" style="width: 90%; height: 80%;"></center>
                			<h3 style="color:#222;">Bienvenido a nuestro sistema</h3>
							<form method="POST" action="" >
								<div class="username">
									<h5>Ingrese Correo: </h5><input type ="text" name="email" placeholder="&#128272; Correo Electronico..." required>
								</div>
								<div class="password">
									<h5>Ingrese Contraseña: </h5><input type ="password" name="pass" placeholder="&#128273; Contraseña..." required>
								</div>
								<div class="log-btn">
									<button type="submit" name="enviar"><i class="fa fa-sign-in"></i> Ingresar</button>
								</div>
							</form>
                		</div>
                    
                      <?php
                            include_once ("appws/controladorLogin.php");
                            $controlador = new controladorLogin();
                            if(isset($_POST['enviar'])){
                                $r = $controlador->loguear($_POST);
                                if ($r){
                                    if($r == '1'){
                                        echo "<script language='javascript'> window.location = './SISTEMA_INSTITUCIONAL/homeadmin.php?func=mostrar'; </script>";
                                    }
                                    if($r == '2'){ echo 'taxista'; }
                                }
                                else{
                                  echo "No existen coincidencias.";
                                }
                            }
                        ?>
                    </div>
                	</div>
                </div>
        	</div>
        </div>
    </section>

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> Fundación Ecuador People - Tesis de Titulación <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/flecha superior.gif" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>
