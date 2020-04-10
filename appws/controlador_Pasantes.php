<?php
include_once("clases/tb_pasantes.php");

class controlador_Pasantes{
    //Atributo
    private $tb_pasantes;
    //Metodos
    public function __construct() {
        $this->tb_pasantes = new tb_pasantes();
    }
    
    public function index() {
        $resultado = $this->tb_pasantes->listar();
        return $resultado;
    }

    public function crear($request,$pst_foto){
        foreach($request as $key => $value){
            $this->tb_pasantes->set($key, $value);
        }
        $resultado = $this->tb_pasantes->crear();

        
        $this->tb_pasantes->set('pst_foto', $pst_foto);
        $resp2 = $this->tb_pasantes->gestionfoto($resultado);
        return 'Correcto';
    }

    public function delete($codice){
        $this->tb_pasantes->set('pst_id', $codice);
        $this->tb_pasantes->eliminar();
    }

    public function editar($pst_cedula, $pst_nombres, $pst_apellidos, $pst_correo, $pst_direccion, $pst_edad, $pst_fecha_nacimiento, $pst_convencional, $pst_celular, $pst_enfermedad, $pst_alergias, $pst_genero, $pst_tipo_sangre, $pst_curso, $pst_jornada, $pst_provincia, $pst_ciudad, $pst_vive, $pst_hermanos, $pst_civil, $pst_hijos, $pst_universidad, $pst_nombre_ref, $pst_tlf_ref, $pst_correo_ref, $pst_direccion_ref, $pst_foto)
      {
        $this->estudiantes->set("pst_cedula", $pst_cedula);
        $this->estudiantes->set("pst_nombres", $pst_nombres);
        $this->estudiantes->set("pst_apellidos", $pst_apellidos);
        $this->estudiantes->set("pst_correo", $pst_correo);
        $this->estudiantes->set("pst_direccion", $pst_direccion);
        $this->estudiantes->set("pst_edad", $pst_edad);
        $this->estudiantes->set("pst_fecha_nacimiento", $pst_fecha_nacimiento);
        $this->estudiantes->set("pst_convencional", $pst_convencional);
        $this->estudiantes->set("pst_celular", $pst_celular);
        $this->estudiantes->set("pst_enfermedad", $pst_enfermedad);
        $this->estudiantes->set("pst_alergias", $pst_alergias);
        $this->estudiantes->set("pst_genero", $pst_genero);
        $this->estudiantes->set("pst_tipo_sangre", $pst_tipo_sangre);
        $this->estudiantes->set("pst_curso", $pst_curso);
        $this->estudiantes->set("pst_jornada", $pst_jornada);
        $this->estudiantes->set("pst_provincia", $pst_provincia);
        $this->estudiantes->set("pst_ciudad", $pst_ciudad);
        $this->estudiantes->set("pst_vive", $pst_vive);
        $this->estudiantes->set("pst_hermanos", $pst_hermanos);
        $this->estudiantes->set("pst_civil", $pst_civil);
        $this->estudiantes->set("pst_hijos", $pst_hijos);
        $this->estudiantes->set("pst_universidad", $pst_universidad);
        $this->estudiantes->set("pst_nombre_ref", $pst_nombre_ref);
        $this->estudiantes->set("pst_tlf_ref", $pst_tlf_ref);
        $this->estudiantes->set("pst_correo_ref", $pst_correo_ref);
        $this->estudiantes->set("pst_direccion_ref", $pst_direccion_ref);
        $this->estudiantes->set("pst_foto", $pst_foto);
        $this->estudiantes->editar();
      }
 }

?>

