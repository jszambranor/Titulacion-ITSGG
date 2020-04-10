<?php
//clase de conexion incluida
include_once('conexion.php');
class tb_sugerencia {
    //atributos
	private $sug_id;
	private $sug_nombre;
	private $sug_correo;
	private $sug_ciudad;
	private $sug_telefono;
	private $sug_asunto;
	private $sug_comentario;
	private $sug_fecha;

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
	   $sql= "SELECT * FROM tb_sugerencia";
	   $resultado = $this->con->consultaRetorno($sql);
	   return $resultado;
	}
    public function crear(){
		$sql = "INSERT INTO tb_sugerencia(sug_nombre, sug_correo, sug_ciudad, sug_telefono, sug_asunto, sug_comentario, sug_fecha)
		VALUES ('{$this->sug_nombre}','{$this->sug_correo}','{$this->sug_ciudad}','{$this->sug_telefono}','{$this->sug_asunto}','{$this->sug_comentario}',NOW())";
		$this->con->consultaSimple($sql);
	}
	public function eliminar() {
		$sql = "DELETE FROM tb_sugerencia WHERE sug_id = '{$this->sug_id}'";
		$this->con->consultaSimple($sql);
	}
	public function ver () {
		$sql= "SELECT * FROM tb_sugerencia WHERE sug_id = '{$this->sug_id}' LIMIT 1";
		$resultado = $this->con->consultaRetorno($sql);
		return $resultado;
    }
}
?>
