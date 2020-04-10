<?php
//clase de conexion incluida
include_once ('conexion.php');
class tb_document {
    //atributos	
	private $doc_id;
	private $doc_nombre;
	private $doc_apellido;
	private $doc_cedula;
	private $doc_telefono;
    private $doc_genero;
    private $doc_curso;
    private $doc_aprobo;
    private $doc_reprobo;
    private $doc_motivo;
	private $doc_fecha;

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
        $sql= "SELECT * FROM tb_document";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function crear(){
		$sql = "INSERT INTO tb_document (doc_nombre, doc_apellido, doc_cedula, doc_telefono, doc_genero, doc_curso, doc_aprobo, doc_reprobo, doc_motivo, doc_fecha)
		VALUES ('{$this->doc_nombre}','{$this->doc_apellido}','{$this->doc_cedula}','{$this->doc_telefono}','{$this->doc_genero}','{$this->doc_curso}','{$this->doc_aprobo}','{$this->doc_reprobo}','{$this->doc_motivo}',NOW())";
		$resp = $this->con->consultaSimpleid($sql);
        return $resp;
    }

    /*public function gestionfoto($nombre){
        $array = explode('.', $this->doc_foto['name']);
        $extension = end($array);
        $uploaddir = '../appws/files/documents/';
        $uploadfile = $uploaddir . basename('docfo_'.$nombre.'.'.$extension);
		
		$this->actualizar('doc_foto', $extension, $nombre);
		
		
        if (move_uploaded_file($this->doc_foto['tmp_name'], $uploadfile)){
        	return '1';
        } else {
      		return '0';
        }
    }
	*/
    public function eliminar() {
        $sql = "DELETE FROM tb_document WHERE doc_id = '{$this->doc_id}'";
        $this->con->consultaSimple($sql);
    }


}
?>
