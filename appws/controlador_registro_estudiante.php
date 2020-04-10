<?php
include_once("clases/tb_registro_estudiante.php");

class controlador_registro_estudiante{
    //Atributo
    private $tb_registro_estudiante;
    //Metodos
    public function __construct() {
        $this->tb_registro_estudiante = new tb_registro_estudiante();
    }
    
    public function index(){
        $resultado = $this->tb_registro_estudiante->listar();
        return $resultado;
    }

    public function crear($request,$foto){
        foreach($request as $key => $value){
            $this->tb_registro_estudiante->set($key, $value);
        }
        $resultado = $this->tb_registro_estudiante->crear();
        if($resultado == '0'){
            return 'Estudiante ya encuentra registrado';
        }
        
        $this->tb_registro_estudiante->set('est_foto', $foto);
        $resp2 = $this->tb_registro_estudiante->gestionfoto($resultado);
        return 'Estudiante Registrado con éxito';
    }
    
    public function delete($codice){
        $this->tb_registro_estudiante->set('est_id', $codice);
        $this->tb_registro_estudiante->eliminar();
    }
}
    
?>
