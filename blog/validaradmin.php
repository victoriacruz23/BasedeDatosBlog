<?php
session_start();
// evaluamos si ela variable sesion existe
if (isset($_SESSION["usuario"])) {
    if($_SESSION["usuario"]["id_tipo"] != 1){
        // si el id no es el id de un adminsitrador, se destruye la sesion
        // es decir cualquier id diferente a 1 no es administrador
       session_destroy();
       header("Location:../index.php ");  
    }else{
        //No se realiza ninguna accion por que si es un administrador 
    }
} else {
    // si la sesion no existe se dirige al index
    header("Location:../index.php ");
}
?>