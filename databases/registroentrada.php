<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
include('conexion.php');
$idblog = $_POST["idblog"];
$descripcion = $_POST["descripcion"];
$inser = $conexion->query("INSERT INTO entrada( texto_entrada, id_blog) VALUES ('$descripcion','$idblog')");
$ruta = '../blog/verblog.php?id='.$idblog;
if($inser){
    alerta('Entrada Regsitrada','success',$ruta);
    // echo '<script>
    // alert("Entrada Regsitrada ");
    // window.location="../blog/verblog.php?id='.$idblog.'"
    // </script>';
}else{
    alerta('Entrada error','error',$ruta);

    // echo '<script>
    // alert("Entrada error");
    // window.location="../blog/verblog.php?id='.$idblog.'"
    // </script>';
}
?>