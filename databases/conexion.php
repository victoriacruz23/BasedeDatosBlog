<?php
$conexion =  mysqli_connect("localhost", "root", "", "proyectodb");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

?>