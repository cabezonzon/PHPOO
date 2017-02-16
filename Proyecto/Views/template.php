<?php namespace Views;
    $template = new Template();

    class Template{
        
        public function __construct() {
?>      
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Administracion de estudiantes | Desarrollo-->SoloPermutas</title>
        <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Administracion de estudiantes</a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo URL; ?>">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" >Estudiante</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo URL; ?>secciones">Listado</a></li>
                                <li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
                            </ul>
                        </li>
                    </ul>    
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://codigofacilito.com">SoloPermutas</a></li>
                    </ul>
                </div>    
            </div>
        </nav>    
                
        
<?php
        }


        public function __destruct() {
?>  
        <footer class="navbar-fixed-bottom">
            Todos los derechos reservados &copy 2017 <br>
            Matias Ballesteros | <b>SoloPermutas</b>
        </footer>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
    </body>
    </html>
        
<?php        
        }
    }




?>

