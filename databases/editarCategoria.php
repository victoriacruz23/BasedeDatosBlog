<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
require_once("conexion.php");

$id_categoria = $_POST['id'];
$categoria = $_POST['categoria'];
$consulta = $conexion->query("UPDATE categoria SET descripcion='$categoria' WHERE id_categoria= '$id_categoria'");

if($consulta){
    // echo " <script>
    //         alert('Categoria actualizada correctamente');
    //         window.location = '../blog/eliminarcategorias.php';
    //     </script>";
    alerta('Categoria actualizada correctamente','success','../blog/eliminarcategorias.php');
    
}else{
    alerta('Error al actualizar Categoria','error','../blog/eliminarcategorias.php');
    // echo " <script>
    //         alert('Error al actualizar Categoria');
    //         window.location = '../blog/eliminarcategorias.php';
    //     </script>";
}
?>