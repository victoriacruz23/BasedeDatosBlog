<?php
require_once ("conexion.php");
$categoria= $_POST["categoria"];
$fecha = $_POST["Fecha"];
$titulo = $_POST["Titulo"];

$img = $_FILES["formFileSm"];
$carpeta= '../document/img/';

if(!is_dir($carpeta)){
    mkdir($carpeta);
}

$nombreImg = md5(uniqid(rand(), true)).".jpg";
// http://localhost/webserviceprovedor/
$nom_ruta = "http://localhost/webserviceprovedor"."/document/img/".$nombreImg;
move_uploaded_file($img["tmp_name"],$carpeta . $nombreImg);
$consu = $conexion->query("INSERT INTO `imagen`(`ruta`) VALUES ('$nom_ruta')");

$insert="INSERT INTO "



?>