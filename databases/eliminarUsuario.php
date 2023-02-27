<?php
require_once("conexion.php");
$usuario = $_GET["eliminar"];

$usuario= $conexion ->query("DELETE FROM usuario WHERE id_usuario= $usuario");
if($usuario){   
    echo "
    <script> 
    alert('El usuario se elimino corectamente');
    window.location = '../blog/consultaUsuario.php';
    </script>";
    exit;
}else{
    echo "
    <script> 
    alert('Error al eliminar el usuario');
    window.location = '../blog/consultaUsuario.php';
    </script>";
    exit;

}

?>