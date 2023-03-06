<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
include("conexion.php");
// print_r($_POST);exit;
$nombre = $_POST["categoria"];
$ruta = $_POST["ruta"];
$query = $conexion->query("INSERT INTO categoria(descripcion) VALUES ('$nombre')");
if ($query) {
    alerta('Categoria registrada', 'success', '../blog/categoria.php');
    exit;
    // echo '<script>
    // alert("Categoria registrada");
    // window.location="../blog/categoria.php"
    // </script>';
}else{
    alerta('Error Categoria no registrada', 'error', '../blog/categoria.php');
    exit;

    //     echo '<script>
    //     alert("Error Categoria no registrada");
    //     window.location="../blog/categoria.php"
    //     </script>';
}
?>