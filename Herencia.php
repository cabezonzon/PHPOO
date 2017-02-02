<?php

    class Vehiculo{
        //atributos
        public $motor = false;
        public $marca;
        public $color;
        
        //metodos
        protected function estado() {
            if($this->motor){
                echo "El motor esta encendido";
            }else{
                echo "El motor esta apagado";
            }
        }
        
        public function encender() {
            if($this->motor){
                echo"Cuidado, el motor ya esta prendido";
                
            }else{
                echo"El moto ahora esta encedido";
                $this->motor = true;
            }
        }
        
        
    }
    
    class Moto extends Vehiculo{
        public function estadoMoto(){
            $this->estado();
        }
    }
    
    class CuatriMoto extends Moto{
        
    }
    
    $cuatriMoto = new CuatriMoto();
    $cuatriMoto->estadoMoto();
    
    /*$moto = new Moto();
    $moto->estadoMoto();*/
    
    /*
    $vehiculo = new Vehiculo();
    $vehiculo->estado();
    $vehiculo->encender();
    $vehiculo->estado();*/
?>

