<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
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
    $ruta = '../blog/editarblock.php?id='.$blog_id;
    if($eliminar){
        alerta('Imagen Eliminada','success',$ruta);
        // echo '<script>
        // alert("Imagen Eliminada");
        // window.location="../blog/editarblock.php?id='.$blog_id.'"
        // </script>';
    }else{
        alerta('Imagen error','eliminar',$ruta);
        // echo '<script>
        // alert("Imagen error");
        // window.location="../blog/editarblock.php?id='.$blog_id.'"
        // </script>';
    }

}
?>