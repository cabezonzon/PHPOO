<?php
trait Persona{
    public $nombre;
    
    public function mostrarNombre() {
        echo $this->nombre;
    }
    
    abstract function asignarNombre($nombre);
}

trait Trabajador{
protected function mensaje() {
    echo "y soy un trabajador";
}
}
class Personaa{
use Persona, Trabajador;
    public function asignarNombre($nombre) {
        $this->nombre = $nombre.$this->mensaje();
    }

}

$persona = new Personaa(); 
$persona->asignarNombre("Matias");
echo $persona->mostrarNombre();

?>

