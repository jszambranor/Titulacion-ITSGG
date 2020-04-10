<?php
//clase de conexion incluida
include_once ('conexion.php');
class tb_registro_estudiante{
    //atributos
    private $est_id;
    private $est_cedula;
    private $est_nombres;
    private $est_apellidos;
    private $est_convencional;
    private $est_celular;
    private $est_correo;
    private $est_direccion;
    private $est_fecha_nacimiento;
    private $est_edad; 
    private $est_enfermedad;
    private $est_alergias;
    private $est_tipo_sangre;
    private $est_genero;
    private $est_curso;
    private $est_jornada;
    private $est_provincia;
    private $est_ciudad;
    private $est_trabaja;
    private $est_vive;
    private $est_hermanos;
    private $est_civil;
    private $est_hijos;
    private $est_nombre_ref;
    private $est_apellidos_ref;
    private $est_cedula_ref;
    private $est_tlf_ref;
    private $est_correo_ref;
    private $est_direccion_ref;
    private $est_foto;
    private $est_fecha;

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
        $sql= "SELECT * FROM tb_registro_estudiante";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function crear(){
        $sql = "INSERT INTO tb_registro_estudiante (est_cedula, est_nombres, est_apellidos, est_convencional, est_celular, est_correo, est_direccion, est_fecha_nacimiento, est_edad, est_enfermedad, est_alergias, est_tipo_sangre, est_genero, est_curso,  est_jornada, est_provincia, est_ciudad, est_trabaja, est_vive, est_hermanos, est_civil, est_hijos, est_nombre_ref, est_apellidos_ref, est_cedula_ref, est_tlf_ref, est_correo_ref, est_direccion_ref, est_fecha)
        VALUES ('{$this->est_cedula}','{$this->est_nombres}','{$this->est_apellidos}','{$this->est_convencional}','{$this->est_celular}','{$this->est_correo}','{$this->est_direccion}','{$this->est_fecha_nacimiento}','{$this->est_edad}','{$this->est_enfermedad}','{$this->est_alergias}','{$this->est_tipo_sangre}','{$this->est_genero}','{$this->est_curso}','{$this->est_jornada}','{$this->est_provincia}','{$this->est_ciudad}','{$this->est_trabaja}','{$this->est_vive}','{$this->est_hermanos}','{$this->est_civil}','{$this->est_hijos}','{$this->est_nombre_ref}','{$this->est_apellidos_ref}','{$this->est_cedula_ref}','{$this->est_tlf_ref}','{$this->est_correo_ref}','{$this->est_direccion_ref}',NOW())";
        $resp = $this->con->consultaSimpleid($sql);
        return $resp;   
    }

    public function gestionfoto($nombre){
        $array = explode('.', $this->est_foto['name']);
        $extension = end($array);
        $uploaddir = '../appws/files/estudiantes/';
        $uploadfile = $uploaddir . basename('cufo_'.$nombre.'.'.$extension);
        
        $this->actualizar('est_foto', $extension, $nombre);
        
        if (move_uploaded_file($this->est_foto['tmp_name'], $uploadfile)) {
            return '1';
        } else {
            return '0';
        }
    }
    
    public function actualizar($campo, $extension, $id){
        $sql = "UPDATE tb_registro_estudiante SET ".$campo."='".$extension."' WHERE est_id = '".$id."'";
        $this->con->consultaSimple($sql);
    }

    public function eliminar() {
        $sql = "DELETE FROM tb_registro_estudiante WHERE est_id = '{$this->est_id}'";
        $this->con->consultaSimple($sql);
    }

    public function ver () {
        $sql= "SELECT * FROM tb_registro_estudiante WHERE est_id = '{$this->est_id}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }
}
?>
