<?php
//clase de conexion incluida
include_once ('conexion.php');
class tb_pasantes {
    //atributos
    private $pst_id;
    private $pst_cedula;
    private $pst_nombres;
    private $pst_apellidos;
    private $pst_convencional;
    private $pst_celular;
    private $pst_correo;
    private $pst_direccion;
    private $pst_fecha_nacimiento;
    private $pst_edad;
    private $pst_enfermedad;
    private $pst_alergias;
    private $pst_tipo_sangre;
    private $pst_genero;
    private $pst_curso;
    private $pst_jornada;
    private $pst_trabaja;
    private $pst_provincia;
    private $pst_ciudad;
    private $pst_dependiente;
    private $pst_vive;
    private $pst_civil;
    private $pst_hijos;
    private $pst_universidad;
    private $pst_nombre_ref;
    private $pst_apellidos_ref;
    private $pst_direccion_ref;
    private $pst_tlf_ref;
    private $pst_aceptar;
    private $pst_fecha;
    private $pst_foto;
    private $con;
    //Metodos
    public function __construct() {
        $this->con= new conexion();
    }

    public function set ($atributo,$contenido) {
        $this->$atributo = $contenido;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function listar(){
        $sql= "SELECT * FROM tb_pasantes";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function crear(){
        $sql = "INSERT INTO tb_pasantes (pst_cedula, pst_nombres, pst_apellidos, pst_convencional, pst_celular, pst_correo, pst_direccion, pst_fecha_nacimiento, pst_edad, pst_enfermedad, pst_alergias, pst_tipo_sangre, pst_genero, pst_curso, pst_jornada, pst_trabaja, pst_provincia, pst_ciudad, pst_dependiente, pst_vive, pst_civil, pst_hijos, pst_universidad, pst_nombre_ref, pst_apellidos_ref, pst_direccion_ref, pst_tlf_ref, pst_aceptar, pst_fecha)
        VALUES ('{$this->pst_cedula}','{$this->pst_nombres}','{$this->pst_apellidos}','{$this->pst_convencional}','{$this->pst_celular}','{$this->pst_correo}','{$this->pst_direccion}','{$this->pst_fecha_nacimiento}','{$this->pst_edad}','{$this->pst_enfermedad}','{$this->pst_alergias}','{$this->pst_tipo_sangre}','{$this->pst_genero}','{$this->pst_curso}','{$this->pst_jornada}','{$this->pst_trabaja}','{$this->pst_provincia}','{$this->pst_ciudad}','{$this->pst_dependiente}','{$this->pst_vive}','{$this->pst_civil}','{$this->pst_hijos}','{$this->pst_universidad}','{$this->pst_nombre_ref}','{$this->pst_apellidos_ref}','{$this->pst_direccion_ref}','{$this->pst_tlf_ref}','{$this->pst_aceptar}',NOW())";
        $resp = $this->con->consultaSimpleid($sql);
        return $resp;
    }

    /*
    public function gestiondocumento($nombre){
        $array = explode('.', $this->cur_archivo['name']);
        $extension = end($array);
        $uploaddir = './appws/files/pasantes/';
        $uploadfile = $uploaddir . basename('cuar_'.$nombre.'.'.$extension);
        
        $this->actualizar('cur_archivo', $extension, $nombre);
        
        if (move_uploaded_file($this->cur_archivo['tmp_name'], $uploadfile)) {
                return '1';
        } else {
              return '0';
        }
    }
    */

    public function gestionfoto($nombre){
        $array = explode('.', $this->pst_foto['name']);
        $extension = end($array);
        $uploaddir = './appws/files/foto/';
        $uploadfile = $uploaddir . basename('cufo_'.$nombre.'.'.$extension);
        
        $this->actualizar('pst_foto', $extension, $nombre);
        
        if (move_uploaded_file($this->pst_foto['tmp_name'], $uploadfile)) {
            return '1';
        } else {
            return '0';
        }
    }
    
    public function actualizar($campo, $extension, $id){
        $sql = "UPDATE tb_pasantes SET ".$campo."='".$extension."' WHERE pst_id = '".$id."'";
        $this->con->consultaSimple($sql);
    }

    public function eliminar() {
        $sql = "DELETE FROM tb_pasantes WHERE pst_id = '{$this->pst_id}'";
        $this->con->consultaSimple($sql);
    }

    public function ver () {
        $sql= "SELECT * FROM tb_pasantes WHERE pst_id = '{$this->pst_id}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function editar() {
          $sql="UPDATE tb_pasantes SET pst_nombres= '{$this->pst_nombres}',
           pst_apellidos= '{$this->pst_apellidos}',
           pst_correo= '{$this->pst_correo}',
           pst_direccion= '{$this->pst_direccion}',
           pst_edad= '{$this->pst_edad}',
           pst_fecha_nacimiento= '{$this->pst_fecha_nacimiento}',
           pst_convencional= '{$this->pst_convencional}',
           pst_celular= '{$this->pst_celular}',
           pst_enfermedad= '{$this->pst_enfermedad}',
           pst_alergias= '{$this->pst_alergias}',
           pst_genero= '{$this->pst_genero}',
           pst_tipo_sangre= '{$this->pst_tipo_sangre}',
           pst_curso= '{$this->pst_curso}',
           pst_jornada= '{$this->pst_jornada}',
           pst_provincia= '{$this->pst_provincia}',
           pst_ciudad= '{$this->pst_ciudad}',
           pst_vive= '{$this->pst_vive}',
           pst_hermanos= '{$this->pst_hermanos}',
           pst_civil= '{$this->pst_civil}',
           pst_hijos= '{$this->pst_hijos}',
           pst_universidad= '{$this->pst_universidad}',
           pst_nombre_ref= '{$this->pst_nombre_ref}',
           pst_tlf_ref= '{$this->pst_tlf_ref}',
           pst_correo_ref= '{$this->pst_correo_ref}',
           pst_direccion_ref= '{$this->pst_direccion_ref}',
           pst_foto= '{$this->pst_foto}' WHERE pst_cedula = '{$this->pst_cedula}'";

          echo $sql;
          $this->con->consultaSimple($sql);
          //die();

      }
}
?>
