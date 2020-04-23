<?php
class conexion {
    //Atributos
    private $servername = "3.14.82.157";
	private $username = "calderon";
	private $password = "#passwordCALD593";
	private $dbname = "titulacion_6to_c";
    private $conn;
	private $stmt;
    public $consulta;

    //Metodos PDO
    public function __construct() {
		$this->servername = "3.14.82.157";
		$this->username = "calderon";
		$this->password = "#passwordCALD593";
		$this->dbname = "titulacion_6to_c";
		$this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
	
    public function consultaSimple($sql) {
		try{
			$this->conn->query($sql);
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function consultaRetorno($sql) {
		$consulta = $this->conn->query($sql);
        return $consulta;
    }

    public function consultaSimpleid($sql) {
		$this->conn->query($sql);
		$id = $this->conn->lastInsertId();
		return $id;
    }

    public function getConexion(){
    	return $this->conn;
	}
}
?>
