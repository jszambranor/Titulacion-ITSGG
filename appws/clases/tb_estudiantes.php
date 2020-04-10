<?php
//clase de conexion incluida
include_once ('conexion.php');
class tb_estudiantes {
    //atributos 
    private $est_id;
    private $est_nombres;
    private $est_apellidos;
    private $est_cedula;
    private $est_correo;
    private $est_edad;
    private $est_direccion;
    private $est_telefono;
    private $est_fecha_nac;
    private $est_genero;
    private $est_curso;
    private $est_provincia;
    private $est_ciudad;
    private $est_familia;
    private $est_hermanos;
    private $est_enfermedad;
    private $est_sangre;
    private $est_nomb_contacto;
    private $est_apellido_contacto;
    private $est_cedula_contacto;
    private $est_direccion_contacto;
    private $est_correo_contacto;
    private $est_telf_contacto;
    private $taxta_foto;

    
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
        $sql= "SELECT * FROM tb_estudiantes";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function crear(){
        $sql1 = "SELECT * FROM tb_estudiantes WHERE est_edad = '{$this->est_edad}'";
        $resultado = $this->con->consultaRetorno($sql1);
        
        if ($resultado->rowCount() != 0){
            return '0';
        }
        
        $sql = "INSERT INTO tb_estudiantes (est_nombres, est_apellidos, est_cedula, est_correo, est_edad, est_direccion, est_telefono, est_fecha_nac, est_genero, est_curso, est_provincia, est_ciudad, est_familia, est_hermanos, est_enfermedad, est_sangre, est_nomb_contacto, est_apellido_contacto, est_cedula_contacto, est_direccion_contacto, est_correo_contacto, est_telf_contacto, taxta_fecha)
        VALUES ('{$this->est_nombres}','{$this->est_apellidos}','{$this->est_cedula}','{$this->est_correo}','{$this->est_edad}','{$this->est_direccion}','{$this->est_telefono}','{$this->est_fecha_nac}','{$this->est_genero}','{$this->est_curso}','{$this->est_provincia}','{$this->est_ciudad}','{$this->est_familia}','{$this->est_hermanos}','{$this->est_enfermedad}','{$this->est_sangre}','{$this->est_nomb_contacto}','{$this->est_apellido_contacto}','{$this->est_cedula_contacto}','{$this->est_direccion_contacto}','{$this->est_correo_contacto}','{$this->est_telf_contacto}',NOW())";
        $resp = $this->con->consultaSimpleid($sql);
        return $resp;
    }

     public function gestionfoto($nombre){
        $array = explode('.', $this->taxta_foto['name']);
        $extension = end($array);
        $uploaddir = '../appws/files/fotos/';
        $uploadfile = $uploaddir . basename('txtafo_'.$nombre.'.'.$extension);
        
        $this->actualizar('taxta_foto', $extension, $nombre);
        
        if (move_uploaded_file($this->taxta_foto['tmp_name'], $uploadfile)) {
            return '1';
        } else {
            return '0';
        }
    }
    
    public function actualizar($campo, $extension, $id){
        $sql = "UPDATE tb_estudiantes SET ".$campo." = '".$extension."' WHERE est_id = '".$id."'";
        $this->con->consultaSimple($sql);
    }

    public function eliminar() {
        $sql = "DELETE FROM tb_estudiantes WHERE est_id = '{$this->est_id}'";
        $this->con->consultaSimple($sql);
    }

    public function ver () {
        $sql= "SELECT * FROM tb_estudiantes WHERE est_id = '{$this->est_id}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }
}
?>
