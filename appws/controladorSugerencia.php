<?php
include_once("clases/tb_sugerencia.php");

class controladorSugerencia{
    //Atributo
    private $tb_sugerencia;
    //Metodos
    public function __construct() {
        $this->tb_sugerencia = new tb_sugerencia();
    }
    public function index() {
        $resultado = $this->tb_sugerencia->listar();
        return $resultado;
    }
    public function crear($request){
		foreach($request as $key => $value){
			$this->tb_sugerencia->set($key, $value);
		}
		$this->tb_sugerencia->crear();
		return 'ok';	
    }
    public function delete($codice){
        $this->tb_sugerencia->set('sug_id', $codice);
        $this->tb_sugerencia->eliminar();
    }

 }
?>
