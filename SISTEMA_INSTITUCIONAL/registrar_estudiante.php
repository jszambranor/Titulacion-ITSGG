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
    <script src="inputs-validation.js"></script>

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
                <div class="col-lg-12 m-auto">
        <div class="contact-form">
        <center><img src="imagen/mega-menu.jpg" style="width: 30%; border-radius: 5px;">
                <h4 style="color: #0985E1;">Registrar Datos de nuevo Estudiante
                </h4></center><br>
                <form style="color:#000;" enctype="multipart/form-data" action="" method="POST">
            <div class="col-xs-14">
            <div class="form-row">
               <div class="col-lg-3 col-md-3">
                  <input onkeypress="return soloNumeros(event);"  id="est_cedula" type="text" name="est_cedula" maxlength="10" placeholder="Escriba su cedula.."required>
                  <label style="color: #0985E1;">Cedula/Pasaporte:</label>
                </div>

              <div class="col-lg-3 col-md-3">
                    <input onkeypress="return soloLetras(event);" id="est_nombres" type="text" name="est_nombres" placeholder="Escriba sus nombres.." required>
                    <label style="color: #0985E1;">Nombres: </label>
              </div>

                <div class="col-lg-3 col-md-3">
                      <input onkeypress="return soloLetras(event);" id="est_apellidos" name="est_apellidos" type="text" placeholder="Escriba sus apellidos.." required>
                      <label style="color: #0985E1;">Apellidos: </label>
                </div>

                <div class="col-lg-3 col-md-3">
                    <input onkeypress="return soloNumeros(event);" id="est_convencional" name="est_convencional" maxlength="9" type="text" placeholder="Escriba su convencional.." required>
                    <label style="color: #0985E1;">Convencional: </label>
               </div>      
        </div>

        <div class="form-row">
            <div class="col-lg-3 col-md-3">
                    <input onkeypress="return soloNumeros(event);" id="est_celular" name="est_celular" maxlength="10" matype="text" placeholder="Escriba su Whatsapp.." required>
                    <label style="color: #0985E1;">Whatsapp: </label>
             </div>
            <div class="col-lg-3 col-md-3">
                  <input onkeypress="return soloMail(event);" id="est_correo" name="est_correo" type="email" placeholder="Escriba su correo.." required>
                  <label style="color: #0985E1;">Correo Electronico: </label>
            </div>
            
            <div class="col-lg-3 col-md-3">
                  <input onkeypress="return soloMail(event);" id="est_direccion" name="est_direccion" type="text" placeholder="Escriba su dirección..." required>
                  <label style="color: #0985E1;">Dirección: </label>
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="est_fecha_nacimiento" name="est_fecha_nacimiento" type="date" required>
                <label style="color: #0985E1;">Fecha de Nacimiento: </label>
            </div>
        </div>

        <div class="form-row">
            
            <div class="col-lg-1 col-md-3">
                <input onkeypress="return soloNumeros(event);" id="est_edad" name="est_edad" type="text" maxlength="2" placeholder="Edad..">
                <label style="color: #0985E1;">Edad: </label>
            </div>
             <div class="col-lg-4 col-md-3">
              <input onkeypress="return soloLetras(event);" id="est_enfermedad" name="est_enfermedad" placeholder="Escribir tipo de enfermedad.." type="text" required>
              <label style="color: #0985E1;">Alguna Enfermedad: (Describir)</label>
              </div>

              <div class="col-lg-4 col-md-3">
              <input onkeypress="return soloLetras(event);" placeholder="Tipo de alergia.." id="est_alergias" name="est_alergias" type="text" required>
                <label style="color: #0985E1;">Tipos de  Alergias: (Describir)</label>
              </div>
              <div class="col-lg-3 col-md-3">
                  <select name="est_tipo_sangre" id="est_tipo_sangre" class="form-control">
                    <option value="">Elija una opción</option>
                    <option  value="A+">A+</option>
                    <option  value="A-">A-</option>
                    <option  value="O+">O+</option>
                    <option  value="O-">O-</option>
                    <option  value="AB+">AB+</option>
                    <option  value="AB-">AB-</option>
                    <option  value="B+">B+</option>
                    <option  value="B-">B-</option>
                  </select> 
                  <label>Tipo de sangre: </label>
                </div>  
        </div>

        <div class="form-row">

              <div class="col-lg-3 col-md-3">
                  <select name="est_genero" id="est_genero" class="form-control">
                    <option value="">Elija una opción</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select> 
                  <label style="color: #0985E1;">Genero: </label>
                </div> 

              <div class="col-lg-3 col-md-3">
                <select name="est_curso" id="est_curso" class="form-control">
                  <option value="">Elija una opción</option>
                  <option  value="Informatíca">Informatíca</option>
                  <option  value="Lectura Rapida">Lectura Rapida</option>
                  <option  value="Enfermería">Enfermería</option>
                  <option  value="Primeros Auxilios">Primeros Auxilios</option>
                  <option  value="Vacacional">Vacacional</option>
                  <option  value="Nivelación">Nivelación</option>
                </select> 
                <label style="color: #0985E1;">Curso a Recibir: </label>
              </div>

              <div class="col-lg-3 col-md-3">
                <select name="est_jornada" id="est_jornada" class="form-control">
                  <option value="">Elija una opción</option>
                  <option value="Matutina">Matutina</option>
                  <option value="Vespertina">Vespertina</option>
                  </select>
                  <label style="color: #0985E1;">Jornada: </label>  
              </div>

              <div class="form-group col-md-3">
                <select name="est_trabaja" id="est_trabaja" class="form-control">
                  <option value="">Elija una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  </select>
                  <label style="color: #0985E1;">Trabaja: (Opcional)</label>  
              </div>
         </div>
         <div class="form-row">  
          <div class="col-lg-3 col-md-3">
                  <select name="est_provincia" id="est_provincia" class="form-control">
                    <option value="">Elija una opción</option>
                    <option  value="Guayas">Guayas</option>
                    <option  value="Manabi">Manabi</option>
                    <option  value="El Oro">El Oro</option>
                    <option  value="Los Rios">Los Rios</option>
                    <option  value="Azuay">Azuay</option>
                    <option  value="Pichincha">Pichincha</option>
                    <option  value="Loja">Esmeraldas</option>
                    <option  value="Santa Elena">Loja</option>
                    <option  value="Santa Elena">Santa Elena</option>
                    <option  value="Bolivar">Bolivar</option>
                    <option  value="Cotopaxi">Cotopaxi</option>
                    <option  value="Chimborazo">Chimborazo</option>
                    <option  value="Cañar">Cañar</option>
                    <option  value="Imbabura">Imbabura</option>
                    <option  value="Santo Domingo de los Tsáchilas">Santo Domingo de los Tsáchilas</option>
                  </select> 
                <label style="color: #0985E1;">Provincia de nacimiento: </label>    
            </div>
             
                <div class="col-lg-3 col-md-3">
                      <input placeholder="Lugar de recidencia.." id="est_ciudad" name="est_ciudad" type="text" required>
                    <label style="color: #0985E1;">Ciudad/Canton de recidencia: </label>
                </div>
            
                <div class="form-group col-md-3">
              <select name="est_vive" id="est_vive" class="form-control">
                <option value="">Elija una opción</option>
                <option value="Solo">Solo</option>
                <option value="Familia">Familia</option>
                <option value="Hermanos">Hermanos</option>
                <option value="Padres">Padres</option>
                <option value="Tios">Tios</option>
                <option value="Hijos">Hijos</option>
                <option value="Conyugue">Conyugue</option>
                </select>
                <label style="color: #0985E1;">Vive con:</label>  
            </div>

            <div class="form-group col-md-3">
              <select name="est_hermanos" id="est_hermanos" class="form-control">
                <option value="">Elija una opción</option>
                <option  value="Ninguno">Ninguno</option>
                <option  value="Uno">Uno</option>
                <option  value="Dos">Dos</option>
                <option  value="Tres">Tres</option>
                <option  value="Cuatro">Cuatro</option>
                <option  value="Cinco">Cinco</option>
                <option  value="Seis">Seis</option>
                <option  value="Siete">Siete</option>
                </select>
                <label style="color: #0985E1;">Hermanos que tiene: </label>  
            </div>    
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
              <select name="est_civil" id="est_civil" class="form-control">
                <option value="">Elija una opción</option>
                <option  value="Soltero">Soltero</option>
                <option  value="Union de Hecho">Union de Hecho</option>
                <option  value="Casado">Casado</option>
                <option  value="Divorciado">Divorciado</option>
                <option  value="Viudo">Viudo</option>
                </select>
                <label style="color: #0985E1;">Estado Civil: </label>  
            </div>

            <div class="form-group col-md-3">
              <select name="est_hijos" id="est_hijos" class="form-control">
                <option value="">Elija una opción</option>
                <option  value="Ninguno">Ninguno</option>
                <option  value="Uno">Uno</option>
                <option  value="Dos">Dos</option>
                <option  value="Tres">Tres</option>
                <option  value="Cuatro">Cuatro</option>
                <option  value="Cinco">Cinco</option>
                <option  value="Seis">Seis</option>
                <option  value="Siete">Siete</option>
                <option  value="Ocho">Ocho</option>
              </select>
                <label style="color: #0985E1;">Hijos: </label>  
            </div>
        </div>
            <h4 style="font-size: 14px; color: red;">Familiar o representante legal (en caso de ser menor de edad)</h4>
            <hr>

            <div class="form-row">
                <div class="col-lg-4 col-md-3">
                    <input onkeypress="return soloLetras(event);" placeholder="Escriba nombres.." id="est_nombre_ref" name="est_nombre_ref" type="text" required>
                    <label style="color: #0985E1;">Nombres: </label>
                </div>

                <div class="col-lg-4 col-md-3">
                    <input onkeypress="return soloLetras(event);" placeholder="Escriba apellidos.." id="est_apellidos_ref" name="est_apellidos_ref" type="text" required>
                    <label style="color: #0985E1;">Apellidos: </label>
                </div>
                <div class="col-lg-2 col-md-3">
                    <input onkeypress="return soloNumeros(event);" placeholder="Escriba cedula.." id="est_cedula_ref" name="est_cedula_ref" maxlength="10" type="text">
                    <label style="color: #0985E1;">Cedula: </label>
               </div>

               <div class="col-lg-2 col-md-3">
                    <input onkeypress="return soloNumeros(event);" placeholder="Escriba telefono.." id="est_tlf_ref" name="est_tlf_ref" maxlength="10" type="text" required="">
                    <label style="color: #0985E1;">Telefono: </label>
               </div>

               <div class="col-lg-4 col-md-3">
                    <input onkeypress="return soloMail(event);" placeholder=">Escriba correo.." id="est_correo_ref" name="est_correo_ref" type="text" required>
                    <label style="color: #0985E1;">Correo: </label>
                </div>

               <div class="col-lg-4 col-md-3">
                    <input onkeypress="return soloMail(event);" placeholder="Escriba dirección.." id="est_direccion_ref" name="est_direccion_ref" type="text" required>
                    <label style="color: #0985E1;">Dirección: </label>
               </div>
            </div>

            <div class="form-row">
              <div class="list-group">
                  <input type="file" name="est_foto" class="btn btn-primary" id="est_foto" required=""><br>
                  <label style="color: #0985E1;">* Suba la imagen de Cedula: </label>
                  <p style="font-size: 11px; color: red;">* Si es menor de edad subir tambien la  foto de su representante legal (juntas)</p>
              </div>
            </div><br>
            <div class="col-auto my-1">
            <button type="submit" id="submit" class="btn btn-primary btn-xm" name="enviar">Enviar Datos</button>
            <button type="reset" class="btn btn-primary btn-xm">Borrar Datos</button>
            </div>
          </div>
      </form>
                    </div>
                    <div style="font-size: 25px;font-weight: bold;margin-top: 25px;" align="center">                      
                      <?php
                          include_once ("../appws/controlador_registro_estudiante.php");
            						  include_once ("../appws/controladorLogin.php"); 
                          $controlador = new controlador_registro_estudiante();
            						  $controladorlog = new controladorLogin();
            						  
            						  if(isset($_GET['func'])){
            							$controladorlog->logout();
            							echo "<script> window.location.href = '../index.html'; </script>";
            						  }
						  
                          if(isset($_POST['enviar'])){
                              $r = $controlador->crear($_POST, $_FILES['est_foto']);
                              if ($r){
                              	echo $r;
                              }
                              else{
                              	echo "No se pudo enviar Información de estudiante.";
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
