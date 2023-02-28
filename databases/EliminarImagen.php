<?php
require_once("conexion.php");
$imagen = $_FILES["eliminar"];

$imagen= $conexion ->query("DELETE FROM imagen WHERE id_imagen= $imagen");
if($imagen){   
    echo "
    <script> 
    alert('La categoria se elimino corectamente');
    window.location = '../blog/eliminarImagen.php';
    </script>";
    exit;
}else{
    echo "
    <script> 
    alert('Error al eliminar categoria');
    window.location = '../blog/eliminarImagen.php';
    </script>";
    exit;

}

?>