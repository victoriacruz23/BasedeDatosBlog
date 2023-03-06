<?php
include('conexion.php');
$idblog = $_POST["idblog"];
$descripcion = $_POST["descripcion"];
$inser = $conexion->query("INSERT INTO entrada( texto_entrada, id_blog) VALUES ('$descripcion','$idblog')");

if($inser){
    echo '<script>
    alert("Entrada Regsitrada ");
    window.location="../blog/verblog.php?id='.$idblog.'"
    </script>';
}else{
    echo '<script>
    alert("Entrada error");
    window.location="../blog/verblog.php?id='.$idblog.'"
    </script>';
}
?>