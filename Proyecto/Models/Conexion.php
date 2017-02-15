<?php namespace Models;
class Conexion{
    private $datos = array(
        "host" => "localhost",
        "user" => "root",
        "pw" => "",
        "db" => "proyectophp"

    );
    private $con;
    
    public function __construct() {
        $this->con=new \mysqli($this->datos['host'],$this->datos['user'],
                $this->datos['pw'],$this->datos['db']);
        
    }
    
    public function consultaSimple($sql) {
        $this->con->query($sql);
    }
    
    public function consultaRetorno($sql) {
        $datos = $this->con->query($sql);
        return $datos;
    }
}

?>