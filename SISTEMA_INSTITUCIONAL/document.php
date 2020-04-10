<?php
    session_start();
    if(isset($_SESSION['nombres'])){
        if($_SESSION['cod_rol'] != '1'){
            echo "<script language='javascript'> alert('No posee privilegios para esta area');window.location = '../index.html'; </script>";
        }
    }else{
        echo "<script language='javascript'> window.location = '../index.html'; </script>";
    }
    $color = 'white';
    if(isset($_COOKIE['color'])){
        $color = $_COOKIE['color'];
    }
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../icono.jpg" type="image/x-icon" />

    <title>Fundación Ecuador People - Registro de Aprobación/Reprobación</title>

    <!--=== Bootstrap CSS ===-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="../assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="../assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="../assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="../assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="../assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <script src="inputs-validation.js"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-image: url('imagen/fondo_negro3.jpg');">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="../assets/img/preloader/preloader.gif" alt="fundacionecuadorpeople">
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
                    <div class="col-lg-12 text-left">
                        <i class="fa fa-user"></i> <?php echo 'Bienvenido: '.$_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>
                    </div>

                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom" style="background-color:rgba(0,0,0,0.5);">
    <div class="container">
        <div class="row">
            <!--== Logo Start ==-->
            <div class="col-lg-4">
            <h1 style="color:#fff; font-size: 25px;">Fundación Ecuador People</h1>
            </div>
            <!--== Logo End ==-->
            <!--== Main Menu Start ==-->
            <div class="col-lg-8 d-none d-xl-block">
                <nav class="mainmenu alignright">
                    <ul>
                <li><a href="#">Registrar Datos</a>
                    <ul>
                        <li><a href="registrar_estudiante.php">Registrar Estudiante</a></li>
                        <li><a href="registrar_pasante.php">Registrar Pasantes</a></li>
                        <li><a href="document.php">Registrar Aprobación</a></li>
                    </ul>
                </li>
                <li><a href="#">Visualizar</a>
                    <ul>
                        <li><a href="historial_estudiante.php?func=mostrar">Historial Estudiantes</a></li>
                        <li><a href="historial_pasante.php?func=mostrar">Historial Pasantes</a></li>
                        <li><a href="documentver.php?func=mostrar">Mostrar Aprobación</a></li>
                    </ul>
                </li>
                <li><a href="homeadmin.php">Volver Atrás</a></li>
                <li><a href="document.php?func=close">Salir del Sistema</a></li>
            </ul>
                </nav>
            </div>
            <!--== Main Menu End ==-->
        </div>
        </div>
    </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" style="margin-top:150px;" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
        <div class="contact-form">
        <center><img src="imagen/mega-menu.jpg" style="width: 30%; border-radius: 5px;"></center>
                <center><h4 style="color: #000;">
                Estudiantes aprobados/reprobados en su respectivo curso
                </h4>
                </center><br>
                <form enctype="multipart/form-data" action="" method="POST">
                <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="name-input">
                        <h6>Nombres: </h6><input onkeypress="return soloLetras(event);" type="text" placeholder="Escriba Nombres.." name="doc_nombre" required="">
                    </div><br>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="name-input">
                        <h6>Apellidos: </h6><input onkeypress="return soloLetras(event);" type="text" placeholder="Escriba Apellidos.." name="doc_apellido" required="">
                    </div><br>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="name-input">
                        <h6>Cedula: </h6><input onkeypress="return soloNumeros(event);" type="text" placeholder="Escriba Cedula.." name="doc_cedula" required="">
                    </div><br>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="name-input">
                        <h6>Telefono: </h6><input onkeypress="return soloNumeros(event);" type="text" placeholder="Escriba Cedula.." name="doc_telefono" required="">
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-4 col-md-3">
                <label>Genero:</label>    
                <select name="doc_genero" id="doc_genero" class="form-control">
                  <option value="">Elija una opción</option>
                  <option  value="Masculino">Masculino</option>
                  <option  value="Femenino">Femenino</option>
                </select> 
                </div>

                <div class="col-lg-4 col-md-3">
                <label>Curso que recibió:</label>    
                <select name="doc_curso" id="doc_curso" class="form-control">
                  <option value="">Elija una opción</option>
                  <option  value="Informatíca">Informatíca</option>
                  <option  value="Lectura Rapida">Lectura Rapida</option>
                  <option  value="Enfermería">Enfermería</option>
                  <option  value="Primeros Auxilios">Primeros Auxilios</option>
                  <option  value="Vacacional">Vacacional</option>
                  <option  value="Nivelación">Nivelación</option>
                </select> 
                </div>

                <div class="col-lg-4 col-md-3">
                <label>Aprobó Curso:</label>    
                <select name="doc_aprobo" id="doc_aprobo" class="form-control">
                  <option value="">Elija una opción</option>
                  <option  value="Si">Si</option>
                  <option  value="No">No</option>
                </select> 
                </div>

                <div class="col-lg-4 col-md-3">
                <br><label>Reprobó Curso:</label>    
                <select name="doc_reprobo" id="doc_reprobo" class="form-control">
                  <option value="">Elija una opción</option>
                  <option  value="Si">Si</option>
                  <option  value="No">No</option>
                </select> 
                </div>

                <div class="col-lg-4 col-md-3">
                 <br><label>Motivo de Reprobación:</label>   
                <select name="doc_motivo" id="doc_motivo" class="form-control">
                  <option value="">Elija una opción</option>
                  <option  value="No contesta">No contesta</option>
                  <option  value="Se retiró del curso">Se retiró del curso</option>
                  <option  value="No le dio el Tiempo">No le dio el Tiempo</option>
                  <option  value="El lugar era muy lejos">El lugar era muy lejos</option>
                  <option  value="El lugar era muy peligroso">El lugar era muy peligroso</option>
                  <option  value="El lugar no era adecuado">El lugar no era adecuado</option>
                  <option  value="Decidió no seguir el curso">Decidió no seguir el curso</option>
                  <option  value="Las clases eran muy tecnicas">Las clases eran muy tecnicas</option>
                  <option  value="El estudiante tenia muchas faltas">El estudiante tenia muchas faltas</option>
                </select> 
                </div>
                </div>

                 <div class="input-submit">
                    <button type="submit" name="enviar">Enviar</button>
                    <button type="reset">Borrar</button>
                </div>
                </form>
                    </div>
                    <div style="font-size: 25px;font-weight: bold;margin-top: 25px;" align="center">                      
                      <?php
                          include_once ("../appws/controladorDocument.php");
                          include_once ("../appws/controladorLogin.php");
                          $controlador = new controladorDocument();
                          $controladorlog = new controladorLogin();
                          
                          if(isset($_GET['func'])){
                            $controladorlog->logout();
                            echo "<script> window.location.href = '../index.html'; </script>";
                          }
                          
                          if(isset($_POST['enviar'])){
                              $r = $controlador->crear($_POST);
                              if ($r){
                                echo "Aprobación Registrada.";
                              }
                              else{
                                echo "No se pudo registrar Aprobación.";
                              }
                          }
                      ?>
                      
                    </div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area" style="display: none;">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Recibe informacion</h2>
                            <div class="widget-body">
                                <<img src="encabezadotaxi.png" width="300" alt="JSOFT">
                                <p>Recibe información de nuestra institución y de sus diversas actividades para beneficios de sus clientes.</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Empresas quienes confían en nosotros</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="https://www.cnt.gob.ec/">
                                           Hola Cnt
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="https://www.netlife.ec/">
                                          Hola Netlife
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="https://www.hyundai.com.ec/">
                                           Hola Hyundai
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="https://www.eluniverso.com">
                                            Hola El Universo
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Nuestros Contactos</h2>
                            <div class="widget-body">

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Pedro Moncayo 2803 Maldonado Guayaquil-Ecuador</li>
                                    <li><i class="fa fa-mobile"></i> (04) 2985254</li>
                                    <li><i class="fa fa-envelope"></i>fundacionecuadorpeople@gmail.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/ztfy5GhHLVU2" class="map-show" target="_blank">Nuestra Ubicación</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> Fundación Ecuador People - C.C Design
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
        <img src="assets/img/flecha superior.gif" alt="fundacionecuadorpeople">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="../assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="../assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="../assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="../assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="../assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="../assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="../assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="../assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="../assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="../assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="../assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="../assets/js/main.js"></script>

</body>

</html>
