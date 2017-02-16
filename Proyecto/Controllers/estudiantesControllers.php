<?php namespace Controllers;
    
    use Models\Estudiante as Estudiante;
    
    class estudiantesControllers{
        
        private $estudiante;
        
        public function __construct() {
            $this->estudiante = new Estudiante();
        }

        public function index(){
            $dato = $this->estudiante->listar();
            return $dato;
        }
    }
    
    

?>