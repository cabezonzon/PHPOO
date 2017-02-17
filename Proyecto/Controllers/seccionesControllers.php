<?php namespace Controllers;
use Models\Seccion as Seccion;
    class seccionesControllers{
        
        private $secciones;
        
        public function __construct() {
            $this->secciones = new Seccion();
        }
        
        public function index(){
           $datos = $this->secciones->listar();
           return $datos;
        }
        
        public function agregar() {
            if($_POST){
                $this->secciones->set("nombre", $_POST['nombre']);
                $this->secciones->add();
                header('Location: '.URL."secciones");
                        
            }
        }
    }


?>