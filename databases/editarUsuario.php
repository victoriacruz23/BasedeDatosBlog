<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
include('conexion.php');
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$direccion = $_POST['direccion'];
$consulta = $conexion->query("SELECT * FROM usuario WHERE id_usuario= '$id'");
if($consulta->num_rows == 1){
    $update = $conexion->query("UPDATE usuario SET nombres='$nombre',username='$usuario',direccion='$direccion' WHERE '$id'");
    if($update){
        alerta('Editado correctamente','success','../blog/consultaUsuario.php');
        // echo '<script>
        // alert("");
        // window.location=""
        // </script>';
    }else{
        alerta('Error al editar','error','../blog/consultaUsuario.php');
        // echo '<script>
        // alert("");
        // window.location="../blog/consultaUsuario.php"
        // </script>';
    }
    
}else{
    alerta('El usuario no existe','error','../blog/consultaUsuario.php');

    // echo '<script>
    // alert("El usuario no existe");
    // window.location="../blog/consultaUsuario.php"
    // </script>';
}
?>