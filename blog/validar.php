<?php
session_start();
// evaluamos si ela variable sesion existe
if (isset($_SESSION["usuario"])) {
    
} else {
    // si la sesion no existe se dirige al index
    header("Location:../index.php ");
}
?>