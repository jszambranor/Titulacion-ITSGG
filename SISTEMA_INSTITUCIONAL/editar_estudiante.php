<?php
error_reporting(E_ALL);
ini_set('display_errors', '0');
session_start();
if (isset($_SESSION['nombres'])) {
    if ($_SESSION['cod_rol'] != '1') {
        echo "<script language='javascript'> alert('No posee privilegios para esta area');window.location = '../index.html'; </script>";
    }
} else {
    echo "<script language='javascript'> window.location = '../index.html'; </script>";
}
$color = 'white';
if (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
}

require_once '../appws/clases/conexion.php';
$objConexion = new conexion();
$con = $objConexion->getConexion();
$conexion = $objConexion;
$cedula = $_GET['editar_est'];
if (isset($_POST)) {
    if (isset($_POST["est_cedula"]) && $_GET["cargar"] == "editar_pasante") {
        $stmt = $conexion->consultaRetorno("SELECT pst_id FROM titulacion_6to_c.tb_registro_pasante where pst_cedula = $_POST[est_cedula]");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id = $row[0]["pst_id"];
        $query = "UPDATE titulacion_6to_c.tb_registro_pasante SET pst_nombres = :NOMBRES,pst_apellidos = :APELLIDOS,pst_convencional = :CONVENCIONAL,pst_celular = :CELULAR,
        pst_correo = :CORREO,pst_direccion = :DIRECCION,
        pst_edad = :EDAD,pst_enfermedad = :ENFERMEDAD,pst_alergias = :ALERGIAS,
        pst_tipo_sangre = :SANGRE,pst_genero = :GENERO,pst_curso = :CURSO,
        pst_jornada = :JORNADA,pst_provincia = :PROVINCIA,
        pst_ciudad = :CIUDAD,pst_vive = :VIVE,
        pst_civil = :CIVIL,pst_nombre_ref = :NOMBRES_REF,pst_fecha_nacimiento = :FECHA ,
        pst_apellidos_ref = :APELLIDOS_REF,pst_direccion_ref = :DIRECCION_REF,pst_tlf_ref = :TELEFONO_REF,
        pst_fecha = :FECHA_REG WHERE pst_id = :ID";
        $stmt = $con->prepare($query);
        $stmt->bindParam(":NOMBRES",$_POST["est_nombres"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":APELLIDOS",$_POST["est_apellidos"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CONVENCIONAL",$_POST["est_convencional"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CELULAR",$_POST["est_celular"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CORREO",$_POST["est_correo"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":DIRECCION",$_POST["est_direccion"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":FECHA",$_POST["est_fecha_nacimiento"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":EDAD",$_POST["est_edad"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":ENFERMEDAD",$_POST["est_enfermedad"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":ALERGIAS",$_POST["est_alergias"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":SANGRE",$_POST["est_tipo_sangre"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":GENERO",$_POST["est_genero"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CURSO",$_POST["est_curso"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":JORNADA",$_POST["est_jornada"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":PROVINCIA",$_POST["est_provincia"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CIUDAD",$_POST["est_ciudad"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":VIVE",$_POST["est_vive"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CIVIL",$_POST["est_civil"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":NOMBRES_REF",$_POST["est_nombre_ref"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":APELLIDOS_REF",$_POST["est_apellidos_Ref"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":DIRECCION_REF",$_POST["est_direccion_ref"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":TELEFONO_REF",$_POST["est_tlf_ref"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":FECHA_REG",$_POST["est_fecha"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":ID",$id,PDO::PARAM_INT,11);

        if ($stmt->execute()) {
            $estado = "ACTUALIZADO CON EXITO";
        } else {
            $estado = "ERROR AL ACTUALIZAR";
        }
    }elseif( isset($_POST["est_cedula"]) && $_GET["cargar"] == "editar_estudiantes"){
        $stmt = $conexion->consultaRetorno("SELECT est_id FROM titulacion_6to_c.tb_registro_estudiante where est_cedula = $_POST[est_cedula]");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id = $row[0]["est_id"];
        $query = "UPDATE titulacion_6to_c.tb_registro_estudiante SET est_nombres = :NOMBRES,est_apellidos = :APELLIDOS,est_convencional = :CONVENCIONAL,est_celular = :CELULAR,
        est_correo = :CORREO,est_direccion = :DIRECCION,
        est_edad = :EDAD,est_enfermedad = :ENFERMEDAD,est_alergias = :ALERGIAS,
        est_tipo_sangre = :SANGRE,est_genero = :GENERO,est_curso = :CURSO,
        est_jornada = :JORNADA,est_provincia = :PROVINCIA,
        est_ciudad = :CIUDAD,est_vive = :VIVE,
        est_civil = :CIVIL,est_nombre_ref = :NOMBRES_REF,est_fecha_nacimiento = :FECHA ,
        est_apellidos_ref = :APELLIDOS_REF,est_direccion_ref = :DIRECCION_REF,est_tlf_ref = :TELEFONO_REF,
        est_fecha = :FECHA_REG WHERE est_id = :ID";
        $stmt = $con->prepare($query);
        $stmt->bindParam(":NOMBRES",$_POST["est_nombres"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":APELLIDOS",$_POST["est_apellidos"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CONVENCIONAL",$_POST["est_convencional"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CELULAR",$_POST["est_celular"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CORREO",$_POST["est_correo"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":DIRECCION",$_POST["est_direccion"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":FECHA",$_POST["est_fecha_nacimiento"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":EDAD",$_POST["est_edad"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":ENFERMEDAD",$_POST["est_enfermedad"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":ALERGIAS",$_POST["est_alergias"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":SANGRE",$_POST["est_tipo_sangre"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":GENERO",$_POST["est_genero"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CURSO",$_POST["est_curso"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":JORNADA",$_POST["est_jornada"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":PROVINCIA",$_POST["est_provincia"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CIUDAD",$_POST["est_ciudad"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":VIVE",$_POST["est_vive"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":CIVIL",$_POST["est_civil"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":NOMBRES_REF",$_POST["est_nombre_ref"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":APELLIDOS_REF",$_POST["est_apellidos_Ref"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":DIRECCION_REF",$_POST["est_direccion_ref"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":TELEFONO_REF",$_POST["est_tlf_ref"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":FECHA_REG",$_POST["est_fecha"],PDO::PARAM_STR,4000);
        $stmt->bindParam(":ID",$id,PDO::PARAM_INT,11);

        if ($stmt->execute()) {
            $estado = "ACTUALIZADO CON EXITO";
        } else {
            $estado = "ERROR AL ACTUALIZAR";
        }
    }
}
$conexion->consultaSimple("SET NAMES UTF8");
if ($_GET["cargar"] == "editar_pasante") {
    $query = "SELECT * FROM titulacion_6to_c.tb_registro_pasante where  pst_cedula = $_GET[editar_est]";
    $stmt = $conexion->consultaRetorno($query);
    if (isset($stmt)) {
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $cedula = $row[0]["pst_cedula"];
        $nombres = $row[0]["pst_nombres"];
        $apellidos = $row[0]["pst_apellidos"];
        $convencional = $row[0]["pst_convencional"];
        $celular = $row[0]["pst_celular"];
        $correo = $row[0]["pst_correo"];
        $direccion = $row[0]["pst_direccion"];
        $fecha = $row[0]["pst_fecha_nacimiento"];
        $edad = $row[0]["pst_edad"];
        $enfermedad = $row[0]["pst_enfermedad"];
        $alergias = $row[0]["pst_alergias"];
        $tipo_sangre = $row[0]["pst_tipo_sangre"];
        $genero = $row[0]["pst_genero"];
        $curso = $row[0]["pst_curso"];
        $jornada = $row[0]["pst_jornada"];
        $trabaja = $row[0]["pst_trabaja"];
        $provincia = $row[0]["pst_provincia"];
        $ciudad = $row[0]["pst_ciudad"];
        $dependiente = $row[0]["pst_dependiente"];
        $vive = $row[0]["pst_vive"];
        $civil = $row[0]["pst_civil"];
        $hijos = $row[0]["pst_hijos"];
        $universidad = $row[0]["pst_universidad"];
        $referencias = $row[0]["pst_nombre_ref"];
        $apellidos_ref = $row[0]["pst_apellidos_ref"];
        $direccion_ref = $row[0]["pst_direccion_ref"];
        $telefono_ref = $row[0]["pst_tlf_ref"];
        $aceptar = $row[0]["pst_aceptar"];
        $fecha_reg = $row[0]["pst_fecha"];
        $foto = $row[0]["pst_foto"];
        $hermanos = $row[0]["pst_hermanos"];
        $correo_ref = $row[0]["pst_correo_ref"];
        $cedula_ref = $row[0]["pst_cedula_ref"];
    }

} elseif ($_GET["cargar"] == "editar_estudiantes") {
    $query = "SELECT * FROM titulacion_6to_c.tb_registro_estudiante where  est_cedula = $_GET[editar_est]";
    $stmt = $conexion->consultaRetorno($query);
    if (isset($stmt)) {
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $cedula = $row[0]["est_cedula"];
        $nombres = $row[0]["est_nombres"];
        $apellidos = $row[0]["est_apellidos"];
        $convencional = $row[0]["est_convencional"];
        $celular = $row[0]["est_celular"];
        $correo = $row[0]["est_correo"];
        $direccion = $row[0]["est_direccion"];
        $fecha = $row[0]["est_fecha_nacimiento"];
        $edad = $row[0]["est_edad"];
        $enfermedad = $row[0]["est_enfermedad"];
        $alergias = $row[0]["est_alergias"];
        $tipo_sangre = $row[0]["est_tipo_sangre"];
        $genero = $row[0]["est_genero"];
        $curso = $row[0]["est_curso"];
        $jornada = $row[0]["est_jornada"];
        $trabaja = $row[0]["est_trabaja"];
        $provincia = $row[0]["est_provincia"];
        $ciudad = $row[0]["est_ciudad"];
        $dependiente = $row[0]["est_dependiente"];
        $vive = $row[0]["est_vive"];
        $civil = $row[0]["est_civil"];
        $hijos = $row[0]["est_hijos"];
        $universidad = $row[0]["est_universidad"];
        $referencias = $row[0]["est_nombre_ref"];
        $apellidos_ref = $row[0]["est_apellidos_ref"];
        $direccion_ref = $row[0]["est_direccion_ref"];
        $telefono_ref = $row[0]["est_tlf_ref"];
        $aceptar = $row[0]["est_aceptar"];
        $fecha_reg = $row[0]["est_fecha"];
        $foto = $row[0]["est_foto"];
        $hermanos = $row[0]["pst_hermanos"];
        $correo_ref = $row[0]["pst_correo_ref"];
        $cedula_ref = $row[0]["pst_cedula_ref"];
    }
}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../icono.jpg" type="image/x-icon"/>

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
                    <i class="fa fa-user"></i> <?php echo 'Bienvenido: ' . $_SESSION['nombres'] . ' ' . $_SESSION['apellidos']; ?>
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
                            <li><a href="historial_estudiante.php?func=mostrar">Volver Atrás</a></li>
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
<style>
    .status{
        background-color: green;
        border-radius: 15px 15px 15px 15px;
        width: 50%;
        font-size: 1rem;
        letter-spacing: 0.4rem;
        color: white;
        font-weight: bold;
    }
</style>
<section id="lgoin-page-wrap" style="margin-top:150px;" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="contact-form">
                    <center>
                        <div class="status">
                            <?php if(isset($estado)){ echo $estado;} ?>
                        </div>
                    </center>
                    <center><img src="imagen/mega-menu.jpg" style="width: 30%; border-radius: 5px;">
                        <h4 style="color: #0A91E4;">Editar Datos de Estudiante
                        </h4></center>
                    <br>
                    <form style="color:#0A91E4;" enctype="multipart/form-data" action="" method="POST">
                        <div class="form-row">
                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloNumeros(event);" id="est_cedula" type="text" name="est_cedula" maxlength="10"
                                       value="<?php echo $cedula ?>" required>
                                <label for="est_cedula">Cedula/Pasaporte:</label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_nombres" type="text" name="est_nombres" value="<?php echo $nombres; ?>"
                                       required>
                                <label for="est_nombres">Nombres: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_apellidos" name="est_apellidos" value="<?php echo $apellidos; ?>"
                                       type="text" required>
                                <label for="est_apellidos">Apellidos: </label>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloNumeros(event);" id="est_convencional" name="est_convencional"
                                       value="<?php echo $convencional; ?>" maxlength="9" type="text" required>
                                <label for="est_convencional">Convencional: </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloNumeros(event);" id="est_celular" name="est_celular" value="<?php echo $celular; ?>"
                                       maxlength="10" type="text" required>
                                <label for="est_celular">Celular: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloMail(event);" id="est_correo" name="est_correo" value="<?php echo $correo; ?>" type="text"
                                       required>
                                <label for="est_correo">Correo Electronico: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloMail(event);" id="est_direccion" name="est_direccion" value="<?php echo $direccion; ?>"
                                       type="text" required>
                                <label for="est_direccion">Dirección: </label>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <input id="est_fecha_nacimiento" name="est_fecha_nacimiento"
                                       value="<?php echo $fecha; ?>" type="text" required>
                                <label for="est_fecha_nacimiento">Fecha de Nacimiento: </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloNumeros(event);" id="est_edad" name="est_edad" value="<?php echo $edad; ?>" type="text" required>
                                <label for="est_edad">Edad: </label>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_enfermedad" name="est_enfermedad" value="<?php echo $enfermedad; ?>"
                                       type="text" required>
                                <label for="est_enfermedad">Enfermedad: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_alergias" name="est_alergias" value="<?php echo $alergias; ?>"
                                       type="text" required>
                                <label for="est_alergias">Alergia: </label>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_tipo_sangre" name="est_tipo_sangre" value="<?php echo $tipo_sangre; ?>"
                                       type="text" required>
                                <label for="est_tipo_sangre">Tipo de Sangre: </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_genero" name="est_genero" value="<?php echo $genero; ?>" type="text"
                                       required>
                                <label for="est_genero">Genero: </label>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_curso" name="est_curso" value="<?php echo $curso; ?>" type="text"
                                       required>
                                <label for="est_curso">Curso: </label>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_jornada" name="est_jornada" value="<?php echo $jornada; ?>" type="text"
                                       required>
                                <label for="est_jornada">Jornada: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_provincia" name="est_provincia" value="<?php echo $provincia; ?>"
                                       type="text" required>
                                <label for="est_provincia">Provincia de Nacimiento: </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_ciudad" name="est_ciudad" type="text" value="<?php echo $ciudad; ?>"
                                       required>
                                <label for="est_ciudad">Ciudad de recidencia: </label>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_trabajo" name="est_trabajo" type="text" value="<?php echo $trabaja; ?>"
                                       required>
                                <label for="est_trabajo">Trabaja: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_vive" name="est_vive" type="text" value="<?php echo $vive; ?>" required>
                                <label for="est_vive">Vive con: </label>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_hermanos" name="est_hermanos" type="text"
                                       value="<?php echo $hermanos; ?>" required>
                                <label for="est_hermanos">Hermanos: </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_civil" name="est_civil" type="text" value="<?php echo $civil; ?>"
                                       required>
                                <label for="est_civil">Estado Civil: </label>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_hijos" name="est_hijos" value="<?php echo $hijos; ?>" type="text"
                                       required>
                                <label for="est_hijos">Hijos: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_nombre_ref" name="est_nombre_ref" value="<?php echo $referencias; ?>"
                                       type="text" required>
                                <label for="est_nombre_ref">Nombre de referencia: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloLetras(event);" id="est_apellidos_ref" name="est_apellidos_ref"
                                       value="<?php echo $apellidos_ref; ?>" type="text" required>
                                <label for="est_apellidos_ref">Apellidos de referencia: </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloNumeros(event);" id="est_cedula_ref" name="est_cedula_ref" value="<?php echo $cedula_ref; ?>"
                                       maxlength="10" type="text">
                                <label for="est_cedula_ref">Cedula de referencia: </label>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <input onkeypress="return soloNumeros(event);" id="est_tlf_ref" name="est_tlf_ref" value="<?php echo $telefono_ref; ?>"
                                       maxlength="10" type="text" required="">
                                <label for="est_tlf_ref">Telefono de referencia: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloMail(event);" id="est_correo_ref" name="est_correo_ref" value="<?php echo $correo_ref; ?>"
                                       type="text" required>
                                <label for="est_correo_ref">Correo de referencia: </label>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <input onkeypress="return soloMail(event);" id="est_direccion_ref" name="est_direccion_ref"
                                       value="<?php echo $direccion_ref; ?>" type="text" required>
                                <label for="est_direccion_ref">Dirección de referencia: </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-4 col-md-3">
                                <input id="est_fecha" name="est_fecha" value="<?php echo $fecha_reg; ?>" type="text"
                                       readonly="">
                                <label for="est_fecha">Fecha de registros: </label>
                            </div>
                        </div>

                        <div class="col-auto my-1">
                            <button type="submit" id="submit" class="btn btn-primary" name="enviar">Editar Datos
                            </button>
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
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>
                        Fundación Ecuador People - C.C Design
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
