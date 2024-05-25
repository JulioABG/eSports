<?php
    include("abre.php");
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Calle = $_POST['Calle'];
    $Bebida = $_POST['Bebida'];
    $Numero = $_POST['Numero'];
    $Correo = $_POST['Correo'];

$consulta = "INSERT INTO clientes(Nombre, Apellido, Calle, Bebida, Numero, Correo) VALUES
('$Nombre', '$Apellido', '$Calle', '$Bebida', '$Numero','$Correo')";

if ($conexion->query($consulta) === TRUE){
    header("Location: index.html");
}else{
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}
$conexion->close();
?>
