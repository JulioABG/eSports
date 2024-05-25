<?php


$conexion = new mysqli("localhost", "root", "", "comex");
if($conexion){
    echo "La gestion fue existosa !!";
}else{
    echo "Fallo la gestion";
}
?>