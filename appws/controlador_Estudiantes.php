<?php
include_once("clases/tb_estudiantes.php");

class controlador_Estudiantes{
    //Atributo
    private $tb_estudiantes;
    //Metodos
    public function __construct() {
        $this->tb_estudiantes = new tb_estudiantes();
    }
    
    public function index(){
        $resultado = $this->tb_estudiantes->listar();
        return $resultado;
    }

    public function crear($request,$foto){
        foreach($request as $key => $value){
            $this->tb_estudiantes->set($key, $value);
        }
        $resultado = $this->tb_estudiantes->crear();
        if($resultado == '0'){
            return 'Estudiante ya encuentra registrado';
        }
        
        $this->tb_estudiantes->set('taxta_foto', $foto);
        $resp2 = $this->tb_estudiantes->gestionfoto($resultado);
        return 'Estudiante Registrado con éxito';
    }
    
    public function delete($codice){
        $this->tb_estudiantes->set('est_id', $codice);
        $this->tb_estudiantes->eliminar();
    }
}
    
?>
