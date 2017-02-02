<?php
    class Facebook{
        //atributos
        public $nombre;
        public $edad;
        private $pass;
        
        
        //metodos
        public function __construct($nombre,$edad,$pass) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pass = $pass;
        }
        
        public function verInformacion() {
            echo "Nombre: ".$this->nombre."<br>";
            echo "edad: ".$this->edad."<br>";
            self::cambiarPass("123");
            echo "pass: ".$this->pass."<br>";
        }
        
        private function cambiarPass($pass){
            $this->pass = $pass;
        }
        
        
    }
    
    $facebook = new Facebook("Matias Ballesteros", 22, 12345);
  //  $facebook->cambiarPass("123");
    $facebook->verInformacion();

?>

