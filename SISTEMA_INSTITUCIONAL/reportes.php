<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
date_default_timezone_set("America/Guayaquil");
require_once "../appws/clases/conexion.php";
$objConexion = new conexion();
$conexion = $objConexion->getConexion();
//var_dump($_POST);
$reporte = $_POST["registros_online"];
$fecha_inicio = $_POST["date_star"];
$fecha_final = $_POST["date_finish"];
$dia = date("d");
$mes = date("m");
$anio = date("Y");
$day = date("N");

if ($mes == '01') {
    $mes_text = "Enero";
} elseif ($mes == '02') {
    $mes_text = "Febrero";
} elseif ($mes == '03') {
    $mes_text = "Marzo";
} elseif ($mes == '04') {
    $mes_text = "Abril";
} elseif ($mes == '05') {
    $mes_text = "Mayo";
} elseif ($mes == '06') {
    $mes_text = "Junio";
} elseif ($mes == '07') {
    $mes_text = "Julio";
} elseif ($mes == '08') {
    $mes_text = "Agosto";
} elseif ($mes == '09') {
    $mes_text = "Septiembre";
} elseif ($mes == '10') {
    $mes_text = "Octubre";
} elseif ($mes == '11') {
    $mes_text = "Noviembre";
} elseif ($mes == '12') {
    $mes_text = "Diciembre";
}

if ($day == '1') {
    $day_text = "Lunes";
} elseif ($day == '2') {
    $day_text = "Martes";
} elseif ($day == '3') {
    $day_text = "Miercoles";
} elseif ($day == '4') {
    $day_text = "Jueves";
} elseif ($day == '5') {
    $day_text = "Viernes";
} elseif ($day == '6') {
    $day_text = "Sabado";
} elseif ($day == '7') {
    $day_text = "Domingo";
}

$fecha = "Guayaquil" . " " . $day_text . " " . $dia . " " . "de" . " " . $mes_text . " " . "del " . $anio;


