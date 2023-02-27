<?php
require_once("conexion.php");
$categoria = $_GET["eliminar"];

$categoria= $conexion ->query("DELETE FROM categoria WHERE id_categoria= $categoria");
if($categoria){   
    echo "
    <script> 
    alert('La categoria se elimino corectamente');
    window.location = '../blog/eliminarcategorias.php';
    </script>";
    exit;
}else{
    echo "
    <script> 
    alert('Error al eliminar categoria');
    window.location = '../blog/eliminarcategorias.php';
    </script>";
    exit;

}

?>