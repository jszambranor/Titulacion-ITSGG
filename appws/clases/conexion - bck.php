<?php
class conexion {
    //Atributos
    private $host;
    private $user;
    private $pass;
    private $bd;
    private $con;
    public $consulta;

    //Metodos
    public function __construct() {
        $this->host ="localhost";
        $this->user ="root";
        $this->pass ="";
        $this->bd ="titulacion_6to_c";
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->bd);
    }

    public function consultaSimple($sql) {
        mysqli_query($this->con, $sql);
    }

    public function consultaRetorno($sql) {
        $consulta= mysqli_query($this->con, $sql);
        return $consulta;
    }

    public function consultaSimpleid($sql) {
        mysqli_query($this->con, $sql);
        $id = mysqli_insert_id($this->con);
        return $id;
    }
}
?>
