<?php
abstract class Molde{
    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
}
class Persona extends Molde{
    private $mensaje = "Hola gente de codigoFacilito";
    private $nombre; 
    public function ingresarNombre($nombre, $username = "MB") {
        $this->nombre = $nombre.$username;
    }

    public function obtenerNombre() {
        print $this->nombre;
    }
    
    public function mostrar(){
        print $this->mensaje;
    }
}
$obj = new Persona();
$obj->ingresarNombre("Matias", "Ballesteros");
$obj->obtenerNombre();
?>

