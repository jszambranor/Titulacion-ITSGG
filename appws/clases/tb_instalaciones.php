<?php
//clase de conexion incluida
include_once('conexion.php');
class tb_instalaciones {
    //atributos
    private $inst_id;
    private $inst_nombre;
    private $inst_correo;
    private $inst_ciudad;
    private $inst_opinion;
    private $inst_fecha;

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
       $sql= "SELECT * FROM tb_instalaciones";
       $resultado = $this->con->consultaRetorno($sql);
       return $resultado;
    }
    public function crear(){
        $sql = "INSERT INTO tb_instalaciones(inst_nombre, inst_correo, inst_ciudad,  inst_opinion, inst_fecha)
        VALUES ('{$this->inst_nombre}','{$this->inst_correo}','{$this->inst_ciudad}','{$this->inst_opinion}',NOW())";
        $this->con->consultaSimple($sql);
    }
    public function eliminar() {
        $sql = "DELETE FROM tb_instalaciones WHERE inst_id = '{$this->inst_id}'";
        $this->con->consultaSimple($sql);
    }
    public function ver () {
        $sql= "SELECT * FROM tb_instalaciones WHERE inst_id = '{$this->inst_id}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }
}
?>
