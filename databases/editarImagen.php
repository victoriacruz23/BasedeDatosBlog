<?php
require_once("conexion.php");

$id_imagen = $_FILES['id'];

$imagen = $_FILES['imagen'];

$consulta = $conexion->query("UPDATE imagen SET imagen='$categoria' WHERE id_imagen= '$id_imagen'");

if($consulta){
    echo " <script>
            alert('imagen actualizada correctamente');
            window.location = '../blog/eliminarImagen.php';
        </script>";
}else{
    echo " <script>
            alert('Error al actualizar Categoria');
            window.location = '../blog/eliminarImagen.php';
        </script>";
}