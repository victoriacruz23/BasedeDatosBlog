<?php
require_once("conexion.php");
$editar = filter_var(file_get_contents("php://input"), FILTER_SANITIZE_NUMBER_INT);
$info= $conexion ->query("SELECT * FROM categoria WHERE descripcion = '$editar'");
if ($info) {
    while ($row = $info->fetch_assoc()) {

          $eliminar =  $row["id_categoria"];
          $Nombre =  $row["descripcion"];
    }
    $respuesta = array(
          "eliminar" => "$eliminar",
          "Nombre" => "$Nombre",
    );
}
echo json_encode($respuesta);
$conexion->close();


?>