<?php
if (empty($_GET['idimg'])) {
    header("Location: ../blog/index.php");
    exit;
} else {
    $img = $_GET['idimg'];
    $blog_id = $_GET['iduser'];
    $nombreimg = $_GET['imgname'];
    include('conexion.php');
    $carpetaImg = "../docs/img/";
    unlink($carpetaImg . $nombreimg);
    
    $eliminar = $conexion->query("DELETE FROM imagen WHERE id_imagen='$img'");
    if($eliminar){
        echo '<script>
        alert("Imagen Eliminada");
        window.location="../blog/editarblock.php?id='.$blog_id.'"
        </script>';
    }else{
        echo '<script>
        alert("Imagen error");
        window.location="../blog/editarblock.php?id='.$blog_id.'"
        </script>';
    }

}
