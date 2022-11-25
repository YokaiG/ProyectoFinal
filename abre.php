<?php
$conexion = new mysqli("localhost", "id19388877_pruebadatos", "Nf!Vdg(rS]1TBqCs", "id19388877_angelb");
if($conexion){
    /*echo "conexion";*/
    header("Location:suscripcion.html");
}else{
    echo "Falla en la coneccion";
}
?>