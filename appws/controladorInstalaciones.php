<?php
include_once("clases/tb_instalaciones.php");

class controladorInstalaciones{
    //Atributo
    private $tb_instalaciones;
    //Metodos
    public function __construct() {
        $this->tb_instalaciones = new tb_instalaciones();
    }
    public function index() {
        $resultado = $this->tb_instalaciones->listar();
        return $resultado;
    }
    public function crear($request){
        foreach($request as $key => $value){
            $this->tb_instalaciones->set($key, $value);
        }
        $this->tb_instalaciones->crear();
        return 'ok';    
    }
    public function delete($codice){
        $this->tb_instalaciones->set('inst_id', $codice);
        $this->tb_instalaciones->eliminar();
    }

 }
?>
