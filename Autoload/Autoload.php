<?php
function autoload($clase) {
    include "Clases/".$clase.".php";
}

spl_autoload_register('autoload');

Persona::mostrar("hola mundo");
?>

