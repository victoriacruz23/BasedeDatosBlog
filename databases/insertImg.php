<?php
require_once ("conexion.php");
$img = $_FILES["formFileSm"];
$carpeta= '../document/img/';

if(!is_dir($carpeta)){
    mkdir($carpeta);
}

$nombreImg = md5(uniqid(rand(), true)).".jpg";
// http://localhost/webserviceprovedor/
$nom_ruta = "http://localhost/bloc"."/document/img/".$nombreImg;
move_uploaded_file($img["tmp_name"],$carpeta . $nombreImg);
$consu = $conexion->query("INSERT INTO `imagen`(`ruta`) VALUES ('$nom_ruta')");
?>