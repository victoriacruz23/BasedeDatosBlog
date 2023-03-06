<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
require_once("conexion.php");

$nombre = $_POST["nombre"];
$username = $_POST["usuario"];
$clave = $_POST["password"];
$verifica = $_POST["verifica"];
$direccion = $_POST["direccion"];
if ($clave == $verifica) {
    $consulta = $conexion->query("SELECT * FROM usuario WHERE username= '$username'");
    // validar si el nickname existe
    if ($consulta->num_rows >= 1) {
        alerta('Selecciona otro ninckname','success','../RegistroUser.php');
        // echo '<script>
        // alert("Selecciona otro ninckname");
        // window.location="../RegistroUser.php"
        // </script>';
    } else {
        $password_hash = password_hash($clave, PASSWORD_BCRYPT);
        $regis = $conexion->query("INSERT INTO usuario(nombres,id_tipo, username, clave, direccion) 
                                            VALUES ('$nombre',2,'$username','$password_hash','$direccion')");
        if ($regis) {
            alerta('Usuario registrado','success','../index.php');
            // echo '<script>
            // alert("Usuario registrado");
            // window.location="../index.php"
            // </script>';
        } {
            alerta('Error: Usuario no registrada','error','../RegistroUser.php');
            // echo '<script>
            // alert("Error: Usuario no registrada");
            // window.location="../RegistroUser.php"
            // </script>';
        }
    }
} else {
    alerta('Error: Contraseñas no coinciden','error','../RegistroUser.php');
    // echo '<script>
    // alert("Error: Contraseñas no coinciden");
    // window.location="../RegistroUser.php"
    // </script>';
}
?>