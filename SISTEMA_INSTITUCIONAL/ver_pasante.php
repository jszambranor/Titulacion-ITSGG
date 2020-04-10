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

    <title>Fundación Ecuador People - Curriculums</title>

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
    <!--=== main CSS ===-->
    <link href="../assets/css/main.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="../assets/css/responsive.css" rel="stylesheet">

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
                                <li><a href="historial_pasante.php?func=mostrar">Volver Atrás</a></li>
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
        <center><img src="imagen/mega-menu.jpg" style="width: 30%; height: 30%;"></center><br>
        <h2 style="text-align: center; color: #368F93; font-size: 1.5rem;">Ficha de Identificación del Pasante</h2><br>
        <table class="table table-bordered" style="color: #000;">
        <tr>
        <td width=80%>    
        <table>
        <tr>
        <th style="color:#368F93;">Cedula:</th>
        <td scope="row" ><?php echo $row['pst_cedula']; ?></td>

        <th style="color:#368F93;">Nombres:</th>
        <td scope="row" ><?php echo $row['pst_nombres']; ?></td>

        <th style="color:#368F93;">Apellidos:</th>
        <td scope="row" ><?php echo $row['pst_apellidos']; ?></td>
                
        <th style="color:#368F93;">Convencional:</th>
        <td scope="row" ><?php echo $row['pst_convencional']; ?></td>
        </tr>

        <tr>
        <th style="color:#368F93;">Celular:</th>
        <td scope="row" ><?php echo $row['pst_celular']; ?></td>

        <th style="color:#368F93;">Correo:</th>
        <td scope="row" ><?php echo $row['pst_correo']; ?></td>

        <th style="color:#368F93;">Dirección:</th>
        <td scope="row" ><?php echo $row['pst_direccion']; ?></td>

        <th style="color:#368F93;">Fecha/Nacimiento:</th>
        <td scope="row" ><?php echo $row['pst_fecha_nacimiento']; ?></td>
        </tr>

        <tr>
        <th style="color:#368F93;">Edad:</th>
        <td scope="row" ><?php echo $row['pst_edad']; ?></td>
        
        <th style="color:#368F93;">Enfermedad:</th>
        <td scope="row" ><?php echo $row['pst_enfermedad']; ?></td>       
        
        <th style="color:#368F93;">Alergias:</th>
        <td scope="row" ><?php echo $row['pst_alergias']; ?></td>
                
        <th style="color:#368F93;">Tipo/sangre:</th>
        <td scope="row" ><?php echo $row['pst_tipo_sangre']; ?></td>
        </tr>
                
        <tr>
        <th style="color:#368F93;">Genero:</th>
        <td scope="row" ><?php echo $row['pst_genero']; ?></td>
                
        <th style="color:#368F93;">Curso/Capacitación:</th>
        <td scope="row" ><?php echo $row['pst_curso']; ?></td>

        <th style="color:#368F93;">Jornada:</th>
        <td scope="row" ><?php echo $row['pst_jornada']; ?></td>

        <th style="color:#368F93;">Trabaja:</th>
        <td scope="row" ><?php echo $row['pst_trabaja']; ?></td>
        </tr>

        <tr>
        <th style="color:#368F93;">Provincia:</th>
        <td scope="row" ><?php echo $row['pst_provincia']; ?></td>
        
        <th style="color:#368F93;">Ciudad:</th>
        <td scope="row" ><?php echo $row['pst_ciudad']; ?></td>
                
        <th style="color:#368F93;">Dependiente:</th>
        <td scope="row" ><?php echo $row['pst_dependiente']; ?></td>

        <th style="color:#368F93;">Vive/con:</th>
        <td scope="row" ><?php echo $row['pst_vive']; ?></td>
        </tr>

        <tr>
        <th style="color:#368F93;">Estado/Civil:</th>
        <td scope="row" ><?php echo $row['pst_civil']; ?></td>
                
        <th style="color:#368F93;">Hijos:</th>
        <td scope="row" ><?php echo $row['pst_hijos']; ?></td>

        <th style="color:#368F93;">Universidad:</th>
        <td scope="row" ><?php echo $row['pst_universidad']; ?></td>

        <th style="color:#368F93;">Nombre/Referencia:</th>
        <td scope="row" ><?php echo $row['pst_nombre_ref']; ?></td>
        </tr>

        <tr>       
        <th style="color:#368F93;">Apellido/Referencia:</th>
        <td scope="row" ><?php echo $row['pst_apellidos_ref']; ?></td>
             
        <th style="color:#368F93;">Telefono/Referencia:</th>
        <td scope="row" ><?php echo $row['pst_tlf_ref']; ?></td>
                
        <th style="color:#368F93;">Dirección/Referencia:</th>
        <td scope="row" ><?php echo $row['pst_direccion_ref']; ?></td>
        <th style="color:#368F93;">Fecha/Registro:</th>
        <td scope="row" ><?php echo $row['pst_fecha']; ?></td>
        </tr>

        </table>
        </td>
        </tr>
    </table>
</div>
    </section>
    <!--== Login Page Content End ==-->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> Fundación Ecuador People - Tesis de Titulación 
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->
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
			$('#imagenpostulante').append('<img src="../appws/files/foto/cufo_'+id+'.'+extension+'">');
			$('#exampleModal').modal('show');
		}
	</script>
</body>

</html>
