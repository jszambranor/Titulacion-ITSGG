<?php
include_once("clases/tb_document.php");

class controladorDocument{
    //Atributo
    private $tb_document;
    //Metodos
    public function __construct() {
        $this->tb_document = new tb_document();
    }
	
    public function index(){
        $resultado = $this->tb_document->listar();
        return $resultado;
    }

    public function crear($request){
		foreach($request as $key => $value){
			$this->tb_document->set($key, $value);
		}
		$this->tb_document->crear();
        return 'Correcto';
    }
	
	public function delete($codice){
        $this->tb_document->set('doc_id', $codice);
        $this->tb_document->eliminar();
    }
}
?>
