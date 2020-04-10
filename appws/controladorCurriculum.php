<?php
include_once("clases/tb_curriculum.php");

class controladorCurriculum{
    //Atributo
    private $tb_curriculum;
    //Metodos
    public function __construct() {
        $this->tb_curriculum = new tb_curriculum();
    }
    
    public function index() {
        $resultado = $this->tb_curriculum->listar();
        return $resultado;
    }

    public function crear($request,$est_foto){
        foreach($request as $key => $value){
            $this->tb_curriculum->set($key, $value);
        }
        $resultado = $this->tb_curriculum->crear();

        
        $this->tb_curriculum->set('est_foto', $est_foto);
        $resp2 = $this->tb_curriculum->gestionfoto($resultado);
        return 'Correcto';
    }
    
    public function delete($codice){
        $this->tb_curriculum->set('est_id', $codice);
        $this->tb_curriculum->eliminar();
    }
}
?>
