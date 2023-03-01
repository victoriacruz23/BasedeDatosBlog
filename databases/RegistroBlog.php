<?php
require_once ("conexion.php");
$id= $_POST["id"];
$categoria= $_POST["categoria"];
$titulo = $_POST["Titulo"];
$Descripcion = $_POST["Descripcion"];

if($categoria == 0){
    echo '<script>
    alert("Selecciona una categoria");
    window.location="../blog/creablock.php"
    </script>';
exit;
}
$insert= $conexion ->query("INSERT INTO blog(id_usuario, id_categoria, titulo, descripcion) VALUES ('$id','$categoria','$titulo','$Descripcion')");
if($insert){
    echo '<script>
    alert("Blog registrado");
    window.location="../blog/creablock.php"
    </script>';
}else{
    echo '<script>
    alert("Error: Blog no registrada");
    window.location="../blog/creablock.php"
    </script>';
}


?>