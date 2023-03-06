<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
require_once("conexion.php");
// print_r($_POST);
$usuario = $_POST ["usuario"];
$contra = $_POST ["password"];
// $consulta = $conexion-> query("");
$consulta = $conexion->query("SELECT * FROM usuario WHERE username = '$usuario'");
$consultaSession = $conexion->query("SELECT * FROM usuario WHERE username = '$usuario'");
if($consultaSession->num_rows == 1){
    $datoSession = $consultaSession ->fetch_assoc();
}
// print_r($consulta->fetch_assoc());
if($consulta->num_rows == 1){
    while($info = $consulta->fetch_assoc()){
        $pass =  $info['clave'];
    }
    // password_verify(Contreaseña sin hash, contraseña con hash)
    if (password_verify($contra, $pass)) {
        // sesiones
        session_start();
        $_SESSION["usuario"] = $datoSession;
        alerta('Acceso correcto !Conexión Exitosa!','success','../blog/index.php');
        // echo "<script>
        // alert ('Acceso correcto !Conexión Exitosa!');
        //     window.location = '../blog/index.php';
        // </script>";
        exit;
   
    }else{
        alerta('Contraseña incorrecta','error','../index.php');
        // echo "
        // <script>
        // alert('Contraseña incorrecta');
        // window.location = '../index.php';
        // </script>
        // ";
    }
}else{
    alerta('El usuario no existe','error','../index.php');

    // echo "
    // <script>
    // alert('El usuario no existe');
    // window.location = '../index.php';
    // </script>
    // ";
}
?>