if ($reporte == "est") {
    $query = "SELECT * FROM titulacion_6to_c.tb_registro_estudiante";
    $stmt = $conexion->prepare($query);
    if ($stmt->execute()) {
        $cadena = "";
        $cont = (int)0;
        while ($data = $stmt->fetch()) {
            $cont++;
            $cadena = $cadena . '
                <tr>
                    <td>' . $cont . '</td>
                    <td>' . $data["est_cedula"] . '</td>
                    <td>' . $data["est_nombres"] . '</td>
                    <td>' . $data["est_apellidos"] . '</td>
                    <td>' . $data["est_convencional"] . '</td>
                    <td>' . $data["est_celular"] . '</td>
                    <td>' . $data["est_correo"] . '</td>
                    <td>' . $data["est_direccion"] . '</td>
                    <td>' . $data["est_fecha_nacimiento"] . '</td>
                    <td>' . $data["est_edad"] . '</td>
                    <td>' . $data["est_enfermedad"] . '</td>
                    <td>' . $data["est_alergias"] . '</td>
                    <td>' . $data["est_tipo_sangre"] . '</td>
                    <td>' . $data["est_genero"] . '</td>
                    <td>' . $data["est_curso"] . '</td>
                    <td>' . $data["est_jornada"] . '</td>
                    <td>' . $data["est_trabaja"] . '</td>
                    <td>' . $data["est_provincia"] . '</td>
                    <td>' . $data["est_ciudad"] . '</td>
                    <td>' . $data["est_vive"] . '</td>
                    <td>' . $data["est_hermanos"] . '</td>
                    <td>' . $data["est_civil"] . '</td>
                    <td>' . $data["est_hijos"] . '</td>
                    <td>' . $data["est_nombre_ref"] . '</td>
                    <td>' . $data["est_apellidos_ref"] . '</td>
                    <td>' . $data["est_cedula_ref"] . '</td>
                    <td>' . $data["est_tlf_ref"] . '</td>
                    <td>' . $data["est_correo_ref"] . '</td>
                    <td>' . $data["est_direccion_ref"] . '</td>
                    <td>' . $data["est_foto"] . '</td>
                    <td>' . $data["est_fecha"] . '</td>
                    <td>' . $data["pst_hermanos"] . '</td>
                </tr>
            
            ';
        }
        if($cont == 0){
            $cadena = "No hay datos";
        }
    }
} elseif ($reporte == "pst") {
    $query = "SELECT * FROM titulacion_6to_c.tb_registro_pasante";
    $stmt = $conexion->prepare($query);
    if($stmt->execute()) {
        $cadena = "";
        $cont = (int)0;
        while ($data = $stmt->fetch()) {
            $cont++;
            $cadena = $cadena . '
                <tr>
                    <td>' . $cont . '</td>
                    <td>' . $data["pst_cedula"] . '</td>
                    <td>' . $data["pst_nombres"] . '</td>
                    <td>' . $data["pst_apellidos"] . '</td>
                    <td>' . $data["pst_convencional"] . '</td>
                    <td>' . $data["pst_celular"] . '</td>
                    <td>' . $data["pst_correo"] . '</td>
                    <td>' . $data["pst_direccion"] . '</td>
                    <td>' . $data["pst_fecha_nacimiento"] . '</td>
                    <td>' . $data["pst_edad"] . '</td>
                    <td>' . $data["pst_enfermedad"] . '</td>
                    <td>' . $data["pst_alergias"] . '</td>
                    <td>' . $data["pst_tipo_sangre"] . '</td>
                    <td>' . $data["pst_genero"] . '</td>
                    <td>' . $data["pst_curso"] . '</td>
                    <td>' . $data["pst_jornada"] . '</td>
                    <td>' . $data["pst_trabaja"] . '</td>
                    <td>' . $data["pst_provincia"] . '</td>
                    <td>' . $data["pst_ciudad"] . '</td>
                    <td>' . $data["pst_vive"] . '</td>
                    <td></td>
                    <td>' . $data["pst_civil"] . '</td>
                    <td>' . $data["pst_hijos"] . '</td>
                    <td>' . $data["pst_nombre_ref"] . '</td>
                    <td>' . $data["pst_apellidos_ref"] . '</td>
                    <td></td>
                    <td>' . $data["pst_tlf_ref"] . '</td>
                    <td></td>
                    <td>' . $data["pst_direccion_ref"] . '</td>
                    <td>' . $data["pst_foto"] . '</td>
                    <td>' . $data["pst_fecha"] . '</td>
                </tr>
            
            ';
        }
    }
    if($cont == 0){
        $cadena = "No hay datos";
    }
}
$body = '
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Registro</title>
    <style>
        .container {
    margin-left: 5mm;
            margin-right: 5mm;
            margin-top: 10mm;
            margin-bottom: 10mm;
        }

        .img-encabezado {
    margin-top: 1%;
            width: 100%;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 4%;
        }

        .title,
        .lectivo {
    margin-top: 1%;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .lectivo {
    font-size: 1.2rem;
        }

        .cert {
    text-align: left;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2rem;
            margin-top: 2%;
        }

        .name {
    text-align: left;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 1%;
            margin-bottom: 3%;
        }

        .body,
        .pre-footer {
    text-align: justify;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2rem;
        }

        .body {
    margin-top: 1%;
            margin-bottom: 8%;
        }

        .pre-footer {
    margin-top: 6%;
        }

        .date {
    text-align: right;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2rem;
            margin-top: 1%;
        }

        .line,
        .name-rector,
        .director {
    text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .line {
    margin-top: 1%;
        }

        .box-card-large {
    height: 70px;
        }

        .box-card-content {
    height: 65px;
        }

        table {
    border: 1px solid #000;
            width: 100%;
            margin-top:5%;
        }

        th,
        td {
    border: 1px solid #000;
        }

        .numero {
    width: 5%;
}

        .cedula {
    width: 7%;
}

        .nombres {
    width: 45%;
}

        .dia {
    width: 3%;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="img-encabezado">
            <img src="./imagen/mega-menu.jpg" alt="encabezado-gallegos-lara" srcset="" height="100px">
        </div>
        <p>'.$fecha.'</p>
        <p class="title">Listado de Registros Online:</p>
        <div class="conteiner">
            <div class="box-card-large">
                <table  class="centered highlight">
                         <tr>
                           <td scope="col">N° </td>
                                    <td scope="col">Cedula: </td>
                                    <td scope="col">Nombres: </td>
                                    <td scope="col">Apellidos: </td>
                                    <td scope="col">Convencional: </td>
                                    <td scope="col">Whatsapp: </td>
                                    <td scope="col">Correo: </td>
                                    <td scope="col">Dirección: </td>
                                    <td scope="col">Fecha/Nacimiento: </td>
                                    <td scope="col">Edad: </td>
                                    <td scope="col">Enfermedad</td>
                                    <td scope="col">Alergia: </td>
                                    <td scope="col">Tipo/Sangre: </td>
                                    <td scope="col">Genero: </td>
                                    <td scope="col">Curso/Capacitación:</td>
                                    <td scope="col">Jornada: </td>
                                    <td scope="col">Trabaja: </td>
                                    <td scope="col">Provincia: </td>
                                    <td scope="col">Ciudad: </td>
                                    
                                    <td scope="col">Vive/con: </td>
                                    <td scope="col">Hermanos: </td>
                                    <td scope="col">Estado/Civil: </td>
                                    <td scope="col">Hijos: </td>
                                    <td scope="col">Nombres/Contacto: </td>
                                    <td scope="col">Apellidos/Contacto: </td>
                                    <td scope="col">Cedula/Contacto: </td>
                                    <td scope="col">Telefono/Contacto: </td>
                                    <td scope="col">Correo/Contacto: </td>
                                    <td scope="col">Dirección/Referencia: </td>
                                    <td scope="col">Foto: </td>
                                    <td scope="col">Fecha/Registro</td>
                                   
                                    </tr>
                    <tbody id="body">
    ' . $cadena . '
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>

';

ob_start();
require_once './vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->Addpage('L');
$mpdf->SetFont('Arial', 'B', '16');
$mpdf->writeHTML($body);
ob_clean();
$mpdf->Output('reporte-registro'.date(). '.pdf', 'I');