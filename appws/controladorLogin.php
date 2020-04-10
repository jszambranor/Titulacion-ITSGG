<?php
include_once("clases/tb_administrador.php");

class controladorLogin{
    //Atributo
    private $tb_administrador;
    //Metodos
    public function __construct() {
        $this->tb_administrador = new tb_administrador();
    }
    public function index() {
        $resultado = $this->tb_administrador->listar();
        return $resultado;
    }
    public function loguear($request){
		foreach($request as $key => $value){
			$this->tb_administrador->set($key, $value);
		}
		$resultado = $this->tb_administrador->login();
        return $resultado;
    }
	
	public function logout(){
		session_destroy();
	}
 }
?>