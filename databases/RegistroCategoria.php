<?php
print_r($_POST);
$nombre = $_POST["categoria"];
$ruta = $_POST["ruta"];
require_once ("conexion.php");
$query= $conexion ->query("INSERT INTO categoria(descripcion) VALUES ('$nombre')");
if($query){
    echo '<script>
    alert("Categoria registrada");
    window.location="../blog/categorias.php"
    </script>';
}{
    echo '<script>
    alert("Error Categoria no registrada");
    window.location="../blog/categorias.php"
    </script>';
}
?>