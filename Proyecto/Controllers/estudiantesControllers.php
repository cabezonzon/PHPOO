<?php namespace Controllers;
    
    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;
    
    class estudiantesControllers{
        
        private $estudiante;
        private $seccion;
        
        public function __construct() {
            $this->estudiante = new Estudiante();
            $this->seccion = new Seccion();
            
        }

        public function index(){
            $dato = $this->estudiante->listar();
            return $dato;
        }
        
        public function agregar(){
        if(!$_POST){
            $datos=  $this->seccion->listar();
            return $datos;
        }else{
            $permitidos = array("image/jpeg","image/png","image/gif","image/jpg");
            $limite = 700;
            if(in_array($_FILES['imagen']['type'], $permitidos)&& $_FILES['imagen']['size'] <= $limite * 1024){
                $nombre = date('is').$_FILES['imagen']['name'];
                $ruta= "Views".DS."template".DS."imagenes".DS.$nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $this->estudiante->set("nombre", $_POST['nombre']);
                $this->estudiante->set("edad", $_POST['edad']);
                $this->estudiante->set("promedio", $_POST['promedio']);
                $this->estudiante->set("imagen", $nombre);
                $this->estudiante->set("id_seccion", $_POST['id_seccion']);
                $this->estudiante->add();
                header("Location: ".URL."estudiantes");

            }
        }   
            
            
        }
        
        
        public function editar($id) {
            $this->estudiante->set("id", $id);
            $datos = $this->estudiante->view();
            return $datos;
        }
    }
    
    

?>