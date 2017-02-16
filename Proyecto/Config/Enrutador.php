<?php namespace Config;

    class Enrutador{
        
        public static function run(Request $request) {
            $controlador = $request->getControlador()."Controllers";
            $ruta = ROOT ."Controllers".DS.$controlador.".php";
            $metodo = $request->getMetodo();
            
            if ($metodo == "index.php"){
                $metodo = "index";
            }
            $arugmento = $request->getArgumento();
            if(is_readable($ruta)){
                require_once $ruta;
                $mostrar = "Controllers\\".$controlador;
                $controlador = new $mostrar;
                if(!isset($arugmento)){
                    $datos = call_user_func(array($controlador, $metodo));
                }else{
                    $datos = call_user_func_array(array($controlador, $metodo), $arugmento);
                }
            }
        //cargar vista
            $ruta = ROOT."Views".DS.$request->getControlador().DS.$request->getMetodo().".php";
            if(is_readable($ruta)){
                
                require_once $ruta;
            }else{
                
                print "No se encontro la ruta";
            }
            
            
            
        }
        
    }

?>