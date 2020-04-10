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
    <link rel="shortcut icon" href="./imagen/icono.jpg" type="image/x-icon" />

    <title>Fundación Ecuador People - Opiniones</title>

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


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active" style="background-image: url('imagen/fondo_negro3.jpg'); background-position: center center;      
      background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="../assets/img/preloader/preloader.gif" alt="">
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
                                <li><a href="instalaciones.php?func=mostrar"> instalaciones</a></li>
                                <li><a class="home" href="homeadmin.php">Volver Atrás</a></li>
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
        <div class="container"><br>
            <div class="row">
                <?php
                    include_once ("../appws/controladorinstalaciones.php");
					include_once ("../appws/controladorLogin.php");
                    $func = $_GET['func'];
                    $controlador = new controladorinstalaciones();
					$controladorlog = new controladorLogin();
					
					if($func == 'close'){
						$controladorlog->logout();
						echo "<script> window.location.href = 'instalaciones.php?func=mostrar'; </script>";
					}

                    if($func == 'delete'){
                        $controlador->delete($_GET['codice']);
                        echo "<script> window.location.href = 'instalaciones.php?func=mostrar'; </script>";
                    }

                    if($func == 'mostrar'){
                        $r = $controlador->index();
                ?>
                <center><img src="imagen/mega-menu.jpg" style="width: 30%; border-radius: 5px;"></center>

					<div align="center" class="col-lg-12 col-md-8 m-auto" style="font-size: 16px; color:#0A91E4; font-weight: bold; margin-top: ;">
                        OPINION DE NUESTRAS INSTALACIONES
                    </div>

                    <div class="col-lg-12 col-md-8 m-auto" style="margin-top: 20px !important;">
                        <table class="table table-hover">
                        <thead style="background:#ccc; color: #000;">  
                            <tr>
                                <th scope="col">Nombres</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Opiniones</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px; color: #000;">
                          <?php foreach ($r->fetchAll(PDO::FETCH_ASSOC) as $row){ ?>
                              <tr>
                                  <th scope="row"><?php echo $row['inst_nombre']; ?></th>
                                  <th scope="row"><?php echo $row['inst_correo']; ?></th>
                                  <th scope="row"><?php echo $row['inst_ciudad']; ?></th>
                                  <th scope="row"><?php echo $row['inst_opinion']; ?></th>
                                  <th scope="row"><?php echo $row['inst_fecha']; ?></th>
                                  <th scope="row"><a href="<?php echo 'instalaciones.php?func=delete&codice='.$row['cur_id']; ?>" style="margin-top:0px !important;" class="btn btn-info">Eliminar</a></th>
                              </tr>

                          <?php } ?>
                        </tbody>
                        </table>
                    </div>						
                <?php } ?>
        	</div>
        </div>
		</section>
    <!--== Login Page Content End ==-->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <div class="col-lg-12 text-center">
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> Fundación Ecuador People - Tesis de Titulación 
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="../assets/img/scroll-top.png" alt="JSOFT">
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
	<script>
		function verimagen(id,extension){
			$('#imagenpostulante').empty();
			$('#imagenpostulante').append('<img src="../appws/files/fotos/cufo_'+id+'.'+extension+'">');
			$('#exampleModal').modal('show');
		}
	</script>
</body>

</html>
