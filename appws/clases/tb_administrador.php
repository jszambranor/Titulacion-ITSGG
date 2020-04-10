<?php
//clase de conexion incluida
include_once('conexion.php');
class tb_administrador {
    //atributos

	private $cod_usuario;
	private $nombres;
	private $apellidos;
	private $email;
	private $pass;
	private $telf;
	private $cod_rol;
	private $estado;
	
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
		$sql= "SELECT * FROM tb_administrador";
		$resultado = $this->con->consultaRetorno($sql);
		return $resultado;
	}

	public function login(){
		$sql= "SELECT * FROM tb_administrador WHERE email = '{$this->email}' AND pass = MD5('{$this->pass}') AND estado = 'a' limit 1";
		$resultado = $this->con->consultaRetorno($sql);
		
		$topage ='';
		if (!($resultado)){
			$topage = '0';
		}else{
			foreach ($resultado->fetchAll(PDO::FETCH_ASSOC) as $row) {
					$_SESSION["nombres"]=$row['nombres'];
					$_SESSION["apellidos"]=$row['apellidos'];
					$_SESSION["cod_usuario"]=$row['cod_usuario'];
					$_SESSION["cod_rol"]=$row['cod_rol'];
					$topage = $row['cod_rol'];
			}
		}
		return $topage;
	}

	public function crear(){}
	public function eliminar() {}
	public function ver () {}
}
?>
