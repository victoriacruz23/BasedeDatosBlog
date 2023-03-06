<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
// print_r($_POST);exit;
include('conexion.php');
$img = $_FILES["img"];
if(empty($_POST['blog'])){
    exit;
}
$blog = $_POST['blog'];
#verificacion de la carpeta existe
$carpetaImg = '../docs/img/';
#creacion de carpeta en caso de no existir
if (!is_dir($carpetaImg)) {
    mkdir($carpetaImg);
}
$nombreImg = md5(uniqid(rand(), true)) . ".jpg";
move_uploaded_file($img["tmp_name"], $carpetaImg . $nombreImg);
$insert = $conexion->query("INSERT INTO imagen( ruta, id_blog) VALUES ('$nombreImg','$blog')");
$ruta = '../blog/editarblock.php?id='.$blog;
if($insert){
    alerta('Imagen registrada','success',$ruta);
    // echo '<script>
    // alert("Imagen registrada");
    // window.location="../blog/editarblock.php?id='.$blog.'"
    // </script>';
}else{
    alerta('Imagen error','error',$ruta);
    // echo '<script>
    // alert("Imagen error");
    // window.location="../blog/editarblock.php?id='.$blog.'"
    // </script>';
}
?>
