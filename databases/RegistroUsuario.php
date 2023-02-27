<?php
require_once ("conexion.php");
$nombre = $_POST["usurio"];
$username = $_POST["usuario"];
$clave = $_POST["password"];
$direccion = $_POST["direccion"];
$regis= $conexion -> query("INSERT INTO usuario(nombres, username, clave, direccion) 
                                       VALUES ('$nombre','$username','$clave','$direccion')");
if($regis){
    echo '<script>
    alert("Usuario registrado");
    window.location="../blog/usuario.php"
    </script>';
}{
    echo '<script>
    alert("Error: Usuario no registrada");
    window.location="../blog/usuario.php"
    </script>';
}
?>