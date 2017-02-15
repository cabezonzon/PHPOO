<h3>Vista del estudiante principal</h3>
<?php
    $datos = $estudiantes->index();
    while($row = mysqli_fetch_array($datos)){
        echo $row['nombre'];
    }
    
?>