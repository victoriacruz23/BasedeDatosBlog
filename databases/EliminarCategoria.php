<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
require_once("conexion.php");
$categoria = $_GET["eliminar"];

$consultablog = $conexion->query("SELECT * FROM blog WHERE id_categoria = $categoria");
if ($consultablog->num_rows >= 1) {
    alerta('No se Puede eliminar la categoria','error','../blog/eliminarcategorias.php');
    exit;
} else {
    $categoria = $conexion->query("DELETE FROM categoria WHERE id_categoria= $categoria");
    if ($categoria) {
        alerta('La categoria se elimino corectamente', 'success', '../blog/eliminarcategorias.php');
        // echo "
        // <script> 
        // alert('La categoria se elimino corectamente');
        // window.location = '../blog/eliminarcategorias.php';
        // </script>";
        exit;
    } else {
        alerta('Error al eliminar categoria', 'error', '../blog/eliminarcategorias.php');
        // echo "
        // <script> 
        // alert('Error al eliminar categoria');
        // window.location = '../blog/eliminarcategorias.php';
        // </script>";
        exit;
    }
}

?>