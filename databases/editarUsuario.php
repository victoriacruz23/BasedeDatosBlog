<?php
include('conexion.php');
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$direccion = $_POST['direccion'];
$consulta = $conexion->query("SELECT * FROM usuario WHERE id_usuario= '$id'");
if($consulta->num_rows == 1){
    $update = $conexion->query("UPDATE usuario SET nombres='$nombre',username='$usuario',direccion='$direccion' WHERE '$id'");
    if($update){
        echo '<script>
        alert("Editado correctamente");
        window.location="../blog/consultaUsuario.php"
        </script>';
    }else{
        echo '<script>
        alert("Error al editar");
        window.location="../blog/consultaUsuario.php"
        </script>';
    }
    
}else{
    echo '<script>
    alert("El usuario no existe");
    window.location="../blog/consultaUsuario.php"
    </script>';
}
