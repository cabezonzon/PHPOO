<?php
class Pagina{
    //atributos
    public $nombre = "Codigo Facilito";
    public static $url="www.codigofacilito.com";    
    
    //metodos
    public function bienvenida(){
        echo"Bienvenidos a <b>".$this->nombre."</b> la pagina es".self::url."<br>";
        
    }
    public static function bienvendio2() {
        echo"Bienvenidos";
    }
    }
    class web extends Pagina{
        
    }
    web::bienvenida2();
    /*$pagina = new Pagina();
    $pagina->bienvenida();*/

?>

