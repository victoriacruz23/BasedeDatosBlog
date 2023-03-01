<?php
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
if($insert){
    echo '<script>
    alert("Imagen registrada");
    window.location="../blog/editarblock.php?id='.$blog.'"
    </script>';
}else{
    echo '<script>
    alert("Imagen error");
    window.location="../blog/editarblock.php?id='.$blog.'"
    </script>';
}
?>
