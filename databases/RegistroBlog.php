<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
require_once("conexion.php");
$id = $_POST["id"];
$categoria = $_POST["categoria"];
$titulo = $_POST["Titulo"];
$Descripcion = $_POST["Descripcion"];

if ($categoria == 0) {
    alerta('Selecciona una categoria', 'error', '../blog/creablock.php');
    // echo '<script>
    // alert("Selecciona una categoria");
    // window.location="../blog/creablock.php"
    // </script>';
    exit;
}
$insert = $conexion->query("INSERT INTO blog(id_usuario, id_categoria, titulo, descripcion) VALUES ('$id','$categoria','$titulo','$Descripcion')");
if ($insert) {
    alerta('Blog registrado', 'success', '../blog/creablock.php');
    // echo '<script>
    // alert("Blog registrado");
    // window.location="../blog/creablock.php"
    // </script>';
} else {
    alerta('Error: Blog no registrada', 'error', '../blog/creablock.php');

    // echo '<script>
    // alert("Error: Blog no registrada");
    // window.location="../blog/creablock.php"
    // </script>';
}


?>