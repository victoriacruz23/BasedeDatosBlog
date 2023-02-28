<?php
$nombre = $_POST["categoria"];
$ruta = $_POST["ruta"];
require_once ("conexion.php");
$query= $conexion ->query("INSERT INTO categoria(descripcion) VALUES ('$nombre')");
if($query){
    echo '<script>
    alert("Categoria registrada");
    window.location="../blog/categoria.php"
    </script>';
}{
    echo '<script>
    alert("Error Categoria no registrada");
    window.location="../blog/categoria.php"
    </script>';
}
?>