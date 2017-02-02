<?php
   class Persona {
                //atributos
                public $nombre = "pedro";
                
                
                //metodos
                public function hablar($mensaje){
                    echo $mensaje;
                }
            }
        $persona = new Persona();
        echo $persona->nombre;
        $persona->hablar("Saludos desde aqui");
?>

