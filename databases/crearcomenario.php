<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
include('conexion.php');
$idblog = $_POST['idblog'];
$identrada = $_POST["identrada"];
$comentario = $_POST["comentario"];
// print_r($_POST);
// exit;
$inser = $conexion->query("INSERT INTO comentario(comentario,id_entrada) VALUES ('$comentario','$identrada')");

if($inser){
    // echo '<script>
    // alert("Comentario Regsitrado");
    // window.location=""
    // </script>';
    $ruta = '../blog/verblog.php?id='.$idblog;
    // echo $ruta;
    alerta('Comentario Regsitrado','success',$ruta);
}else{
    $ruta = '../blog/verblog.php?id='.$idblog;
    alerta('Error al crear comentario','error',$ruta);
    // echo '<script>
    // alert("Comentario error");
    // window.location="../blog/verblog.php?id='.$idblog.'"
    // </script>';
}
?>