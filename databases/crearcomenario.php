<?php
include('conexion.php');
$idblog = $_POST['idblog'];
$identrada = $_POST["identrada"];
$comentario = $_POST["comentario"];
// print_r($_POST);
// exit;
$inser = $conexion->query("INSERT INTO comentario(comentario,id_entrada) VALUES ('$comentario','$identrada')");

if($inser){
    echo '<script>
    alert("Comentario Regsitrado");
    window.location="../blog/verblog.php?id='.$idblog.'"
    </script>';
}else{
    echo '<script>
    alert("Comentario error");
    window.location="../blog/verblog.php?id='.$idblog.'"
    </script>';
}
?>