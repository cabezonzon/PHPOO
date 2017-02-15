<?php
/*require_once "Models/Persona.php";
require_once "Controllers/PersonaControllers.php";*/    //PARA LLAMAR A DISTINTAS CLASES DENTRO DE UNA CARPETA

spl_autoload_register(function($clase){
    
    $ruta = str_replace("\\", "/", $clase).".php";
    if (is_readable($ruta)){
        require_once $ruta;
    }else{
        echo "El archivo no existe";
        echo $ruta;
    }
    
});


Models\Persona::hola();
echo "<br>";
Controllers\PersonaControllers::hola();


?>

