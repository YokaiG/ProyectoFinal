<?php
include( "abre.php" );

$Nombre      = $_POST['Nombre'];
$Apellido    = $_POST['Apellido'];
$Telefono      = $_POST['Telefono'];



$consulta = "INSERT INTO suscripcion (Nombre, Apellido, Telefono) VALUES ('$Nombre','$Apellido','$Telefono')";
if($conexion->query($consulta)===TRUE){
    header("Location: suscripcion.html");
}else{
    echo"Error:" . $consulta . "<br>" . $conexion->error;
}
$conexion->close();

?>