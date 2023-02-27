<?php
require_once("conexion.php");

$id_categoria = $_POST['id'];
$categoria = $_POST['categoria'];

$consulta = $conexion->query("UPDATE categoria SET descripcion='$categoria' WHERE id_categoria= '$id_categoria'");
if($consulta){
    echo " <script>
            alert('Categoria actualizada correctamente');
            window.location = '../blog/eliminarcategorias.php';
        </script>";
}else{
    echo " <script>
            alert('Error al actualizar Categoria');
            window.location = '../blog/eliminarcategorias.php';
        </script>";
}