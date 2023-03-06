<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
require_once("conexion.php");
$usuario = $_GET["eliminar"];

$usuario= $conexion ->query("DELETE FROM usuario WHERE id_usuario= $usuario");
if($usuario){   
    alerta('El usuario se elimino corectamente','success','../blog/consultaUsuario.php');

    // echo "
    // <?php> 
    // alert('El usuario se elimino corectamente');
    // window.location = '../blog/consultaUsuario.php';
    // </?php>";
    exit;
}else{
    alerta('Error al eliminar el usuari','error','../blog/consultaUsuario.php');
    // echo "
    // <?php> 
    // alert('Error al eliminar el usuario');
    // window.location = '../blog/consultaUsuario.php';
    // </?php>";
    exit;

}

?>