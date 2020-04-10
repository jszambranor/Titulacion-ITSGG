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

    <title>Fundación Ecuador People - Registrar datos de nuevo estudiante</title>

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
              <!--=Inicio de Registros ==-->
              <div class="col-lg-8 d-none d-xl-block">
              <nav class="mainmenu alignright">
                  <ul>
                      <li><a href="historial_pasante.php?func=mostrar">Volver Atrás</a></li>
                      <li><a href="document.php?func=close">Salir del Sistema</a></li>
                  </ul>
                  </nav>
              </div>
                  <!--== Fin de Registros==-->
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
        <center><img src="imagen/mega-menu.jpg" style="width: 30%; border-radius: 5px;">
        <h4 style="color: #368F93;">Editar Datos de Pasante
        </h4></center><br>
      <form style="color:#368F93;" enctype="multipart/form-data" action="" method="POST">
          <div class="form-row">
               <div class="col-lg-2 col-md-3">
                  <input  id="pst_cedula" type="text" name="pst_cedula" maxlength="10" value="<?php echo $row['pst_cedula']; ?>" required>
                  <label for="pst_cedula">Cedula/Pasaporte:</label>
                </div>

                <div class="col-lg-4 col-md-3">
                  <input id="pst_nombres" type="text" name="pst_nombres" value="<?php echo $row['pst_nombres']; ?>" required>
                  <label for="pst_nombres">Nombres: </label>
                </div>

                <div class="col-lg-4 col-md-3">
                      <input id="pst_apellidos" name="pst_apellidos" value="<?php echo $row['pst_apellidos']; ?>" type="text" required>
                      <label for="pst_apellidos">Apellidos: </label>
                </div>

                <div class="col-lg-2 col-md-3">
                    <input id="pst_convencional" name="pst_convencional" value="<?php echo $row['pst_convencional']; ?>" maxlength="9" type="text" required>
                    <label for="pst_convencional">Convencional: </label>
               </div>      
          </div>

          <div class="form-row">
            <div class="col-lg-2 col-md-3">
                    <input id="pst_celular" name="pst_celular" value="<?php echo $row['pst_celular']; ?>" maxlength="10" type="text" required>
                    <label for="pst_celular">Celular: </label>
            </div>

            <div class="col-lg-4 col-md-3">
                  <input id="pst_correo" name="pst_correo" value="<?php echo $row['pst_correo']; ?>" type="text" required>
                  <label for="pst_correo">Correo Electronico: </label>
            </div>
            
            <div class="col-lg-4 col-md-3">
                  <input id="pst_direccion" name="pst_direccion" value="<?php echo $row['pst_direccion']; ?>" type="text" required>
                  <label for="pst_direccion">Dirección: </label>
            </div>

            <div class="col-lg-2 col-md-3">
                <input id="pst_fecha_nacimiento" name="pst_fecha_nacimiento" value="<?php echo $row['pst_fecha_nacimiento']; ?>" type="text" required>
                <label for="pst_fecha_nacimiento">Fecha de Nacimiento: </label>
            </div>
          </div>

        <div class="form-row">
            <div class="col-lg-2 col-md-3">
                <input id="pst_edad" name="pst_edad" value="<?php echo $row['pst_edad']; ?>" type="text" required>
                <label for="pst_edad">Edad: </label>
            </div>

             <div class="col-lg-3 col-md-3">
                <input id="pst_enfermedad" name="pst_enfermedad" value="<?php echo $row['pst_enfermedad']; ?>" type="text" required>
                <label for="pst_enfermedad">Enfermedad: </label>
            </div>

            <div class="col-lg-4 col-md-3">
                <input id="pst_alergias" name="pst_alergias" value="<?php echo $row['pst_alergias']; ?>" type="text" required>
                <label for="pst_alergias">Alergia: </label>
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="pst_tipo_sangre" name="pst_tipo_sangre" value="<?php echo $row['pst_tipo_sangre']; ?>" type="text" required>
                <label for="pst_tipo_sangre">Tipo de Sangre: </label>
            </div>
        </div>

        <div class="form-row">
            <div class="col-lg-2 col-md-3">
                <input id="pst_genero" name="pst_genero" value="<?php echo $row['pst_genero']; ?>" type="text" required>
                <label for="pst_genero">Genero: </label>
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="pst_curso" name="pst_curso" value="<?php echo $row['pst_curso']; ?>" type="text" required>
                <label for="pst_curso">Curso: </label>
            </div>

            <div class="col-lg-4 col-md-3">
                <input id="pst_jornada" name="pst_jornada" value="<?php echo $row['pst_jornada']; ?>" type="text" required>
                <label for="pst_jornada">Jornada: </label>
            </div>

            <div class="col-lg-3 col-md-3">
                  <input id="pst_trabaja" name="pst_trabaja" type="text" value="<?php echo $row['pst_trabaja']; ?>" required>
                <label for="pst_trabaja">Trabaja: </label>
            </div>
        </div>

        <div class="form-row">
            <div class="col-lg-3 col-md-3">
                <input id="pst_provincia" name="pst_provincia" value="<?php echo $row['pst_provincia']; ?>" type="text" required>
                <label for="pst_provincia">Provincia de Nacimiento: </label>
            </div>
         
           <div class="col-lg-4 col-md-3">
                <input id="pst_ciudad" name="pst_ciudad" type="text" value="<?php echo $row['pst_ciudad']; ?>" required>
                <label for="pst_ciudad">Ciudad de recidencia: </label>
            </div>

            <div class="col-lg-2 col-md-3">
                  <input id="pst_dependiente" name="pst_dependiente" type="text" value="<?php echo $row['pst_dependiente']; ?>" required>
                <label for="pst_dependiente">Dependiente de ud: </label>
            </div>

            <div class="col-lg-3 col-md-3">
                  <input id="pst_vive" name="pst_vive" type="text" value="<?php echo $row['pst_vive']; ?>" required>
                <label for="pst_vive">Vive con: </label>
            </div>
        </div>

        <div class="form-row">
            <div class="col-lg-2 col-md-3">
                  <input id="pst_civil" name="pst_civil" type="text" value="<?php echo $row['pst_civil']; ?>" required>
                <label for="pst_civil">Estado Civil: </label>
            </div>
         
            <div class="col-lg-2 col-md-2">
                <input id="pst_hijos" name="pst_hijos" value="<?php echo $row['pst_hijos']; ?>" type="text" required>
                <label for="pst_hijos">Hijos: </label>
            </div>

            <div class="col-lg-4 col-md-3">
                <input id="pst_universidad" name="pst_universidad" value="<?php echo $row['pst_universidad']; ?>" type="text" required>
                <label for="pst_universidad">Universidad: </label>
            </div>

            <div class="col-lg-4 col-md-3">
                <input id="pst_nombre_ref" name="pst_nombre_ref" value="<?php echo $row['pst_nombre_ref']; ?>" type="text" required>
                <label for="pst_nombre_ref">Nombre de referencia: </label>
            </div>
          </div>

          <div class="form-row">
            <div class="col-lg-4 col-md-3">
                <input id="pst_apellidos_ref" name="pst_apellidos_ref" value="<?php echo $row['pst_apellidos_ref']; ?>" type="text" required>
                <label for="pst_apellidos_ref">Apellidos de referencia: </label>
            </div>
        
            <div class="col-lg-4 col-md-3">
                  <input id="pst_direccion_ref" name="pst_direccion_ref" value="<?php echo $row['pst_direccion_ref']; ?>" maxlength="10" type="text" required="">
                  <label for="pst_direccion_ref">Dirección de referencia: </label>
             </div>

             <div class="col-lg-2 col-md-3">
                  <input id="est_tlf_ref" name="est_tlf_ref" value="<?php echo $row['est_tlf_ref']; ?>" maxlength="10" type="text" required="">
                  <label for="est_tlf_ref">Telefono/referencia: </label>
             </div>

               <div class="col-lg-2 col-md-3">
                    <input id="est_fecha" name="est_fecha" value="<?php echo $row['est_fecha']; ?>" type="text" readonly="">
                    <label for="est_fecha">Fecha de registros: </label>
               </div>
        </div>

            <div class="col-auto my-1">
            <button type="submit" id="submit" class="btn btn-info" name="enviar">Editar Datos</button>
            </div>
          </div>
      </form>
      </div>

    </section>
    <!--== Login Page Content End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
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
        <img src="../assets/img/flecha superior.gif" alt="fundacionecuadorpeople">
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
